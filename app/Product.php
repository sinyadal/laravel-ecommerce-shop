<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Price currency
    public function presentPrice()
    {
        setlocale(LC_MONETARY, 'ms_MY');
        return money_format('%i', $this->price) . "\n";
        // {{ $product->presentPrice() }}
    }

    // Scope
    public function scopeProductSuggestion($query)
    {
        return $query->inRandomOrder()->take(4);
        // Product::find($id)->productSuggestion()->get();
    }
}
