<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id', 'product_id', 'stock'
    ];

    // Связь с магазином
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Связь с продуктом
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
