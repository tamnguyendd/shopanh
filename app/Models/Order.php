<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'tax', 'sub_total', 'grand_total', 'item_count', 
        'name_on_card','payment_status', 'payment_method', 'shipped', 'delivered', 'error',
        'first_name', 'last_name', 'address', 'city', 'prefecture', 'country', 'post_code', 'phone_number', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class)->withPivot('quantity');
    }
}