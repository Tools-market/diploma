<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'total_stock',
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'store_products')->withPivot('stock');
    }
}
