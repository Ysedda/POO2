<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;

    private int $cargo;

    public function __construct(string $color, int $nbSeats,string $energy, int $cargo)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->cargo = $cargo;      
    }

    public function getCapacity():int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity):void
    {
        $this->capacity = $capacity;
    }

    public function getCargo():int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo):void
    {
        $this->cargo = $cargo;
    }
    
    public function isFull():string
    {
        $sentence = '';
        if ($this->cargo === $this->capacity) {
            $sentence .= 'full';
        } elseif ($this->cargo < $this->capacity) {
            $sentence .= 'in filling';
        }
        return $sentence;
    }
}
