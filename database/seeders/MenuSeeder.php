<?php

namespace Database\Seeders;
use App\Model\menu;
use App\Model\MenuItem;
use Illuminate\Database\Seeder;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $backendsidebar=Menu::UpdateOrCreate([

              'name'=>'backend-sidebar',
              'description'=>'This is backend sidebar',
              'deletable'=>false,

        ]);
        $backendsidebar->menuItems()->UpdateOrCreate([
         'menu_id'=>$backendsidebar->id,
         'type'=>'divider',
         'order'=>1,
         'divider_title'=>'Dashboard',

        ]);

        // $backendsidebar->menuItems()->UpdateOrCreate([
        //     'menu_id'=>$backendsidebar->id,
        //     'type'=>'item',
        //     'order'=>2,
        //     'title'=>'Pages',
        //     'url'=>'/app/pages',
        //     'icon_class'=>'metismenu-icon pe-7s-news-paper',

   
        //    ]);
           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>2,
            'title'=>'Dashboard',
            'url'=>'/app/dashboard',
            'icon_class'=>'metismenu-icon pe-7s-rocket',

   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>3,
            'divider_title'=>'Access Control',
   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>4,
            'title'=>'Roles',
            'url'=>'/app/roles',
            'icon_class'=>'metismenu-icon pe-7s-check',

   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>5,
            'title'=>'Users',
            'url'=>'/app/users',
            'icon_class'=>'metismenu-icon pe-7s-users',

   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>6,
            'divider_title'=>'System',
   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>7,
            'title'=>'Menus',
            'url'=>'/app/menus',
            'icon_class'=>'metismenu-icon pe-7s-menu',

   
           ]);
        //    $backendsidebar->menuItems()->UpdateOrCreate([
        //     'menu_id'=>$backendsidebar->id,
        //     'type'=>'item',
        //     'order'=>9,
        //     'title'=>'Backups',
        //     'url'=>'/app/backups',
        //     'icon_class'=>'metismenu-icon pe-7s-cloud',

   
        //    ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>8,
            'title'=>'Settings',
            'url'=>'/app/settings/general',
            'icon_class'=>'metismenu-icon pe-7s-settings',

   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>9,
            'divider_title'=>'Category manage',
   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>10,
            'title'=>'Category',
            'url'=>'/app/categories',
            'icon_class'=>'metismenu-icon pe-7s-check',

   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>11,
            'divider_title'=>'Prodact manage',
   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>12,
            'title'=>'Prodact',
            'url'=>'/app/prodacts',
            'icon_class'=>'metismenu-icon pe-7s-check',

   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>13,
            'divider_title'=>'Sales manage',
   
           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>14,
            'title'=>'Seles',
            'url'=>'/app/sales',
            'icon_class'=>'metismenu-icon pe-7s-check',

   
           ]);



      
           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>15,
            'title'=>'Report',
            'url'=>'/app/report/dailyreport',
            'icon_class'=>'metismenu-icon pe-7s-check',

           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>16,
            'divider_title'=>'Employee manage',
   
           ]);

           
           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>17,
            'title'=>'Employee',
            'url'=>'/app/employees
            ',
            'icon_class'=>'metismenu-icon pe-7s-check',

           ]);
           

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'divider',
            'order'=>18,
            'divider_title'=>'Supplier manage',
   
           ]);

                
           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>20,
            'title'=>'Supplier',
            'url'=>'/app/suppliers',
            'icon_class'=>'metismenu-icon pe-7s-check',

           ]);

           $backendsidebar->menuItems()->UpdateOrCreate([
            'menu_id'=>$backendsidebar->id,
            'type'=>'item',
            'order'=>21,
            'title'=>'Stock manage',
            'url'=>'/app/stocks',
            'icon_class'=>'metismenu-icon pe-7s-check',

           ]);


   

    }
}
