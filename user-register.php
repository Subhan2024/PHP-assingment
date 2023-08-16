<?php
include('conn.php');

$fetch = "SELECT * FROM `php-mysql`";
$data = mysqli_query($conn , $fetch);

while($row = mysqli_fetch_assoc($data)){
    
    echo $row ['username']. "<br>";
    echo $row ['age']. "<br>";
    echo $row ['gender']. "<br>";
    echo $row ['password']. "<br>";

}
?>
