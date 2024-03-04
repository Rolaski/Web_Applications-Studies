<?php
$a = 4;
define("B",10);
$c = 4.0;
$d = 5.667;

print ("a + b = ".$a+B);
print("\na / b = ".$a / B);
print("\na ^ b = ".pow($a,B));
print("\nB % a = ".B % $a);
print(($a==B) ?  "\na == b" : "\na != b");
print(($a > B) ? "\na > b" : "\na < b");
print(($a == $c) ? "\na == c" : "\na != c");
print(($a === $c) ? "\na === c" : "\na != c");
print("\n".number_format($d,0));
print("\n".round($d,2));
