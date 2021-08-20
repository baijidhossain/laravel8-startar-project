<?php

namespace App\Model;
use App\Module;
use App\Role;


use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{


    protected $guarded=['id'];
    public function module(){

        return $this->belongsTo(Module::class);
    }

    public function roles(){

     return $this->belongsToMany(Role::class);

    }
}
