<?php

namespace App\Model;

use App\Model\Supplierdetails;
use App\Model\Supplierlastupdate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;



    public function detailes(){

        return $this->hasMany(Supplierdetails::class,'supplier_id','id');
    }

    public function updates(){

        return $this->hasMany(Supplierlastupdate::class,'supplier_id','id');
    }
}
