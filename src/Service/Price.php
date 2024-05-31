<?php

namespace App\Service;

use App\Entity\Coupon;
use App\Entity\Product;
use App\Entity\Tax;

class Price
{
    public function calculate(Product $product, Tax $tax, Coupon $coupon): float
    {
        return ($coupon->getDiscount())
        ? $product->getPrice() + ($product->getPrice() * $tax->getPercent() / 100) - $coupon->getDiscount()
        : ($product->getPrice() + ($product->getPrice() * $tax->getPercent() / 100)) - ($product->getPrice() * $coupon->getPercent() / 100);
    }
}