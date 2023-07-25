<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'اسلایدر صفحه اصلی',
                'slug' => 'asla-dr-sfhh-asl',
                'created_at' => '2023-06-15 10:53:35',
                'updated_at' => '2023-06-21 15:32:34',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'پست و نوشته',
                'slug' => 'category-2',
                'created_at' => '2023-06-15 10:53:35',
                'updated_at' => '2023-06-21 15:32:50',
            ),
        ));
        
        
    }
}