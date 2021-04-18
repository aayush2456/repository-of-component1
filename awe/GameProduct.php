<?php

namespace awe;

class GameProduct extends ShopProduct{
    private $size;
    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $size
    ){
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}