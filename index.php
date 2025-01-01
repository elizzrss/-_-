<?php

abstract class Product
{
    protected float $price;

    public abstract function countPrice();
}

class DigitalProduct extends Product
{
    public function countPrice(): float
    {
        return $this->price / 2;
    }
}

class PieceProduct extends Product
{
    private int $count;

    public function countPrice(): float
    {
        return $this->price * $this->count;
    }
}

class WeightProduct extends Product
{
    private float $weight;

    public function countPrice(): float
    {
        return $this->price * $this->weight / 1000;
    }
}