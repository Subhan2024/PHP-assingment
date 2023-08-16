<?php
include('conn.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid" style="margin-top: 30px" >
        <form action="form.php" method="post" class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" class="form-control" placeholder="Enter Your Age">
        <br>
        <label for="gender">Gender:</label>
        <input type="text" name="gender" class="form-control" placeholder="Enter Your Gender">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
        <br>
        <input type="submit" name="submit" value="submit" class="btn btn-warning">
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $query = "INSERT INTO `php-mysql` (`Username`, `Age`, `Gender`, `Password`) VALUES ('$username', '$age', '$gender', '$password')";
        $result = mysqli_query($conn , $query);
        if(!$result){
            die("query failed");
        }
    }
    ?>
</body>
</html>