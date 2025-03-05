<?php

$numbersToSort = [5, 2, 9, 1, 5, 6];
$ascending = $numbersToSort;
sort($ascending);
print ("По возрастанию: " . implode(", ", $ascending) . "<br>");

$descending = $numbersToSort;
rsort($descending);
print ("По убыванию: " . implode(", ", $descending) . "<br>");
