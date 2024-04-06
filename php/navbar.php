<!-- header contains all the bootstrap cdn links -->
<?php
require('header.php'); ?>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light nv sticky-top p-3">
    <div class="container-fluid">
        <h4>Book My Class</h4>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item justify-content-between">
                    <a class="nav-link" href="#popular">
                        Live classes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reachus">
                        Reach us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-weight: bolder;" href="#">
                        <?php
                        echo "Hello, " . $_SESSION['name1'];
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>