<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillabel = [
        'user_id', 
        'medicines', 
        'nama_costomer', 
        'total_price'
    ];

    protected $casts = [
        'medicines' => 'array',
    ];
}
