<?php
include_once ('Tiger.php');
include_once ('Chicken.php');
include_once ('Apple.php');
include_once ('Orange.php');

$tiger = new Tiger();
$chicken = new Chicken();
$eatApple = new Apple();
$eatOrange = new Orange();

echo $tiger->makeSound();
echo "</br>";
echo $chicken->makeSound();
echo "</br>";
echo $eatApple->howToEat();
echo "</br>";
echo $eatOrange->howToEat();
