<?php
class Vehicle {
    public $engine;
    public $color;
    public $power;

    public function accelerate(){
        return "Speed increased";
    }

    public function start(){
        return "Car is going fast";
    }
}

class Car extends vehicle {
    
}