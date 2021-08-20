<?php
namespace Database\Seeders;
use App\Model\Role;
use App\Model\User;
use App\Model\EmployeeDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $admin=User::updateOrCreate([

        'role_id'=>Role::where('slug','admin')->first()->id,
        'name'=>'Admin',
        'email'=>'admin@gmail.com',
        'image'=>'',
        'password'=>Hash::make('password'),
        'status'=>true,

    ]);
    EmployeeDetails::updateorcreate([
        'user_id'=>$admin->id,
        'fname'=>'mojibar rahman',
        'mname'=>'jiban nesa',
        'mobile_number'=>'01775051601',
        'organisation'=>'Mysoftheaven bd ltd',
        'position'=>'GM',
        'salary'=>'25000',
        'date_of_birth'=>'20/1/1990',
        'nid'=>'199010223',
        'height'=>'5.5 inche',
        'blood_group'=>'AB+',
        'weight'=>'55kg',
        'religion'=>'Islam',
        'marital_status'=>'Unmarried',
        'nationality'=>'Bangladeshi',
        'sex'=>'Male',
        'village'=>'Dokkhin bishil',
        'po'=>'Shahagola',
        'ps'=>'Atrai',
        'district'=>'Naogaon',
        'division'=>'Rajshahi',
        'academic'=>'SSC 2016,Diploma in Engineering,BSC in computer engineering (CSE)',
        'status'=>'1',
            ]);

    $user=User::updateOrCreate([

        'role_id'=>Role::where('slug','user')->first()->id,
        'name'=>'User',
        'email'=>'user@gmail.com',
        'image'=>'',
        'password'=>Hash::make('password'),
        'status'=>true,

    ]);

    EmployeeDetails::updateorcreate([
        'user_id'=>$user->id,
        'fname'=>'Anisur rahman',
        'mname'=>'Bilkis begum',
        'mobile_number'=>'01775051602',
        'organisation'=>'Mysoftheaven bd ltd',
        'position'=>'Super viser',
        'salary'=>'35000',
        'date_of_birth'=>'15/2/1994',
        'nid'=>'199010224',
        'height'=>'5.6 inche',
        'blood_group'=>'B+',
        'weight'=>'60kg',
        'religion'=>'Islam',
        'marital_status'=>'Unmarried',
        'nationality'=>'Bangladeshi',
        'sex'=>'Male',
        'village'=>'Mirjapur',
        'po'=>'Shahagola',
        'ps'=>'Atrai',
        'district'=>'Naogaon',
        'division'=>'Rajshahi',
        'academic'=>'SSC 2016,Diploma in Engineering,BSC in Electrical and electronics engineering (EEE)',
        'status'=>'1',
        
            ]);
    $user1=User::updateOrCreate([

        'role_id'=>Role::where('slug','user')->first()->id,
        'name'=>'User1',
        'email'=>'user1@gmail.com',
        'image'=>'',
        'password'=>Hash::make('password'),
        'status'=>true,

    ]);
    EmployeeDetails::updateorcreate([
        'user_id'=>$user1->id,

        
            ]);


    }
}
