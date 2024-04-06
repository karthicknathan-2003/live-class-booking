<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header contains all the bootstrap cdn links -->
    <?php require('php/db_conn.php'); ?>
    <?php require('php/header.php'); ?>
    <title>Register</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Registration</h1><br>
                <form action="php/booking.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name1" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male" required>
                            <label class="form-check-label" for="gender-male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female" required>
                            <label class="form-check-label" for="gender-female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender-others" value="others" required>
                            <label class="form-check-label" for="gender-others">Others</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="degree" class="form-label">Degree</label>
                        <input type="text" class="form-control" id="degree" name="degree" required>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" id="department" name="dept" required>
                    </div>
                    <div class="mb-3">
                        <label for="college" class="form-label">College Name</label>
                        <input type="text" class="form-control" id="college" name="college" required>
                    </div>
                    <div class="mb-3">
                        <label for="district" class="form-label">District</label>
                        <input type="text" class="form-control" id="district" name="dist" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" name="tc" value="Accepted" required>
                        <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <style>
        body {
            font-family: 'poppins';
            background-image: url(photos/books.jpg);
            background-size: cover;
        }

        #cont {
            position: relative;
            align-items: center;
        }

        #cont .form-group input:focus {
            outline: none;
            box-shadow: none;
        }

        #cont .form-group label {
            font-weight: bold;
        }

        /* .form-group #one {
            margin-top: 0px;
            display: inline-block;
        } */
    </style>
</body>

</html>