<?php
class Student {
    private $firstName;
    private $gender;

    public function getfirstName() {
        return $this->firstName;
    }

    public function setfirstName($firstName){
        $this->firstName = $firstName;
        echo("First name is set to " .$firstName);
        echo("<br>");
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender) {
        if('Male' !== $gender and 'Female' !== $gender) {
            echo ('Set gender as Male or Female for gender');
        }

        $this->gender = $gender;
        echo("Gender is set to " . $gender);
        echo ("<br>");
    }
}

$student = new Student();
$student->setFirstName('Meena');
$student->setGender('Female');

echo $student->firstName;