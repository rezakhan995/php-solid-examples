<?php

class Lamp {
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
    
    public function getStateString(){
        if ($this->currentState) {
            return 'Lamp is now On<br>';
        } else {
            return 'lamp ib now Off<br>';
        }
    }
}

class Button {
    protected $lamp;
    
    public function __construct(Lamp $l) {
        $this->lamp = $l;
    }
    
    public function On() {
        $this->lamp->turnOn();
    }
    
    public function Off() {
        $this->lamp->turnOff();
    }
}

$l = new Lamp();
$b = new Button($l);
echo $l->getStateString(); //Off

$b->On();
echo $l->getStateString(); //On