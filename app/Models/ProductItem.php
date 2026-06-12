<?php
// app/Models/ProductItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'category',
        'image',
        'model_number',
        'manufacturer',
        'manufacture_date',
        'specifications',
        'status',
        'notes',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
