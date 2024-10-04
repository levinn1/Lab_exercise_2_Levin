<?php
class Student {
    public $name;
    public $ageYears;
    public $ageMonths;
    public $ageDays;
    public $sex;
    public $gpa;
    public $isStudent;

    public function __construct($name, $birthDate, $sex, $gpa, $isStudent) {
        $this->name = $name;

        // Calculate age details
        $birthDate = new DateTime($birthDate);
        $now = new DateTime();
        $ageDifference = $now->diff($birthDate);

        $this->ageYears = $ageDifference->y;
        $this->ageMonths = $ageDifference->m;
        $this->ageDays = $ageDifference->d;

        $this->sex = $sex;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
    }

    public function displayInfo() {
        echo "Name: $this->name\n";
        echo "Age: $this->ageYears years, $this->ageMonths months, and $this->ageDays days\n";
        echo "Sex: $this->sex\n";
        echo "GPA: $this->gpa\n";
        echo "Is Student: " . ($this->isStudent ? 'Yes' : 'No') . "\n";
    }
}
?>
