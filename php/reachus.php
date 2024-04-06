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
$name1 = $_POST['name1'];
$email = $_POST['email'];
$msg = $_POST['msg'];


if (!empty($name1) || !empty($email) || !empty($msg)) {
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $INSERT = "INSERT INTO reachus(name1,email,msg)values(?,?,?)";
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sss", $name1, $email, $msg);
        $stmt->execute();

        $_SESSION['success'] = 'Message Sent Successfully!';
        header('location:../main.php');
        $stmt->close();
        $conn->close();
    }
} else {
    $_SESSION['required'] = 'All fields are required';
    header('location:../main.php');
}
?>