<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'number_receipt',
        'number_table',
        'state',
    ];
}
