<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Propaganistas\LaravelPhone\PhoneNumber;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'working_hours', 'address_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'store_products')->withPivot('stock');
    }

   
}
