<?php


$table = [
    ['Питер', 'Паркер', 30],
    ['Элтон', 'Сквир', 25],
    ['Папа', 'Джонс', 40]
];

echo "<table border='1'>"; 

foreach ($table as $row) {
    echo "<tr>"; 
    foreach ($row as $cell) {
        echo "<td>$cell</td>"; 
    }
    echo "</tr>"; 
}

echo "</table>"; 

?>


