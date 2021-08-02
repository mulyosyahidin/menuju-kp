<?php

$a = 10; //tipe data = integer
$b = '10'; //tipe data = string

var_dump($a == $b); //loose comparison: apakah nilai $a dan $b sama??
echo '<br>';
var_dump($a === $b); //strict comparison: apakah nilai dan tipe data $a dan $b sama??
echo '<br>';
var_dump($a != $b); //loose comparison: apakah nilai $a dan $b tidak sama??
echo '<br>';
var_dump($a !== $b); //strict comparison: apakah nilai dan tipe data $a dan $b tidak sama??

echo '<br>';
echo '<br>';

$x = 12;
$y = 10;
var_dump($x <> $y); //apakah $x beda dengan $y ??

echo '<br>';
echo '<br>';

var_dump($x > $y); //apakah $x lebih besar dari $y ??
echo '<br>';
var_dump($x >= $y); //apakah $x lebih besar atau sama dengan $y ??
echo '<br>';
var_dump($x < $y); //apakah $x lebih kecil dari $y ??
echo '<br>';
var_dump($x <= $y); //apakah $x lebih kecil atau sama dengan $y ??

echo '<br>';
echo '<br>';

if ($a == $b) {
  echo '$a sama dengan $b';
}
else {
  echo '$a tidak sama dengan $b';
}
