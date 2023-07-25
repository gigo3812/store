<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-15 10:53:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'کاربر عادی',
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-21 05:30:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'manage',
                'display_name' => 'مدیر سایت',
                'created_at' => '2023-06-21 05:30:18',
                'updated_at' => '2023-06-21 05:30:18',
            ),
        ));
        
        
    }
}