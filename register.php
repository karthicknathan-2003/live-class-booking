<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--carousel-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--font-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

</html>



<?php
$name1 = $_POST['name1'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];


if (!empty($name1) || !empty($email) || !empty($pass) || !empty($cpass)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($pass === $cpass) {

            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "project";

            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()) {
                die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
            } else {
                $SELECT = "SELECT email FROM register WHERE email=? LIMIT 1";
                $INSERT = "INSERT INTO register(name1,email,pass,cpass)values(?,?,?,?)";

                $stmt = mysqli_prepare($conn, $SELECT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;
                if ($rnum == 0) {
                    $stmt->close();
                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssss", $name1, $email, $pass, $cpass);
                    $stmt->execute();
                    session_start();
                    $_SESSION["name1"]=$name1;
                    header('location:main.php');
                    exit();
                } else {
                    echo " <div class='alert alert-danger' id='alert'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b class='text-center'>Your mail is already registered..Please login here..</b></div>";
                    header('location:login.html');
                    exit();
                }
                $stmt->close();
                $conn->close();
            }
        } else {
            echo '<script>alert("Please enter a correct password")</script>';
        }
    } else {
        echo '<script>alert("Enter a Valid Email")</script>';
    }
} else {
    echo '<script>alert("All fields are required")</script>';
    exit();
}
?>
<style>
    #alert{
        z-index: +1;
    }
</style>