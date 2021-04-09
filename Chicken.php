<?php
include_once ('Animals.php');
class Chicken extends Animals
{
    public function makeSound()
    {
        return "Chickken: Cuctac cuctac ";
    }
}