<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header contains all the bootstrap cdn links -->
    <?php require('header.php'); ?>
    <!--css-->
</head>

</html>

<?php
require 'db_conn.php';
$name1 = mysqli_real_escape_string($conn, $_POST['name1']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

if (!empty($name1) && !empty($email) && !empty($pass) && !empty($cpass)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($pass === $cpass) {
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
                    $_SESSION["name1"] = $name1;
                    $_SESSION['success'] = 'Welcome to Book My Class, ' . $_SESSION['name1'];
                    header('location:../main.php');
                } else {
                    $_SESSION['error'] = 'Email already exists, Please login here...';
                    header('location:../login.php');
                }
                $stmt->close();
                $conn->close();
            }
        } else {
            $_SESSION['error'] = 'Please enter a correct password';
            header('location:../register.php');
        }
    } else {
        $_SESSION['error'] = 'Enter a Valid Email';
        header('location:../register.php');
    }
} else {
    $_SESSION['required'] = 'All fields are required...';
    header('location:../register.php');
}
?>