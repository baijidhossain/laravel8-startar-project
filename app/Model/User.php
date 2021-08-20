<?php

namespace App\Model;
use App\Model\Permission;
use App\Model\Role;
use App\Model\EmployeeDetails;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;


use Spatie\MediaLibrary\HasMedia;

class User extends Authenticatable implements HasMedia
{
    use Notifiable,InteractsWithMedia;


    protected $guarded=['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


public function registerMediaCollections(): void
{
    $this->addMediaCollection('avatar')->singleFile();
}



    public function role(){


        return $this->belongsTo(Role::class);
    }
    public function employeedetails(){


        return $this->belongsTo(Employeedetails::class,'id','user_id');
    }

    public function hasPermission($permission): bool{

       return $this->role->permissions()->where('slug',$permission)->first() ? true : false;

    }
}
