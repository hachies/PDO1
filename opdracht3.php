<?php
//deel 1

$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
$myArray[] = 'metro';

echo count($myArray) . "<br>";

//deel 2
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
echo "Het array heeft ".count($myArray)." elementen" . "<br>"; 


$myArray[] = 'metro';
echo "Het array heeft ".count($myArray)." elementen" . "<br>";

//deel 3
echo "regel twee antwoord is = bar" . "<br>";
echo "regel vijf antwoord is = world" . "<br>";
echo "regel acht antwoord is = Toyota" . "<br>";
echo "regel negen antwoord is = Volvo, BMW, Toyota" . "<br>";
echo "regel twaalf antwoord is = 5". "<br>";
echo "regel negentien antwoord is = 4" . "<br>";

//deel 4

$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 0 );

echo "Gemiddelde is: " . $gemiddelde . "<br>";

//Ik denk dat het beter is om de regels samen te voegen, omdat je weinig code kan schrijven ipv lange codes/regels.


?>