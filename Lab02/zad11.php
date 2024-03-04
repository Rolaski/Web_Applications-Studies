<?php

function division($x, $y) 
{
    if (!is_int($x) || !is_int($y)) 
    {
        throw new InvalidArgumentException("Oba parametry powinny być liczbami całkowitymi");
    }

    if ($y == 0 || $x == 0) 
    {
        throw new InvalidArgumentException("Dzielenie przez zero jest niedozwolone");
    }

    $result = $x / $y;
    return $result;
}

try 
{
    echo division(10, 2) . "\n";   
    echo division(5, 0) . "\n";    
} 
catch (InvalidArgumentException $e) 
{
    echo "Błąd: " . $e->getMessage() . "\n";
}




