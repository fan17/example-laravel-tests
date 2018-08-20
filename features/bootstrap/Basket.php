<?php
final class Basket implements Countable
{
    private $products;
    private $shelf;

    public function __construct(Shelf $shelf)
    {
        $this->shelf = $shelf;
    }

    public function addProduct($product)
    {
        $this->products []= $product;
    }

    public function getTotalPrice()
    {
        return $this->getPriceForBooks() + $this->getPriceForDelivery();
    }

    public function count()
    {
        return count($this->products);
    }

    private function getPriceForBooks()
    {
        return $this->getNetPriceForBooks() + $this->getVatPriceForBooks();
    }

    private function getNetPriceForBooks()
    {
        $result = 0;

        foreach ($this->products as $product) {
            $result += $this->shelf->getPriceForProduct($product);
        }

        return $result;
    }

    private function getVatPriceForBooks()
    {
        return $this->getNetPriceForBooks() * 0.2;
    }

    private function getPriceForDelivery()
    {
        return $this->getPriceForBooks() < 10 ? 3 : 2;
    }
}