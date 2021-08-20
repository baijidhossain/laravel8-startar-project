<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Supplierdetails;
use App\Model\Supplier;


class Supplierlastupdate extends Model
{
    use HasFactory;

    public function suppliers(){

        return $this->belongsTo(Supplier::class,'id','supplier_id');
    }
}
