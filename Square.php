<?php
class Square
{
    private $side;
 
    public function __construct(int $side)
    {
 
        $this->side = $side;
    }
 
    public function getPerimeter()
    {
        return $this->side * 4;
    }
 
    public function getArea()
    {
        return pow($this->side, 2);
    }
}