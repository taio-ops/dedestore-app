<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name', 
        'product_desc', 
        'initial_price', 
        'selling_price', 
        'quantity', 
        'category',
        'product_image',
        'vendor_id',
    ];
}

