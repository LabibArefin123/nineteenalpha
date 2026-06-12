<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'description'];

    public function items()
    {
        return $this->hasMany(ProductItem::class);
    }
}
