<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_invoice extends Model
{
    protected $guarded= [];


  
    public function products()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}





