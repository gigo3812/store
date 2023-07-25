<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificationSms extends Notification
{
    use Queueable;
    protected $type;
    protected $mobile;
    protected $text;

    /** 
     * @param string type body template
     */
    public function __construct($type, $mobile, $text)
    {
        $this->type = $type;
        $this->mobile = $mobile;
        $this->text = $text;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        $this->sendSms($notifiable);
        return [];
    }

    /** send sms */
    public function sendSms(object $notifiable)
    {
        try {
            /** get body id */
            $bodyId = $this->detectType();

            /** ------------------- start send message --------------------------- */
            sleep(2);
            $data = array('username' => config('app.variableEnv.UsernamePayamak'), 'password' => config('app.variableEnv.PasswordPayamak'), 'text' =>  $this->text, 'to' => $this->mobile, "bodyId" => $bodyId);
            $post_data = http_build_query($data);
            $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber');
            curl_setopt($handle, CURLOPT_HTTPHEADER, array(
                'content-type' => 'application/x-www-form-urlencoded'
            ));
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($handle, CURLOPT_POST, true);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
            return curl_exec($handle);

            /** ------------------- start send message --------------------------- */
        } catch (\Throwable $th) {
            return [
                'status' => 'send'
            ];
        }
    }

    /** set body-id template sms with $this->type */
    function detectType()
    {
        $bodyId = null;
        switch ($this->type) {
            case 'verify':
                $bodyId = env('MELIPAYAMAK_Verify');
                break;

            default:
                $bodyId = 20000;
                break;
        }
        return $bodyId;
    }
}
