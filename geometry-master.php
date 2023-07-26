<?php
abstract class AbstractGeometry
{
    abstract public function area();
    abstract public function perimeter();
}
class Rectangle extends AbstractGeometry
{
    private float $width;
    private float $height;
    public function __construct(float $width,float $height){
        $this->width = $width;
        $this->height= $height;
    }
    public function area() : int 
    {
        return $this->width*$this->height;
    }
    public function perimeter() : int 
    {
        return $this->width*2 + $this->height*2;
    }
}
class Square extends AbstractGeometry
{
    private float $width;
    public function __construct(float $width){
        $this->width = $width;
    }
    public function area() : int 
    {
        return $this->width*$this->width;
    }
    public function perimeter() : int 
    {
        return $this->width*4;
    }
}
class Triangle extends AbstractGeometry
{
    private float $line1;
    private float $line2;
    private float $line3;
    public function __construct(float $line1,float $line2,float $line3){
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->line3 = $line3;
    }
    public function area() : float 
    {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->line1) * ($p - $this->line2) * ($p - $this->line3));
    }
    public function perimeter() : int 
    {
        return $this->line1+$this->line2+$this->line3;
    }
}
?>