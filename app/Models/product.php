<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'discount',
        'image',
    ];

    
    public function tableproducts()
    {
        return $this->belongsTo(table_product::class, 'product_id','id');
    }
}
