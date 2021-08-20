<?php

namespace App\Model;

use App\Model\Supplierlastupdate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplierdetails extends Model
{
    use HasFactory;

    public function lastupdates(){

        return $this->hasMany(Supplierlastupdate::class,'supplier_id','id');
    }
}
