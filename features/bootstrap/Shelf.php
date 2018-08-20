<?php
final class Shelf
{
    public function __construct()
    {
        $this->map = [];
    }

    public function setProductPrice($product, $price)
    {
        $this->map[$product] = $price;
    }

    public function getPriceForProduct($product)
    {
        return $this->map[$product];
    }
}