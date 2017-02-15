<?php
use MyProject\Food\Cookie as Cookies;
use MyProject\Food\Candy as Candies;

function __autoload($className){
    $className = substr(strrchr($className, "\\"), 1);
    $class = 'Classes/'.str_replace('\\', '/', $className).'.php';
    require_once ($class);
}


$cookie = new Cookies('Бабушкино', 20);
echo $cookie;
echo "<br>";
$candy = new Candies('Snikers', 50);
echo $candy;

?>