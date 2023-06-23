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

// Deel 1
echo "<h1>Alle producten:</h21";

$sql = "SELECT * FROM winkel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Product Code: " . $row["product_code"] . "<br>";
        echo "Product Naam: " . $row["product_naam"] . "<br>";
        echo "Product Prijs: " . $row["product_prijs"] . "<br><br>";
    }
} else {
    echo "Geen resultaten gevonden.";
}

// Deel 2
echo "<h2>Product met product_code 1:</h2>";

$sql = "SELECT * FROM winkel WHERE product_code = ?";
$stmt = $conn->prepare($sql);
$productCode = 1;
$stmt->bind_param("i", $productCode);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Product Code: " . $row["product_code"] . "<br>";
    echo "Product Naam: " . $row["product_naam"] . "<br>";
    echo "Product Prijs: " . $row["product_prijs"] . "<br><br>";
} else {
    echo "Geen resultaten gevonden.";
}

// Deel 3
echo "<h1>Product met product_code 2:</h1>";

$sql = "SELECT * FROM winkel WHERE product_code = :productcode";
$stmt = $conn->prepare($sql);
$productCode = 2;
$stmt->bindParam(":productCode", $productCode);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Product Code: " . $row["product_code"] . "<br>";
    echo "Product Naam: " . $row["product_naam"] . "<br>";
    echo "Product Prijs: " . $row["product_prijs"] . "<br><br>";
} else {
    echo "Geen resultaten gevonden.";
}
?>