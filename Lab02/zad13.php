<?php

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string
    {
        return "Point({$this->x}, {$this->y})";
    }

    // aktualizacja -> edycja wspolrzednych punktow
    public function updateCoordinate(string $coordinate, float $value): void
    {
        // Aktualizacja współrzędnej
        if ($coordinate === 'x') 
        {
            $this->x = $value;
        } 
        elseif ($coordinate === 'y') 
        {
            $this->y = $value;
        } 
        else 
        {
            throw new InvalidArgumentException("Niewłaściwa nazwa współrzędnej. Użyj 'x' lub 'y'");
        }
    }

    public function move(float $dx, float $dy): void
    {
        // Przesunięcie punktu o podany dystans
        $this->x += $dx;
        $this->y += $dy;
    }
}

// Przykłady użycia
$point1 = new Point(1.5, 2.0);
echo $point1 . "\n"; // Wyświetli: Point(1.5, 2.0)

$point1->updateCoordinate('x', 3.0);
$point1->updateCoordinate('y', 4.5);
echo $point1 . "\n"; // Wyświetli: Point(3.0, 4.5)

$point1->move(1.0, -2.5);
echo $point1 . "\n"; // Wyświetli: Point(4.0, 7.0)

