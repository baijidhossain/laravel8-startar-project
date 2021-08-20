<?php

namespace App\Model;
use App\model\Permission;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    // protected $guarded=['id'];
    public function permission(){

        return $this->hasMany(Permission::class,'module_id','id');

    }
}
