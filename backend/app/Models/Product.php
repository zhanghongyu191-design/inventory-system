<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_code',
        'jan_code',
        'name_jp',
        'name_cn',
        'category_id',
        'brand_id',
        'unit',
        'stock_quantity',
        'minimum_stock',
        'location_id',
        'image_path',
        'status',
        'remarks',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}