<?php
include ('connection.php');

if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = md5($_POST['pass']);

    // $sql = "select * from `php-mysql` where username = '$username' and password = '$password'";
    $sql =  "INSERT INTO `php-mysql` (`Username`, `Password`) VALUES ('$username', '$password')";
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
    // $count = mysqli_num_rows($result);

    $result = mysqli_query($conn , $sql);
    if(!$result){
        echo "query failed";
        header('location:Welcome.php');
    }
     else{
         echo "Login Successful";
     }
   
}

?>