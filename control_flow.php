<?php
include 'variables.php';

$student = new Student("Levin", "2005-06-22", "male", 3.5, true);
$age = $student->ageYears;

echo "<br>";
if ($age < 0) {
    echo "Age must be above 0";
} else {
    echo ($age >= 18) ? "You are an adult" : "You are a minor";
}
?>
