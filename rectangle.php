<?php
class Rectangle
{
    private $width;
    private $height;
 
    public function __construct(int $width, int $height)
    {
 
        $this->width = $width;
        $this->height = $height;
    }
 
    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    
    public function getArea()
    {
        return $this->width * $this->height;
    }
}