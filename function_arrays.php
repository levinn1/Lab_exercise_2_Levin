<?php
include 'variables.php';

echo "<br>";

function greet($name) {
    echo "Halo, " . $name . ". ";
}

$students = [
    "satu", "dua", "tiga", "empat", "lima"
];

foreach ($students as $name) {
    greet($name);
}
?>
