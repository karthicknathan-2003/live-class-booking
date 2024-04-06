<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header contains all the bootstrap cdn links -->
  <?php
  session_start();
  require('php/header.php'); ?>

  <!--css-->
  <link rel="stylesheet" href="css/form.css" />
  <title>Register Page</title>
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <?php include('php/alerts.php'); ?>
          <div class="card p-3">
            <h3 class="card-title text-center">Sign up</h3><br>
            <form class="form" id="form" action="php/registerScript.php" method="post">
              <div class="form1 mb-3" id="form1">
                <label class="form" for="name1">Email</label>
                <input class="form-control" type="text" placeholder="name" name="name1" id="name1" />
                <small>Error Message</small>
              </div>
              <div class="form1 mb-3" id="form1">
                <label class="form">Email</label>
                <input class="form-control" type="Text" placeholder="email" name="email" id="email" />
                <small>Error Message</small>
              </div>
              <div class="form1 mb-3" id="form1">
                <label class="form">Password</label>
                <input class="form-control" type="password" placeholder="password" name="pass" id="pass" />
                <small>Error Message</small>
              </div>
              <div class="form1 mb-3" id="form1">
                <label class="form">Password</label>
                <input class="form-control" type="password" placeholder="password" name="cpass" id="cpass" />
                <small>Error Message</small>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Sign up</button>
              <span>don't have an account?</span>
              <a href="login.php" id="cont">Sign in</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 
  <div class="py-5">
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
      <div class="card">
        <h2>Sign in</h2>
        <form class="form" id="form" action="php/registerScript.php" method="post">
          <div class="form1" id="form1">
            <label>Email</label>
            <input type="text" placeholder="name" name="name1" id="name1" />
            <small>Error Message</small>
          </div>
          <div class="form1" id="form1">
            <label>Email</label>
            <input type="Text" placeholder="email" name="email" id="email" />
            <small>Error Message</small>
          </div>
          <div class="form1" id="form1">
            <label>Password</label>
            <input type="password" placeholder="password" name="pass" id="pass" />
            <small>Error Message</small>
          </div>
          <div class="form1" id="form1">
            <label>Password</label>
            <input type="password" placeholder="password" name="cpass" id="cpass" />
            <small>Error Message</small>
          </div>
          <button>Sign up</button>
          <span>don't have an account?</span>
          <a href="login.php" id="cont">Sign in</a>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div> -->
</body>


<!-- <script>
  const form = document.getElementById("form");
  const name1 = document.getElementById("name1");
  const email = document.getElementById("email");
  const password = document.getElementById("pass");
  const cpassword = document.getElementById("cpass");
  form.addEventListener("submit", (e) => {
    checkInput();
  });

  function checkInput() {
    const name1Value = name1.value.trim();
    const emailValue = email.value.trim();
    const passValue = password.value.trim();
    const cpassValue = cpassword.value.trim();
    if (name1Value === "") {
      setError(name1, "Name cannot be blank");
    } else {
      setSuccess(name1);
    }
    if (emailValue === "") {
      setError(email, "Email cannot be blank");
    } else if (!isEmail(emailValue)) {
      setError(email, "Not a valid email");
    } else {
      setSuccess(email);
    }
    if (passValue === "") {
      setError(password, "Password cannot be blank");
    } else {
      setSuccess(password);
    }
    if (cpassValue === "") {
      setError(cpassword, "Password cannot be blank");
    } else if (cpassValue !== passValue) {
      setError(cpassword, "Password not match");
    } else {
      setSuccess(cpassword);
    }
  }

  function isEmail(email) {
    //return /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/.test(email);
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