<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Price currency
    public function presentPrice()
    {
        return money_format('RM%i', $this->price / 100);
        // {{ $product->presentPrice() }}
    }

    // Scope
    public function scopeProductSuggestion($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
