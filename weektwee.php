<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 12;

if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>


<form method="post" action="weektwee">
    
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Ingevoerde gebruikersnaam: " . $username . "<br>";
    echo "Ingevoerd wachtwoord: " . $password;
}
?>
    
</body>
</html>