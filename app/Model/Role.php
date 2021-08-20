<?php

namespace App\Model;
use App\Model\Module;
use App\Model\Permission;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $guarded=['id'];

public function permissions(){

  return $this->belongsToMany(Permission::class);

}

public function users(){


    return $this->hasMany(User::class);
}

}
