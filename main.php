<!DOCTYPE html>
<html lang="en">

<head>
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Book My Class</title>
</head>

<?php
require 'php/db_conn.php';
?>
<body>
    <?php
    include('php/navbar.php');
    include('php/alerts.php'); ?>

    <!--carousel-->
    <div class="container" id="cont1">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="img-responsive w-100 m-0" src="images/e-learning.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="img-responsive w-100 m-0" src="images/graduate.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="img-responsive w-100 m-0" src="images/prostudy.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <!--cards-->
    <div class="container-sm-4 m-5" id="popular">
        <h1 class="text-center">Popular Classes</h1>
        <br>
        <div class="row">
            <div class="card-deck" id="cardeck">
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/js1.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">Javascript</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="js">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/react.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">React js</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="react">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/cs.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">C#</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="cs">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/java.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">Java</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="java">Book now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card-deck" id="cardeck">
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/hack.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">Ethical Hacking</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="hack">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/aws.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">AWS</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="aws">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/node.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">Node js</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="node">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="card p-2 shadow-lg p-3 mb-5 bg-white rounded border border-0" id="card">
                    <img class="card-img-top w-75 pl-5" src="images/py.png" alt="">
                    <div class="card-body text-center">
                        <form action="php/classes.php" method="post">
                            <h4 class="card-title">Python</h4>
                            <p class="card-text">Book your class now</p>
                            <button class="btn btn-primary c-white" name="submit" value="py">Book now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-sm-4 footer">
        <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-uppercase mb-4">Book My Class</h5>
                        <p>
                            Our platform contains latest live classes for the experts all over the world.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-uppercase mb-4">Popular</h5>

                        <p>
                            <a href="#popular" class="text-white">Javascript</a>
                        </p>
                        <p>
                            <a href="#popular" class="text-white">React</a>
                        </p>
                        <p>
                            <a href="#popular" class="text-white">Java</a>
                        </p>
                        <p>
                            <a href="#popular" class="text-white">Python</a>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <h5 class="text-uppercase mb-4">Location</h5>

                        <p><i class="fa fa-home mr-1"></i> KSRCT,KSR KALVI NAGAR,TIRUCHENGODU</p>
                        <p><i class="fa fa-envelope mr-1"></i> pgmkingdom17@gmail.com</p>
                        <p><i class="fa fa-phone mr-1"></i> 91+ 90785 61412 </p>
                        <p><i class="fa fa-print mr-1"></i> + 01 234 567 89</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" id="reachus">
                        <h5 class="text-uppercase mb-4">reach us</h5>
                        <form action="php/reachus.php" method="post" class="footform">
                            <div class="form-outline form-white mb-4">
                                <input type="text" placeholder="Name" class="form-control" name="name1" />
                                <input type="email" placeholder="Email" class="form-control" name="email" />
                                <textarea name="msg" placeholder="Enter your message" class="form-control" cols="29" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-white btn-block" id="submit">Send</button>
                        </form>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 border-top border-white">
                <a class="text-white" href="#">Book My Class</a>
            </div>
        </footer>
    </div>

    <!--scroll to top-->
    <button type="button" class="btn btn-danger btn-floating btn-lg " id="btn-back-to-top">
        <i class="fa fa-arrow-up"></i>
    </button>

</body>
<script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</html>