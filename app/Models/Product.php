<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_code';
    protected $table ="products";
    protected $fillable = [
        'product_code',
        'product_name',
        'description',
        'price',
        'quantity'
    ];
}
