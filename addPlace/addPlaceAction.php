<?php
session_start();
header("Access-Control-Allow-Origin: *");

// Include database connection
include '../dataBase/dataBaseConnection.php';


$place_name =  $_POST['place_name'];
$place_categories = $_POST['place_categories'];
$place_size = $_POST['place_size'];
$description = $_POST['description'];
$latitude =$_POST['latitude'];
$longitude = $_POST['longitude'];
$country = $_POST['country'];
$state = $_POST['state'];
$district =$_POST['district'];
$area = $_POST['area'];
$created_by = $_POST['created_by'];

$sql = "INSERT INTO map_data (place_name, place_categories, place_size, description, latitude, longitude, country, state, district, area,created_by) 
        VALUES ('$place_name', '$place_categories', '$place_size', '$description', $latitude, $longitude, '$country', '$state', '$district', '$area','$created_by')";
if ($pdo->exec($sql) !== false) {
    echo "New record inserted successfully";
} else {
    echo "Error inserting record: " . $pdo->errorInfo()[2];
}
?>
