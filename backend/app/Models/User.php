<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'phone', 'email', 'birth_date', 'address_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
