<?php

namespace App\Entity;

class Search {

    private $price;

    private $reference;

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function sePrice(int $price): Search
    {
        $this->price = $price;
        return $this;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function seReference(int $reference): Search
    {
        $this->reference = $reference;
        return $this;
    }
}

