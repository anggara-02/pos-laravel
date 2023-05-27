<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'sys_produk';

    protected $primaryKey = 'produk_id';
    protected $timestamps = false;

    protected $fillable = [
        'product_category_name',
        'product_name',
        'product_price',
        'product_size',
        'product_stock',
    ];
}