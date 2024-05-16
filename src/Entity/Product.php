<?php

namespace TsukiTerrace\MVC\Entity;

class Product{
    public readonly int $id;
    public function __construct(
        public string $name,
        public string $description,
        public float $price,
    )
    {
        $this->setName($name);
    }
    private function setName(string $name)
    {
        $this->name = $name;
    }
    public function setId(int $id):void
    {
        $this->id = $id;
    }
}