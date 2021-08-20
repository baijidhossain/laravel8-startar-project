<?php
namespace Database\Seeders;

use App\Model\User;
use Illuminate\database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UaserFactory extends Factory{



protected $model=User::class;

public function definition()
{
    return [ 
        
        'name'=>$this->faker->name,
        'email'=>$this->faker->unique()->safeEmail,
        'email_varified_at'=>now(),
        'password'=>'password',
        'remember_token'=>str::random(10),
    
    
    ];
}


}