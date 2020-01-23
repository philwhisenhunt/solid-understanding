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
        return $this->gender
    }
}