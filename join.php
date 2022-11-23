<?php

include("db.php");

$error = [];
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($name != "") {
        if (strlen($name) > 4) {
            if (strlen($password) > 6) {
                if ($password == $c_password) {
                    $password = md5($password);
                    $sql = "INSERT INTO users (name,email,password) VALUES ('" . $name . "','" . $email . "','" . $password . "')";
                    if ($conn->query($sql)) {
                        $success = true;
                    } else {
                        $error[] = "Server Error";
                    }
                } else {
                    $error[] = "Password not matched";
                }
            } else {
                $error[] = "Password too short";
            }
        } else {
            $error[] = "Invalid Name";
        }
    } else {
        $error[] = "Please type your Name";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to RoadTrip Sri-Lanka Official Website</title>
    <link rel="icon" href="IMG/logo.png">
    <link rel="stylesheet" href="CSS/join.css">
    <style>
        body {
            background-color: #6b705c;
            width: 100%;
            height: 100vh;
            background-position: center;
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <!--Header-->
    <header>
        <div class="navbar">
            <img src="IMG/logo.png" alt="Image Not Found" class="logo">
            <ul>
                <li><a href="loghomepage.php"><button class="log">Home</button></a></li>
                <li><a href="join.php"> <button class="log">join</button> </a></li>
            </ul>
        </div>
    </header>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button class="toggle-btn" type="button" onclick="login()">LOG IN</button>
                <button class="toggle-btn" type="button" onclick="register()">SIGN UP</button>
            </div>
            <!-- Login -->
            <form id="login" action="validation.php" method="POST" class="input-group">
                <!-- login body -->
                <?php
                if (!empty($errors)) {
                    foreach ($errors as $key => $value) {
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                <?php
                    }
                }
                ?>
                <input type="email" name="email" class="input-field" placeholder="Email Address" required>
                <input type="password" name="password" class="input-field" placeholder="Password" required>
                <br><br><br>
                <button class="submit-btn" name="login" type="submit">LOG IN</button>
            </form>
            <!-- Sign up -->
            <form id="register" action="" method="POST" class="input-group">
                <!-- error alert -->
                <?php
                if (!empty($error)) {
                    foreach ($error as $key => $value) {
                        # code...
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                    <?php
                    }
                }
                if (isset($success)) {
                    ?>
                    <div class="success">Register successfully</div>
                <?php
                }
                ?>
                <!-- sign up body -->
                <input type="text" name="name" class="input-field" placeholder="Name">
                <input type="email" name="email" class="input-field" required placeholder="Email Address">
                <input type="password" name="password" class="input-field" placeholder="Password">
                <input type="password" name="c_password" class="input-field" placeholder="Conform Password">
                <input type="checkbox" class="check-box" required><span class="remember">I agree to the Terms & Conditions.</span>
                <button class="submit-btn" name="signup" type="submit">SIGN UP</button>
            </form>
        </div>
    </div>

    <script>
        // Hover Effect
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "100px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>