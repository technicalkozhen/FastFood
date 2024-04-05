<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $guarded=[];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function food_invoice()
    {
        return $this->hasMany(food_invoice::class, 'invoice_id',);
    }
}



