<?php

namespace MyProject\Food;


use MyProject\Product;

class Cookie extends Product
{
    public function __toString()
    {
         return 'Cookie:'.parent::__toString();
    }

}
?>