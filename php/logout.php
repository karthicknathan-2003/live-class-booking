<?php

require 'db_conn.php';
$_SESSION = [''];
session_unset();
session_destroy();

$_SESSION['success'] = 'You are logged out successfully...';
header('location:../login.php');
