<?php

function presentPrice($price){
    // Format $price to ms_my currency
    setlocale(LC_MONETARY, 'ms_MY');
    return money_format('%i', $price) . "\n";
}

function setActiveCategory($category, $output = 'active') {
    return request()->category == $category ? $output : '';
}