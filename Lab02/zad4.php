<?php
//Zad 2.4
$text1 = "   Programuję dobrze  ";
$text2 = "dobrze w PHP.  ";

print("dlugosc text1: ".strlen($text1));
print("\ntext2 od tylu: ".strrev($text2));
print((strlen($text1) > strlen($text2)) ? "\nText1 jest dluzszy" : "\nText2 jest dluzszy");
print((mb_stripos($text1, "Programuję"))? "\ntext1 zawiera slowo":"\ntext1 nie zawiera slowa");
print((mb_stristr($text2, "dobrze"))? "\ntext2 zawiera slowo":"\ntext2 nie zawiera slowa");
print("\n".trim($text1) ." ".trim($text2));

$text3 = explode(" ",  trim($text1) . " ".trim($text2));
print_r($text3);

print("\n".mb_strtoupper($text1));
print("\n".ucfirst($text2));
print("\n".mb_substr($text2,9,11));