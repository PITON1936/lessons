<?php

namespace MyProject\Food;


use MyProject\Product;

class Candy extends Product
{
    public function __toString()
    {
        return 'Candy:'.parent::__toString();
    }
}

?>