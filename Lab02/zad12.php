<?php

setlocale(LC_TIME, 'pl_PL');
date_default_timezone_set("Europe/Warsaw");

echo date("l, d-m-Y")."\n";
echo date("Y-F-d H:i") . "\n";

// Liczba dni pomiędzy dniem dzisiejszym a 12 marca 2021 roku
$currentDate = new DateTime();
$targetDate = new DateTime("2021-03-12");
$daysDifference = $currentDate->diff($targetDate)->days;
echo "Liczba dni pomiędzy dzisiaj a 12 marca 2021 roku: $daysDifference dni\n";

// Liczba godzin i minut pomiędzy aktualną godziną a 7:00 dnia dzisiejszego
$currentTime = new DateTime();
$targetTime = new DateTime(date("Y-m-d") . " 07:00");
$timeDifference = $currentTime->diff($targetTime);
echo "Czas do 7:00 dnia dzisiejszego: " . $timeDifference->format("%H godzin %i minut") . "\n";

// Która data jest wcześniejsza: data dzisiejsza czy 1 kwietnia 2023 roku
$futureDate = new DateTime("2023-04-01");
if ($currentDate < $futureDate) 
{
    echo "Data dzisiejsza jest wcześniejsza niż 1 kwietnia 2023 roku\n";
}
else 
{
    echo "1 kwietnia 2023 roku jest wcześniejsza niż data dzisiejsza\n";
}
