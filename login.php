<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header contains all the bootstrap cdn links -->
  <?php
  session_start();
  require('php/header.php'); ?>
  <!--css-->
  <link rel="stylesheet" href="css/form.css" />
  <title>Login Page</title>
</head>

<body>
  <!-- <div class="container-sm-4">

    <div class="header">
      <h2>Sign in</h2>
    </div>
    <form class="form" id="form" action="php/loginScript.php" method="post">
      <div class="form1" id="form1">
        <label>Email</label>
        <input type="Text" placeholder="email" name="email" id="email" />
        <small>Error Message</small>
      </div>
      <div class="form1" id="form1">
        <label>Password</label>
        <input type="password" placeholder="password" name="pass1" id="pass1" />
        <small>Error Message</small>
      </div>
      <button>Sign in</button>
      <span>don't have an account?</span>
      <a href="register.php" id="cont">Sign up</a>
    </form>
  </div> -->

  <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <?php include('php/alerts.php'); ?>
          <div class="card p-3">
            <h3 class="card-title text-center">Sign up</h3><br>
            <form class="form" id="form" action="php/loginScript.php" method="post">
              <div class="form1 mb-3" id="form1">
                <label class="form">Email</label>
                <input class="form-control" type="email" placeholder="email" name="email" id="email" />
                <small>Error Message</small>
              </div>
              <div class="form1 mb-3" id="form1">
                <label class="form">Password</label>
                <input class="form-control" type="password" placeholder="password" name="pass1" id="pass1" />
                <small>Error Message</small>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Sign up</button>
              <span>don't have an account?</span>
              <a href="register.php" id="cont">Sign up</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- <script>
  const form = document.getElementById("form");
  const email = document.getElementById("email");
  const pass1 = document.getElementById("pass1");
  form.addEventListener("submit", (e) => {
    checkInput();
  });

  function checkInput() {
    const emailValue = email.value.trim();
    const passValue = pass1.value.trim();
    if (emailValue === "") {
      setError(email, "Email cannot be blank");
    } else if (!isEmail(emailValue)) {
      setError(email, "Not a valid Email");
    } else {
      setSuccess(email);
    }
    if (passValue === "") {
      setError(pass1, "Email cannot be blank");
    } else {
      setSuccess(pass1);
    }
  }

  function isEmail(email) {
    return /^([a-z0-9\+\-]+)(\.[a-z0-9\+\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/.test(
      email
    );
  }

  function setError(input, message) {
    const form1 = input.parentElement;
    const small = form1.querySelector("small");
    form1.className = "form1 error";
    small.innerText = message;
  }

  function setSuccess(input) {
    const form1 = input.parentElement;
    form1.className = "form1 success";
  }
</script> -->

</html>