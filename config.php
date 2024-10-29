<?php
$con = new mysqli("localhost", "root", "", "vehicle_booking");

if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
?>
