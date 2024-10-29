<?php 
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Registered Users</title>
</head>
<body>
    <div class="container">
        <h2>Registered Users</h2>

        <?php 
        $sql = "SELECT * FROM vehicle_book";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<div class='user-card'>";
                echo "<h3>" . $row['Name'] . "</h3>";
                echo "<p><strong>Phone:</strong> " . $row['Phone'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['Email'] . "</p>";
                echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
                echo "<p><strong>Vehicle Type:</strong> " . $row['vehicleType'] . "</p>";
                echo "<p><strong>Start Date:</strong> " . $row['startDate'] . "</p>";
                echo "<p><strong>End Date:</strong> " . $row['endDate'] . "</p>";
                echo "<button><a href='delete.php?id=" . $row['id'] . "'>Delete</a></button>";
                echo "</div>";
                echo "<hr>";
            }    
        } else {
            echo "<p>No data found!</p>";
        }
        ?>
    </div>
</body>
</html>
