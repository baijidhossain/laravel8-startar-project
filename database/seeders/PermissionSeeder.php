<?php
namespace Database\Seeders;
use App\Model\Module;
use App\Model\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleAppDashboard=Module::updateOrCreate([

       'name'=>'Admin Dashboard',

        ]);
            Permission::updateOrCreate([

             'module_id'=>$moduleAppDashboard->id,
             'name'=>'Accese Dashboard',
             'slug'=>'app.dashboard'
            ]);

            $moduleapprule=Module::updateOrCreate(['name'=>'Role Management']);
            Permission::updateOrCreate([
            'module_id'=>$moduleapprule->id,
            'name'=>'Access Role',
            'slug'=>'app.roles.index'

            ]);

            Permission::updateOrCreate([
                'module_id'=>$moduleapprule->id,
                'name'=>'Create Role',
                'slug'=>'app.roles.create'
    
                ]);

                
            Permission::updateOrCreate([
                'module_id'=>$moduleapprule->id,
                'name'=>'Edit Role',
                'slug'=>'app.roles.edit'
    
                ]);

                
                
            Permission::updateOrCreate([
                'module_id'=>$moduleapprule->id,
                'name'=>'Delete Role',
                'slug'=>'app.roles.destroy'
    
                ]);

             
                         $moduleAppUser=Module::updateOrCreate(['name'=>'User Management']);
                         Permission::updateOrCreate([
                         'module_id'=>$moduleAppUser->id,
                         'name'=>'Access User',
                         'slug'=>'app.Users.index'
             
                         ]);
             
                         Permission::updateOrCreate([
                             'module_id'=>$moduleAppUser->id,
                             'name'=>'Create User',
                             'slug'=>'app.Users.create'
                 
                             ]);
             
                             
                         Permission::updateOrCreate([
                             'module_id'=>$moduleAppUser->id,
                             'name'=>'Edit User',
                             'slug'=>'app.Users.edit'
                 
                             ]);
             
                             
                             
                         Permission::updateOrCreate([
                             'module_id'=>$moduleAppUser->id,
                             'name'=>'Delete User',
                             'slug'=>'app.Users.destroy'
                 
                             ]);




            //page

                 $moduleappPage=Module::updateOrCreate(['name'=>'Page Management']);
                 Permission::updateOrCreate([
                 'module_id'=>$moduleappPage->id,
                 'name'=>'Access Pages',
                 'slug'=>'app.pages.index'
     
                 ]);
     
                 Permission::updateOrCreate([
                     'module_id'=>$moduleappPage->id,
                     'name'=>'Create Page',
                     'slug'=>'app.pages.create'
         
                     ]);
     
                     
                 Permission::updateOrCreate([
                     'module_id'=>$moduleappPage->id,
                     'name'=>'Edit Page',
                     'slug'=>'app.pages.edit'
         
                     ]);
     
                     
                     
                 Permission::updateOrCreate([
                     'module_id'=>$moduleappPage->id,
                     'name'=>'Delete Page',
                     'slug'=>'app.pages.destroy'
         
                     ]);
     
     
            //menubuilders

            $moduleappPage=Module::updateOrCreate(['name'=>'menu builder Management']);
            Permission::updateOrCreate([
            'module_id'=>$moduleappPage->id,
            'name'=>'Access Menu builder',
            'slug'=>'app.menus.builder'

            ]);

            //menus  

            $moduleappMenu=Module::updateOrCreate(['name'=>'menu Management']);
            Permission::updateOrCreate([
            'module_id'=>$moduleappMenu->id,
            'name'=>'Access menus',
            'slug'=>'app.menus.index'

            ]);

            Permission::updateOrCreate([
                'module_id'=>$moduleappMenu->id,
                'name'=>'Create Menu',
                'slug'=>'app.menus.create'
    
                ]);

                
            Permission::updateOrCreate([
                'module_id'=>$moduleappMenu->id,
                'name'=>'Edit Menu',
                'slug'=>'app.menus.edit'
    
                ]);

            Permission::updateOrCreate([
                'module_id'=>$moduleappMenu->id,
                'name'=>'Delete Menu',
                'slug'=>'app.menus.destroy'
    
                ]);


                
                // category
                $moduleappCategory=Module::updateOrCreate(['name'=>'Category Management']);
                Permission::updateOrCreate([
                'module_id'=>$moduleappCategory->id,
                'name'=>'Access categories',
                'slug'=>'app.categories.index'

                ]);

                Permission::updateOrCreate([
                    'module_id'=>$moduleappCategory->id,
                    'name'=>'Create Category',
                    'slug'=>'app.categories.create'

                    ]);

                    
                Permission::updateOrCreate([
                    'module_id'=>$moduleappCategory->id,
                    'name'=>'Edit Category',
                    'slug'=>'app.categories.edit'

                    ]);

                    
                    
                Permission::updateOrCreate([
                    'module_id'=>$moduleappCategory->id,
                    'name'=>'Delete Category',
                    'slug'=>'app.categories.destroy'

                    ]);

                 
                // prodacts
                $moduleappProdact=Module::updateOrCreate(['name'=>'Prodact Management']);
                Permission::updateOrCreate([
                'module_id'=>$moduleappProdact->id,
                'name'=>'Access prodacts',
                'slug'=>'app.prodacts.index'

                ]);

                Permission::updateOrCreate([
                    'module_id'=>$moduleappProdact->id,
                    'name'=>'Create Prodact',
                    'slug'=>'app.prodacts.create'

                    ]);

                    Permission::updateOrCreate([
                        'module_id'=>$moduleappProdact->id,
                        'name'=>'Store Prodact',
                        'slug'=>'app.prodacts.store'
    
                        ]);

                        Permission::updateOrCreate([
                            'module_id'=>$moduleappProdact->id,
                            'name'=>'Show Prodact',
                            'slug'=>'app.prodacts.show'
        
                            ]);
                    
                Permission::updateOrCreate([
                    'module_id'=>$moduleappProdact->id,
                    'name'=>'Edit Prodact',
                    'slug'=>'app.prodacts.edit'

                    ]);

                    Permission::updateOrCreate([
                        'module_id'=>$moduleappProdact->id,
                        'name'=>'Update Prodact',
                        'slug'=>'app.prodacts.update'
    
                        ]);
                    
                    
                Permission::updateOrCreate([
                    'module_id'=>$moduleappProdact->id,
                    'name'=>'Delete Prodact',
                    'slug'=>'app.prodacts.destroy'

                    ]);
                
               // end prodacts


               
                 
                // sales
                $moduleappSale=Module::updateOrCreate(['name'=>'Sale Management']);
                Permission::updateOrCreate([
                'module_id'=>$moduleappSale->id,
                'name'=>'Access sales',
                'slug'=>'app.sales.index'

                ]);

                

                // Permission::updateOrCreate([
                //     'module_id'=>$moduleappSale->id,
                //     'name'=>'Create Sale',
                //     'slug'=>'app.sales.create'

                //     ]);

                    Permission::updateOrCreate([
                    'module_id'=>$moduleappSale->id,
                    'name'=>'store sale',
                    'slug'=>'app.sales.store'
    
                    ]);
                    
                // Permission::updateOrCreate([
                //     'module_id'=>$moduleappSale->id,
                //     'name'=>'Edit Sale',
                //     'slug'=>'app.sales.edit'

                //     ]);
                            
                
                Permission::updateOrCreate([
                    'module_id'=>$moduleappSale->id,
                    'name'=>'show Sale',
                    'slug'=>'app.sales.show'

                    ]);

               
                    
                    
                Permission::updateOrCreate([
                    'module_id'=>$moduleappSale->id,
                    'name'=>'daily report',
                    'slug'=>'app.report.dailyreport'

                    ]);
                
               // end sales
             //app.card.addtocard
            

               $moduleappAddtocard=Module::updateOrCreate(['name'=>'Add to card']);
               Permission::updateOrCreate([
               'module_id'=>$moduleappAddtocard->id,
               'name'=>'Access Add to card',
               'slug'=>'app.card.addtocard'

               ]);

               
     
                //settings

                $moduleappSetings=Module::updateOrCreate(['name'=>'Settings']);
                Permission::updateOrCreate([
                'module_id'=>$moduleappSetings->id,
                'name'=>'settings General ',
                'slug'=>'app.settings.general'
 
                ]);
                Permission::updateOrCreate([
                'module_id'=>$moduleappSetings->id,
                'name'=>'General settings update',
                'slug'=>'app.settings.general.update'
 
                ]);
                Permission::updateOrCreate([
                    'module_id'=>$moduleappSetings->id,
                    'name'=>'appaerance settings',
                    'slug'=>'app.settings.appaerance'
     
                    ]);
                    Permission::updateOrCreate([
                        'module_id'=>$moduleappSetings->id,
                        'name'=>'appaerance settings update',
                        'slug'=>'app.settings.appaerance.update'
         
                        ]);

                        Permission::updateOrCreate([
                            'module_id'=>$moduleappSetings->id,
                            'name'=>'Favicon icon',
                            'slug'=>'app.settings.faviconicon.update'
             
                            ]);

                        //end settings

                //employee
                $moduleappemployee=Module::updateOrCreate(['name'=>'Employee']);
                Permission::updateOrCreate([
                    'module_id'=>$moduleappemployee->id,
                    'name'=>'Accesse employee',
                    'slug'=>'app.employee'
        
                    ]);

                    Permission::updateOrCreate([
                        'module_id'=>$moduleappemployee->id,
                        'name'=>'employee Create',
                        'slug'=>'app.employee.create'
            
                    ]);
                    Permission::updateOrCreate([
                        'module_id'=>$moduleappemployee->id,
                        'name'=>'employee store',
                        'slug'=>'app.employee.store'
        
                    ]);
                    Permission::updateOrCreate([
                        'module_id'=>$moduleappemployee->id,
                        'name'=>'employee Show',
                        'slug'=>'app.employee.show'
            
                        ]);


                    Permission::updateOrCreate([
                        'module_id'=>$moduleappemployee->id,
                        'name'=>'employee Edit',
                        'slug'=>'app.employee.edit'
            
                        ]);

                    Permission::updateOrCreate([
                        'module_id'=>$moduleappemployee->id,
                        'name'=>'employee Update',
                        'slug'=>'app.employee.update'
            
                        ]);

                    Permission::updateOrCreate([
                        'module_id'=>$moduleappemployee->id,
                        'name'=>'employee Delete',
                        'slug'=>'app.employee.delete'
            
                        ]);
                    

                //endemployee
                
    }
}
