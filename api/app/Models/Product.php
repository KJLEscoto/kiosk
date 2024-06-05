<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'description', 'photo', 'quantity', 'price',
    ];
    public function formattedPrice()
    {
        return '$' . number_format($this->price, 2);
    }

    public function scopeAvailable($query)
    {
        return $query->where('quantity', '>', 0);
    }
}
