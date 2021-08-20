<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodact extends Model
{
use HasFactory;
public function category(){
    return $this->belongsTo(Category::class,'categories_id','id');
}

}
