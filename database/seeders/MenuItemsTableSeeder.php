<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'داشبورد',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-21 05:47:25',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'محتوا',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-21 05:47:52',
                'route' => 'voyager.media.index',
                'parameters' => 'null',
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'کاربران',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-21 05:47:38',
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-15 10:53:34',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-21 09:26:29',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-19 10:52:16',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-19 10:52:16',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-19 10:52:16',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-19 10:52:16',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'تنظیمات',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2023-06-15 10:53:34',
                'updated_at' => '2023-06-21 09:26:29',
                'route' => 'voyager.settings.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'دسته بندی',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2023-06-15 10:53:35',
                'updated_at' => '2023-06-21 09:26:29',
                'route' => 'voyager.categories.index',
                'parameters' => 'null',
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'پست ها',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2023-06-15 10:53:35',
                'updated_at' => '2023-06-21 09:26:35',
                'route' => 'voyager.posts.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'صفحات',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2023-06-15 10:53:35',
                'updated_at' => '2023-06-21 09:26:35',
                'route' => 'voyager.pages.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'محصولات',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2023-06-19 10:37:03',
                'updated_at' => '2023-06-21 05:48:07',
                'route' => 'voyager.products.index',
                'parameters' => 'null',
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'سفارشات',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2023-06-21 06:55:57',
                'updated_at' => '2023-06-21 09:26:35',
                'route' => 'voyager.carts.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}