<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'فروشگاه اینترنتی هنرستان نمونه البرز',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'هنرستان نمونه البرز با هنرجویان توانا و مستعد اقدام به تولید صنایع دستی و ..... نموده است. شما عزیزان می توانید از طریق این وب سایت اقدام به خرید محصولات نمائید.',
                'details' => '',
                'type' => 'text',
                'order' => 3,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 1,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings\\June2023\\say5Sg5eioatY2WZx88X.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 11,
                'key' => 'site.address',
                'display_name' => 'آدرس',
                'value' => 'استان خراسان جنوبی - شهرستان بیرجند - هنرستان نمونه البرز',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Site',
            ),
            7 => 
            array (
                'id' => 12,
                'key' => 'site.tel',
                'display_name' => 'تلفن',
                'value' => '056-32402245',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Site',
            ),
            8 => 
            array (
                'id' => 13,
                'key' => 'admin.title',
                'display_name' => 'title',
                'value' => 'هنرستان البرز',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 14,
                'key' => 'admin.description',
                'display_name' => 'description',
                'value' => 'فروشگاه اینترنتی محصولات هنرستان نمونه البرز',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 16,
                'key' => 'admin.google_analytics_client_id',
                'display_name' => 'google analytics Key',
                'value' => 'AIzaSyD7kLfbvoOA5_cc5i-AzSBVc3IYBtLLa-4',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Admin',
            ),
        ));
        
        
    }
}