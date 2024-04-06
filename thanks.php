<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header contains all the bootstrap cdn links -->
  <?php require 'php/db_conn.php'; ?>
  <title>Thank you for registering</title>
</head>

<body>
  <?php include('php/navbar.php'); ?>
  <?php include('php/alerts.php'); ?>

  <div class="container-sm-4 align-content-center text-center conts">
    <div class="row-12-md">
      <div class="col-12-md conts">
        <h1 class="text-center">Thank you for registering our live class</h1>
        <h3 class="text-center mt-4">Attend the live class at the time.</h3>
        <a class="align-content-center btn btn-primary mt-4" href="main.php"> Back </a>
      </div>
    </div>
  </div>
</body>
<style>
  body {
    font-family: "poppins";
    color: rgb(0, 0, 0);
    background-image: url(images/study.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .btn {
    align-items: center;
    text-align: center;
    width: 100px;
    padding: 10px;
    border-radius: 5px;
    border: none;
  }

  .conts {
    margin-top: 8%;
  }

  #cont {
    margin: 4px 5px 0px 5px;
  }
</style>

</html>