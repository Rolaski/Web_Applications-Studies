<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

// Wyświetlenie owoców z pętlą foreach z { }
foreach ($fruits as $fruit) 
{
    echo $fruit . ", ";
}

printf("\n");

// Wyświetlenie owoców z pętlą foreach z endforeach
foreach ($fruits as $fruit):
    echo $fruit . ", ";
endforeach;

?>
