<?php
$l = 10;

function rd(&$l) 
{
    $l = random_int(1, 50);
}

print("l przed: ".$l);

rd($l);
print("\nl po: ".$l);



