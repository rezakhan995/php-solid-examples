<?php

abstract class Handle {};
abstract class Tip {};
interface Hexagon {
    public function shape();
}

// Change handle

class BigRedHandle extends Handle implements Hexagon  {
    public function shape()
    {
        echo 'Changed handle to big red handle. ';
        return '8 equal sides of equal length';
    }
}

class SmallBlueHandle extends Handle implements Hexagon {
    public function shape()
    {
        echo 'Changed handle to small blue handle. ';
        return '8 equal sides of equal length';
    }
}


// Change tip

class PhillipsTip extends Tip implements Hexagon {
    public function shape()
    {
        echo 'Changed tip to phillip. ';
        return '8 equal sides of equal length';
    }
}

class FlatHeadTip extends Tip implements Hexagon {
    public function shape()
    {
        echo 'Changed tip to flat. ';
        return '8 equal sides of equal length';
    }
}

class Tool {
    
    protected $handle;
    protected $tip;
    
    public function __construct(Handle $handle, Tip $tip)
    {
        $this->handle = $handle;
        $this->tip = $tip;
    }
    
    public function change_tips()
    {
       if($this->tip->shape() == $this->handle->shape()) {
           echo 'Changed tip, complete your job<br>';
       } 
    }
    
    public function change_handles()
    {
       if($this->handle->shape() == $this->tip->shape()) {
           echo 'Changed handle, complete your job<br>';
       } 
    }
}

$tool = new Tool(new BigRedHandle, new FlatHeadTip);
$tool->change_tips();  // Changed tip, complete your job
$tool->change_handles();  // Changed handle, complete your job

echo "------------------------------------------------------------------------------------------------<br>";

$tool = new Tool(new SmallBlueHandle, new FlatHeadTip);
$tool->change_tips();  // Changed tip, complete your job
$tool->change_handles();  // Changed handle, complete your job
echo "-------------------------------------------------------------------------------------------------<br>";

$tool = new Tool(new BigRedHandle, new PhillipsTip);
$tool->change_tips();  // Changed tip, complete your job
$tool->change_handles();  // Changed handle, complete your job
echo "-------------------------------------------------------------------------------------------------<br>";

$tool = new Tool(new SmallBlueHandle, new PhillipsTip);
$tool->change_tips();  // Changed tip, complete your job
$tool->change_handles();  // Changed handle, complete your job
echo "-------------------------------------------------------------------------------------------------<br>";