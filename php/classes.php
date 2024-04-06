<!DOCTYPE html>
<html lang="en">

<head>
  <!-- css -->
  <link rel="stylesheet" href="style.css" />
  <title>Book My Class</title>
</head>


<body>
  <?php
  require 'db_conn.php';
  include('navbar.php');

  if (isset($_POST['submit'])) {
    $submit = $_POST['submit'];
    $select = "SELECT * FROM classes WHERE submit=?";  //checking if the user is already in
    $stmt = mysqli_prepare($conn, $select);
    mysqli_stmt_bind_param($stmt, 's', $submit);
    mysqli_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
  ?>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 d-flex" id="cardeck">
            <?php while ($row = mysqli_fetch_array($result)) : ?>
              <div class="card align-items-center p-3 shadow-lg bg-white rounded border border-0" id="card">
                <img src="../images/<?php echo $row['img']; ?>" class="card-img-top w-50" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title"><?php echo $row['title']; ?></h5>
                  <p class="card-text"><?php echo $row['details']; ?></p>
                  <a class="btn btn-primary" href="../booking.php">Book Now</a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
  <?php

    } else {
      echo "<h2 class='text-center mt-4'>Currently no classes are available.</h2>";
    }
  }
  ?>
</body>
<style>
  body {
    font-family: "poppins" !important;
  }

  /*cards*/
  #card {
    max-width: 50%;
    border-radius: 4px;
    box-shadow: 0 10px 20px rgba(182, 39, 118, 0.12),
      0 4px 8px rgba(0, 0, 0, 0.06);
    cursor: pointer;
  }

  #cardeck {
    gap: 2.5em;
  }

  #card:hover {
    transform: scale(1.07);
    transition: opacity 0.6s ease;
    /* background: linear-gradient(to right, rgb(49, 238, 166), rgb(57, 167, 157)); */
    box-shadow: 0 10px 20px rgba(182, 39, 118, 0.12),
      0 4px 8px rgba(0, 0, 0, 0.06);
  }

  #cardeck:hover>:not(:hover) {
    opacity: 0.4;
  }


  .dropdown:hover>.dropdown-menu {
    display: block;
    background: rgba(255, 255, 255, 0.44);
    border-radius: 3px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.3);
  }

  .dropdown>.dropdown-toggle:hover {
    background: blue;
    color: white;
    border-radius: 3px;
  }
</style>
<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>

</html>