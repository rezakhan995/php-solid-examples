<?php

interface DeviceInterface {
    public function turnOn();
    public function turnOff();
}

class Lamp implements DeviceInterface {
    //TRUE = on, FALSE = Off
    protected $currentState = FALSE; 
    
    public function turnOn() {
        $this->currentState = TRUE;
    }
    
    public function turnOff() {
        $this->currentState = FALSE;
    }
    
    public function getState() {
        return $this->currentState;
    }
    
    public function getStateString() {
        if ($this->currentState) {
            return 'Lamp is now On<br>';
        } else {
            return 'lamp ib now Off<br>';
        }
    }
}

interface ButtonInterface {
    public function On();
    public function Off();
}

class Button implements ButtonInterface {
    protected $di;
    
    public function __construct(DeviceInterface $di) {
        $this->di = $di;
    }
    
    public function On() {
        $this->di->turnOn();
    }
    
    public function Off() {
        $this->di->turnOff();
    }
}

$l = new Lamp();
$b = new Button($l);
echo $l->getStateString(); //Off

$b->On();
echo $l->getStateString(); //On