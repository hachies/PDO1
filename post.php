<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 1 // week 1</title>
</head>
<body>
    <form method="POST" action="post.php">
        <label>Naam</label><br>
        <input type="text" name="naam"><br>
        <label>Achternaam</label><br>
        <input type="text" name="achternaam"><br>
        <label>leeftijd</label><br>
        <input type="number" name="leeftijd"><br>
        <label>Adres</label><br>
        <input type="text" name="adress"><br>
        <label>E-mail</label><br>
        <input type="text" name="email">
        <button>klik</button><br>
</body>
</html>

<?php
$naam = $_POST["naam"];
$achternaam = $_POST["achternaam"];
$leeftijd = $_POST ["leeftijd"];
$adres = $_POST ["adress"];
$email = $_POST ["email"];
 
echo "Welkom {$naam} {$achternaam} u bent ingelogt <br>";
echo "Uw leeftijd is: {$leeftijd} <br>";
echo "U woont in {$adres} <br>";
echo "Uw e-mail is: {$email} <br>";
?>
