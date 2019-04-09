<?php


class Circle
{
    public $radius;
    public $color;

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }

    public function setColor($newColor)
    {
        $this->color = $newColor;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function toString()
    {
        echo "<br> radius = " . $this->radius;
        echo "<br> color = " . $this->color;
        echo "<br> area = " . $this->area();

    }
}