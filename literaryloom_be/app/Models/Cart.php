<?php
// Cart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'total_price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'total_price' => 'float',
    ];

    /**
     * Get the user that owns the cart.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Calculate the total price of the cart.
     *
     * @return float
     */
    public function calculateTotalPrice(): float
    {
        // You can implement the logic to calculate the total price here
        // For example, you can sum the prices of all items in the cart
        // $totalPrice = $this->items()->sum('price');
        // return $totalPrice;
    }
}