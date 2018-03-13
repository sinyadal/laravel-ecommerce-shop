<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Price currency
    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }
}
