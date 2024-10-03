<?php
include 'variables.php';
echo "<br>";
    if ($age >= 18) {
        echo "You are an adult";
    } elseif ($age < 18 && $age > 0) {
        echo "You are a minor";
    } else {
        echo "Age must be above 0";
    }
?>
