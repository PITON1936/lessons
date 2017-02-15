<?php

namespace MyProject;


class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString()
    {
        return $this->name.'-'.$this->price;
    }
}
?>