<?php
$showError=false;
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "partials/_dbconnect.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    if (($password == $cpassword) && $exists == false) {
        $sql = "INSERT INTO `foodie` (`username`, `email`, `contact`, `password`, `dt`) VALUES ('$username', '$email', '$contact', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    }
    else{
        $showError=true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-holder {
            display: flex;
            justify-content: center;
            height: 80vh;
            margin-top: 30px;

        }

        .signup-form {
            width: 500px;
            background: #615ece;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: aliceblue;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            color: aliceblue;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            border-radius: 5px;
            padding: 10px 20px;
            background-color: #13abb3;
        }

        .image-holder img {
            height: 590px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php
    require "partials/_nav.php";
    ?>

    <?php
    if ($showAlert) {
        echo '<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>';
    }
    if($showError)
    {
        echo '<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>';
    }

    ?>
    <div class="container">
        <div class="form-holder">
            <div class="image-holder">
                <img src="https://images.pexels.com/photos/3338681/pexels-photo-3338681.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="signup-form">
                <h2>Create an Account</h2>
                <form action="/signup.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No.</label>
                        <input type="number" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>