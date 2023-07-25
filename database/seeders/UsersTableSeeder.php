<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'حسن عابدینی',
                'mobile' => '09157915935',
                'email' => 'abedini.hassan.dc@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dPuSf7H0TJtCvLcWbFMoZuTEfLCliX7KV2KCofDq61h1KTy5HRhGS',
                'remember_token' => 'Qq4paUBuYDC7QJz3KOrYR9i4WPhrVRKQOoTtmnWs2TkBIRIG7NhNfXignYsZ',
                'settings' => '{"locale":"fa"}',
                'created_at' => '2023-06-15 10:53:35',
                'updated_at' => '2023-07-23 14:00:03',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'حسن عابدینی',
                'mobile' => '09351629286',
                'email' => NULL,
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lBKYD5p3c.mX7jFZwv9nduK80UBSkszo2D7ZfrsIHKr3853lOmAlq',
                'remember_token' => NULL,
                'settings' => '{"locale":"fa"}',
                'created_at' => '2023-06-21 05:35:34',
                'updated_at' => '2023-07-23 15:22:55',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'جلال زارعی',
                'mobile' => '09157202559',
                'email' => NULL,
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e7yniEdsP1tU2UvMRe7ckOGJ6A.2c6BBig12gEh/JmVsX4NyJWjPG',
                'remember_token' => NULL,
                'settings' => '{"locale":"fa"}',
                'created_at' => '2023-06-21 10:42:27',
                'updated_at' => '2023-07-23 15:22:41',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'فاطمه عباسی',
                'mobile' => '09157204871',
                'email' => NULL,
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aWIgTiB27MOp/Vuk28HPEu0s/8Gg1QROF4aWou3cvPmXtlKqWh9xe',
                'remember_token' => NULL,
                'settings' => '{"locale":"fa"}',
                'created_at' => '2023-07-23 15:22:31',
                'updated_at' => '2023-07-23 15:22:31',
            ),
        ));
        
        
    }
}