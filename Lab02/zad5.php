<?php

$n = 3.5;
$note = "";

switch (true) {
    case ($n >= 2.0 && $n < 3.0):
        $note = "Dostateczny";
        break;
    case ($n >= 3.0 && $n < 3.5):
        $note = "Dobry";
        break;
    case ($n >= 3.5 && $n < 4.5):
        $note = "Bardzo Dobry";
        break;
    case ($n >= 4.5 && $n <= 5.0):
        $note = "Celujący";
        break;
    default:
        $note = "";
}

print("Ocena: " . $note);

