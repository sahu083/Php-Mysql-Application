<?php
require_once "pdo.php";
echo "<pre>\n";
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=misc', 'fred', 'zap');
$stmt = $pdo->query("SELECT * FROM USERS");

while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
}

echo "<pre>\n";

?>