<?php

namespace App\Models;

class Rower extends Model {
    private int $id;
    private string $price;
    private string $brand;
    private string $name;

    public function __construct(int $id) {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }
}