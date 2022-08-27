<?php
class Geometry
{
    protected string $name = '';

    public function getName(): string 
    {
        return $this->name;
    }
    public function getArea(): float 
    {
        return 0.0;
    }
    public function getPerimetr(): float
     {
        return 0.0;
    }
    public function __toString()
     {
        return 'Имя фигуры: ' . $this->getName() . '<br/>'.
               'Площадь фигуры: ' . $this->getArea() . '<br/>'.
               'Имя фигуры: ' . $this->getPerimetr() . '<br/>';
    }

}
