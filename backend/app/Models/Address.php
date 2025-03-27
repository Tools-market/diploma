<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address', 'entrance', 'floor', 'apartment'
    ];

    // Связь с пользователями
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Связь с магазинами
    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
