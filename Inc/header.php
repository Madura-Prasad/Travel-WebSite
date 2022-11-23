<?php
session_start();
include("./db.php");
?>
<?php
if (!isset($_SESSION['user_logged'])) {
    header('Location:join.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadTrip Sri-Lanka Official Website</title>
    <link rel="icon" href="IMG/logo.png">
    <link rel="stylesheet" href="Inc/header.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>
        body {
            background-color: #6b705c;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <!--second Header-->
    <header class="head2">
        <div class="searc">
            <div class="time">
                <?php
                date_default_timezone_set('Asia/Dhaka');
                $time = date('Hi');
                if (($time >= "0600") && ($time <= "1200")) {
                    echo "Have a Good Morning!";
                } elseif (($time >= "1201") && ($time <= "1600")) {
                    echo "Have a Good Afternoon!";
                } elseif (($time >= "1601") && ($time <= "2100")) {
                    echo "Have a Good Evening!";
                } elseif (($time >= "2101") && ($time <= "2400")) {
                    echo "Have a Good Night!";
                } else {
                    echo "Have a Good Morning!";
                }
                ?>
            </div>
            <input class="search" type="text" placeholder="Search Here">
            <button class="searchbutt" type="search"><i class="fas fa-search"></i></button>
            <div id="timer"></div>
            <h3><a href="logout.php"> <button class="logout">Log Out</button> </a></h3>
        </div>

    </header>
    <header>
        <!-- first header -->
        <div class="navbar">
            <img src="IMG/logo.png" alt="Image Not Found" class="logo">
            <ul>
                <li><a href="home.php"><button class="log">Home</button></a></li>
                <li><a href="aboutus.php"> <button class="log">about us</button> </a></li>
                <li><a href="visitsrilanka.php"> <button class="log">visit sri-lanka</button> </a></li>
                <li><a href="tours.php"> <button class="log">tours</button> </a></li>
                <li><a href="FAQ.php"> <button class="log">faq</button> </a></li>
                <li><a href="gallery.php"> <button class="log">gallery</button> </a></li>
                <li><a href="contactus.php"> <button class="log">contact us</button> </a></li>
            </ul>
        </div>
    </header>
    

    <!-- scroll up button -->
    <button id="topbtn"><i class="fas fa-chevron-up"></i></button>

    <script>
        //sticky navigation Bar
        $(document).ready(function() {
            $('.navbar').sticky();
        });


        //scroll up button
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 40) {
                    $('#topbtn').fadeIn();
                } else {
                    $('#topbtn').fadeOut();
                }
            });
            $("#topbtn").click(function() {
                $('html,body').animate({
                    scrollTop: 0
                }, 800);
            });
        });



        // setTimeout(logoutUser, 5000);
        // function logoutUser() {
        // 	window.location = "logout.html";
        // }
        var timer = document.getElementById("timer");
        var duration = 210; // duration in seconds

        setInterval(updateTimer, 1000);

        function updateTimer() {
            duration--;
            if (duration < 1) {
                window.location = "logout.php";
            } else {
                timer.innerText = "User Inactivity Auto Logout In: " + formatTime(duration);
            }
        }

        window.addEventListener("mousemove", resetTimer);

        function resetTimer() {
            duration = 210;
        }

        function formatTime(timeInSeconds) {
            var minutes = Math.floor(timeInSeconds / 60);
            var seconds = timeInSeconds % 60;
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            return minutes + ":" + seconds;
        }
    </script>
