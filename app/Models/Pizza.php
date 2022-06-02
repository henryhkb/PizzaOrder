<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    //connecting the Pizza model to the table

    //typecasting the values of the toppings
    protected $casts = [
        'toppings' => 'array',
    ];
    
}
