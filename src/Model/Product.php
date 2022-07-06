<?php

namespace APP\Model;

class Product
{
    // propriedades
    private string $name;
    private float $price;
    private int $quantity;
    private bool $isActive;

    public function __construct(
        string $name,
        float $price,
        int $quantity,
        bool $isActive = true
        )  
    {
        $this-> name = $name;
        $this-> price = $price;
        $this-> quantity = $quantity;
        $this-> isActive = $isActive;
    }    
}

