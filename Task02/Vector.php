<?php

class Vector 
{
    private $x;
    private $y;
    private $z;
    
    public function __construct($x, $y, $z)
    {
        if (!is_numeric($x) || !is_numeric($y) || !is_numeric($z)) {
            throw new InvalidArgumentException('Coordinates must be numeric');
        }
        
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function add(Vector $vector): Vector
    {
        return new Vector(
            $this->x + $vector->x, 
            $this->y + $vector->y,
            $this->z + $vector->z
            );
    }

    public function sub(Vector $vector): Vector
    {
        return new Vector(
            $this->x - $vector->x, 
            $this->y - $vector->y,
            $this->z - $vector->z
            );
    }

    public function product($number): Vector
    {
        return new Vector(
            $this->x * $number, 
            $this->y * $number,
            $this->z * $number
            );
    }

    public function scalarProduct(Vector $vector): float
    {
        return $this->x * $vector->x + $this->y * $vector->y + $this->z * $vector->z;

    }

    public function vectorProduct(Vector $vector): Vector
    {
        $newX = $this->y * $vector->z - $this->z * $vector->y;
        $newY = $this->z * $vector->x - $this->x * $vector->z;
        $newZ = $this->x * $vector->y - $this->y * $vector->x;

        return new Vector($newX, $newY, $newZ);
    }

    public function __toString()
    {
        return "($this->x; $this->y; $this->z)";
    }

}

// $vector1 = new Vector(1, 2, 3);
// $vector2 = new Vector(-1, 0, 2);

// echo $vector1->add($vector2) . "<br>";
// echo $vector1->sub($vector2) . "\n";
// echo $vector1->product(2) . "\n";
// echo $vector1->scalarProduct($vector2) . "\n";
// echo $vector1->vectorProduct($vector2) . "\n";

?>