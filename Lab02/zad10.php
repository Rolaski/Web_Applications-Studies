<?php

$people = array(
    "Anna" => 35,
    "Bartosz" => 42,
    "Piotr" => 30
);

print "Elementy w liście:\n";
foreach ($people as $name => $age) 
{
    print "- $name ma $age lat.\n";
}

print "Liczba elementów w liście: " . count($people) . "\n";

print "Wiek Bartosza: " . $people["Bartosz"] . " lat.\n";


$people["Witold"] = 28;

unset($people["Piotr"]);

arsort($people);
print "\n";
print "Tablica posortowana malejąco według wieku:\n";
foreach ($people as $name => $age) {
    print "$name ma $age lat.\n";
}


