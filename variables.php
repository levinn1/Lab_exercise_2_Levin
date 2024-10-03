<?php
class Student {
    public $name;     
    public $year;
    public $month;
    public $day;    
    public $sex;       
    public $gpa;     
    public $isStudent;

    function __construct($name, $date, $sex, $gpa, $isStudent) {
        $this->name = $name;
        $this->Age($date);
        $this->sex = $sex;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
    }

    function Age($date) {
        $birth = new DateTime($date);
        $datenow = new DateTime();    
        $age = $datenow->diff($birth); 
        $this->year = $age->y;
        $this->month = $age->m; 
        $this->day = $age->d;  
    }

    public function getAge() {
        return $this->year; 
    }

    public function message() {
        echo "Student name is " . $this->name . ", Age is " . $this->year . " years, " . $this->month . " months, " . $this->day . " days, Sex is " . $this->sex . ",  is " . $this->gpa . ", Is a student? " . ($this->isStudent ? 'Yes' : 'No');
    }
}

$student = new Student("Levin", "2005-06-22", "Male", 4.9, true);
$age = $student->getAge();
echo $student->message();
?>
