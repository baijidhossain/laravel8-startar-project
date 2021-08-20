<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodactdate extends Model
{
    use HasFactory;

    public function stock_details(){

        return $this->hasMany(Supplierdetails::class,'date','purchase_date');
    }
}
