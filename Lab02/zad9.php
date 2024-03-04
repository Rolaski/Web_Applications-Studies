<?php

$fruits = array("jabłko", "banan", "gruszka");
print ("Liczba elementów w liście: " . count($fruits) . "\n");

// Wyświetlenie wszystkich elementów w osobnych linijkach
print("Elementy w liście:\n");
foreach ($fruits as $fruit) {
    print(" - ".$fruit . "\n");
}


$fruits[] = "cytryna";
array_pop($fruits);


rsort($fruits);
print("Tablica posortowana malejąco:\n");
foreach ($fruits as $fruit) 
{
    print(" - ".$fruit . "\n");
}

?>
