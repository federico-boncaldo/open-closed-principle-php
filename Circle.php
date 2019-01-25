<?php namespace Acme;

class Circle implements Shape
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
    	return $this->radius * $this->radius * pi();
    }
}