<?php

namespace APP\Model;

class Provider
{
    // propriedades
    private string $name;
    private int $cnpj;
    private int $phone;
    private string $address;
    private bool $isActive;

    public function __construct(
        string $name,
        int $cnpj,
        int $phone,
        string $address,
        bool $isActive = true
        )  
    {
        $this-> name = $name;
        $this-> cnpj = $cnpj;
        $this-> phone = $phone;
        $this-> address = $address;
        $this-> isActive = $isActive;
    }    
}
