<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    use HasFactory;

    public function getSource()
    {
        return $this->hasOne(source::class,'id','source_id');
    }
    public function getProduct()
    {
        return $this->hasOne(product::class,'id','product');
    }
}
