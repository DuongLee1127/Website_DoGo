<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'users_id',
        'status',
        'cost_total',
        'payment_method',
        'customer_address',
        'phone'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
