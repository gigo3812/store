<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'status' => 'paid',
                'address' => 'استان خراسان جنوبی - شهرستان بیرجند - خیایان مفتح - مفتح 33 - پلاک 55',
                'created_at' => '2023-06-21 06:42:02',
                'updated_at' => '2023-06-21 08:29:56',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'status' => 'pending',
                'address' => NULL,
                'created_at' => '2023-07-16 13:39:33',
                'updated_at' => '2023-07-16 13:39:33',
            ),
        ));
        
        
    }
}