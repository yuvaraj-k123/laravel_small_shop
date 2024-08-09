<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'cusromer_id',
        'product_id',
        'qty',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');

    }
    public function totalprice()
    {
        return $this->qty * $this->product->price;
    }

    public static function grandTotal($customerId)
    {
        $cartItems = Cart::where('customer_id',$customer_id)->get();
        $total = $cartItems->sum(function ($item) {
            return $item->totalprice();

        });
         return $total;
    }
}
