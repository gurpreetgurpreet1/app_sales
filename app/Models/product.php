<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    public function getCategory()
    {
        return $this->hasOne(productCategory::class,'id','category');
    }
}
