<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header contains all the bootstrap cdn links -->
    <?php require('header.php'); ?>
</head>

</html>

<?php
require 'db_conn.php';
//session_start();
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);

if ($conn->connect_error) {
    die("Failed to connect:" . $conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from register where email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if (!empty($email) || !empty($pass1)) {

        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            $name1 = $data['name1'];
            if ($data['pass'] === $pass1) {
                session_start();
                $_SESSION['name1'] = $name1;
                $_SESSION['success'] = 'Welcome to Book My Class, ' . $_SESSION['name1'];
                header('location:../main.php');
            } else {
                $_SESSION['error'] = 'Please enter correct password to continue...';
                header('location:../login.php');
            }
        } else {
            $_SESSION['error'] = 'Invalid Email or Password, Please register here...';
            header('location:../register.php');
        }
    } else {
        $_SESSION['required'] = 'All fields are required';
        header('location:../login.php');
    }
}

?>