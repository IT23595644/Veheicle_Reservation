<?php
require 'config.php';

$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$address = $_POST['address'];
$vehicleType = $_POST['vehicleType'];
$airCondition = $_POST['airCondition'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

$sql = "INSERT INTO vehicle_book (Name, Phone, Email, address, vehicleType, airCondition, startDate, endDate) 
        VALUES ('$Name', '$Phone', '$Email', '$address', '$vehicleType', '$airCondition', '$startDate', '$endDate')";

if($con->query($sql) === TRUE){
    header('Location: RegUsers.php'); 
} else {
    echo "Data insertion failed: " . $con->error;
}
?>
