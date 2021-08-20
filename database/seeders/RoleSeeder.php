<?php
namespace Database\Seeders;
use App\Model\Permission;
use App\Model\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions=Permission::all();
        Role::updateOrCreate([

         'name'=>'Admin',
         'slug'=>'admin',
         'routepermission'=>true,
         'deletable'=> false

        ])->permissions()->sync($adminPermissions->pluck('id'));

        Role::updateOrCreate([

            'name'=>'Employee',
            'slug'=>'employee',
            'routepermission'=>false,
            'deletable'=> false
   
           ]);

        Role::updateOrCreate([

            'name'=>'User',
            'slug'=>'user',
            'routepermission'=>false,
            'deletable'=> false
   
           ]);




  
    }
}
