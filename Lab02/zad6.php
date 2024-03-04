<?php

function ctf($c = null) 
{
    if ($c === null) 
    {
        echo "Nie podano wartości";
        return null;
    }
    else
    {
        $fahrenheit = ($c * 9/5) + 32;
        return $fahrenheit;
    }
}

$result1 = ctf();
$result2 = ctf(30);

echo "Wynik 1: " . $result1 . "\n";
echo "Wynik 2: " . $result2;


