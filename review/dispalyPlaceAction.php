<?php
session_start();
header("Access-Control-Allow-Origin: *");

// Include database connection
include '../dataBase/dataBaseConnection.php';

$sql = "select * from review  ";
if ($pdo->exec($sql) !== false) {
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Encode the array as JSON
    echo json_encode($rows);
} else {
    echo "Error inserting record: " . $pdo->errorInfo()[2];
}
?>