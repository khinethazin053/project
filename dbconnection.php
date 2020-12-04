
<!-- This file is for database connection to connect to the database -->
<?php

$servername ="localhost";
$dbname     ="login";
$user       ="root";
$password   ="";
$dbn        ="mysql:host=$servername;dbname=$dbname";
$pdo        =new PDO($dbn,$user,$password);
try {
    //echo "connnection successful";
    $conn = $pdo;
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "fail".$e->getMessage();
}



?>
