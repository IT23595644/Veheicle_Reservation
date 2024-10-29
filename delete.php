<?php 
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM vehicle_book WHERE id=$id";

if($con->query($sql) === TRUE){
    header('Location: RegUsers.php'); 
} else {
    echo "Data deletion failed: " . $con->error;
}
?>
