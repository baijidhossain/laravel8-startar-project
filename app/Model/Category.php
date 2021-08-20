<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function prodact(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
}
