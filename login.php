<?php
$showError = false;
$showAlert = false;
$login = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "partials/_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];



    $sql = "select * from foodie where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        // echo $_SESSION['username']; 
        header("location:welcome.php");
    } 
    else {
        $showError = "Invalid credentials";
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
        body {
            background-color: #aaa;
        }

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

        .txt {
            padding: 20px;
            color: aliceblue;
        }

        .txt a {
            color: aquamarine;
        }
    </style>
</head>

<body>
    <?php
    require "partials/_nav.php";
    ?>

    <?php

    if ($login) {
        echo '<div class="alert alert-success" role="alert">
        A simple success alert—check it out!
      </div>';
    }

    if ($showError) {
        echo '<div class="alert alert-danger" role="alert">
        A simple success alert—check it out!
      </div>';
    }

    ?>
    <div class="container">
        <div class="form-holder">
            <div class="image-holder">
                <img src="https://images.pexels.com/photos/3338681/pexels-photo-3338681.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>
            <div class="signup-form">
                <h2>Login to your Account</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <p class="text-center txt">Don't have an account? <a href="/signup.php">Signup</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>