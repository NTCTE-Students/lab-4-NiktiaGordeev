<?php

$array1 = [1, 2, 3, 4, 5, 9];
$array2 = [5, 6, 7, 8, 9, 10];
$merged = array_merge($array1, $array2);
print ("Объединенный массив: " . implode(", ", $merged) );