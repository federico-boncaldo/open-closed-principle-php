<?php namespace Acme;

class AreaCalculator
{

    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            if ($shape instanceof Circle) {
                $area[] = $shape->radius * $shape->radius * pi();
            } elseif ($shape instanceof Square) {
                $area[] = $shape->side * $shape->side;
            }
        }

        return array_sum($area);

    }
}