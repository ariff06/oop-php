<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new Animal();
$sheep -> setName("shaun");

echo "Name : ".$sheep -> getName()."<br>";
echo "legs : ".$sheep -> legs."<br>";
echo "cold blooded : ".$sheep -> cold_blooded()."<br><br>";

$buduk = new frog();
$buduk -> setName("Buduk");

echo "Name : ".$buduk -> getName()."<br>";
echo "legs : ".$buduk->legs."<br>";
echo "cold blooded : ".$buduk -> cold_blooded()."<br>";
echo "Jump : ".$buduk -> jump()."<br><br>";

$sungokong = new ape();
$sungokong -> setName("kera sakti");

echo "Name : ".$sungokong -> getName()."<br>";
echo "legs : ".$sungokong -> legs."<br>";
echo "cold blooded : ".$sungokong -> cold_blooded()."<br>";
echo "Yell : ".$sungokong -> yell();