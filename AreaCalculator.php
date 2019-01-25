<?php namespace Acme;

class AreaCalculator
{

    public function calculate($squares)
    {
        $area = 0;

        foreach ($squares as $square) {
            $area += $square->side * $square->side;
        }

        return $area;

    }
}