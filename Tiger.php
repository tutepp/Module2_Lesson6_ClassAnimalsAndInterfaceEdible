<?php
include_once ('Animals.php');
class Tiger extends Animals
{
    public function makeSound()
    {
       return "Tiger: Grzzzz Grzzz";
    }
}