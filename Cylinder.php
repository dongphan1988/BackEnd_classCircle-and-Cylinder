<?php

include_once('Circle.php');

class Cylinder extends Circle
{
    public $height;

    public function setHeight($newHeight)
    {
        $this->height = $newHeight;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function area()
    {
        return parent::area() * 2 + 2*pi()*parent::getRadius() * $this->height;
    }

    public function volume()
    {
        return parent::area() * $this->height;
    }

    public function toString()
    {
        echo "<br>radius = " . parent::getRadius();
        echo "<br> height = " . $this->height;
        echo "<br> color = " . parent::getColor();
        echo "<br> area = " . $this->area();
        echo "<br> perimeter = " . $this->volume();
    }
}