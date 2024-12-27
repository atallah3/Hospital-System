<?php
    include "header.php";
?>

<table>
    <th>Number</th>
    <th>Name</th>
    <th>E-mail</th>
    <th>Date</th>

<?php
    $host = "localhost";
    $user = "root";
    $password = "rootroot";
    $database = "hospital";

    $conn = mysqli_connect($host, $user, $password, $database);

    // get data from DB
    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn,$query);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['created_date'] . "</td></tr>";        
        }
        echo "</table>";
    }
?>