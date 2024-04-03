<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_product extends Model
{
    protected $fillable=[
        'name',
        'price',
        'quantity',
        'totalprice',
        'product_id',
    ];
}
