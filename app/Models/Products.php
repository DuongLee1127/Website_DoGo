<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'price',
        'slug',
        'description',
        'product_category_id',
        'stock',
        'status'
    ];
    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id');
    }
}
