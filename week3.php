<?php
$host = '127.0.0.1';
$db = 'winkel';
$user = 'root';
$pass = 'Hangho12!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=winkel", $user, $pass);
    echo "verbonden met ($db).";
} catch (PDOException $e) {
    echo "verbinding mislukt: " . $e->getMessage();
 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) 
            VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving')";

    if ($conn->query($sql) === TRUE) {
        echo "Product succesvol toegevoegd!<br>";
    } else {
        echo "Fout bij het toevoegen van het product: " . $conn->error . "<br>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Toevoegen</title>
</head>
<body>
    <h2>Product Toevoegen</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="product_naam">Product Naam:</label>
       