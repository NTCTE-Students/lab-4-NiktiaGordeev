<?php

$duplicates = [1, 2, 2, 3, 4, 4, 5];
$unique = array_unique($duplicates);
print ("Уникальные элементы: " . implode(", ", $unique) );