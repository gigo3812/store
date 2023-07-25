<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_product')->delete();
        
        \DB::table('cart_product')->insert(array (
            0 => 
            array (
                'id' => 3,
                'cart_id' => 1,
                'product_id' => 4,
                'count' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'cart_id' => 1,
                'product_id' => 3,
                'count' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'cart_id' => 2,
                'product_id' => 2,
                'count' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}