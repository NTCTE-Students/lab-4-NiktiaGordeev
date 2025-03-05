<?php

$haystack = ['a', 'b', 'c', 'd', 'e'];
$needle = 'd';
$key = array_search($needle, $haystack);

if ($key !== false) {
    print ("Элемент '$needle' найден под индексом:". $key +1);
} else {
    print ("Элемент '$needle' не найден<br>");
}