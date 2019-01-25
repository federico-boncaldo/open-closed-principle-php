<?php namespace Acme;

class Square
{
    public $side;

    function __construct($side)
    {
        $this->side = $side;
    }

    public function area()
    {
    	return $this->side * $this->side;
    }

}