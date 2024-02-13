<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'description',
        'sku',
        'price',
        'status',
        'hit_count',
        'image',
        'category_id',
        'subcategory_id',
        'inventory_id',
        'productsize_id',
        'discount_id',
        'createby',
        'updateby',
        
    ];
}
