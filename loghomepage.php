<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to RoadTrip Sri-Lanka Official Website</title>
    <link rel="icon" href="IMG/logo.png">
    <link rel="stylesheet" href="CSS/loghomepage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>
        body {
            background-color: #6b705c;
            width: 100%;
            height: 200vh;
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



    <!--slideshow-->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="IMG/Log Home Page/1.jpg" style="width:100%">
            <div class="text">Jungle Beach <br><br>
                <p>Unawatuna is a coastal town in Galle district of Sri Lanka. It is known for its beach and corals and is a major tourist attraction in the country.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="IMG/Log Home Page/2.jpg" style="width:100%">
            <div class="text">Galle Dutch <br><br>
                <p>Galle Fort in the Bay of Galle on the southwest coast of Sri Lanka was built first in 1588 by the Portuguese.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="IMG/Log Home Page/3.jpg" style="width:100%">
            <div class="text">Sigiriya <br><br>
                <p>Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="IMG/Log Home Page/4.jpg" style="width:100%">
            <div class="text">Yala National Park <br><br>
                <p>The Yala National Park is the most visited and second largest national park in Sri Lanka.</p>
            </div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>



    <!--Introduction-->
    <div class="intro">
        <h1 class="main">Welcome to RoadTrip Sri Lanka, your one-stop shop for luxury vacations in Sri Lanka.</h1>
        <hr>
        <p class="main2">An Exceptional Luxury Travel Experience</p>
        <p class="main3">Sri Lanka is a country that never ceases to fascinate. Astonishment, astonishment, and amazement are just a few of the feelings associated with tourism on this idyllic island. Combine this with rich and magnificent accommodations, beautiful and unparalleled levels of food, and you have a true luxury experience only the wealthy can have. </p>
        <p class="main4">Explore, experience, and enjoy the most incredible places while taking in the glory of Sri Lanka's most distinctive socio-cultural and historical splendor with Lanka Travel Plan, a luxury tour operator that promises a genuinely premium luxury travel experience in Sri Lanka.</p>

    </div>

    <footer>
        <div class="row">
            <div class="col">
                <img class="logofooter" src="IMG/logo.png" alt="">
                <p>Luxury tour operator road trip is a luxury tour operator with a commitment to deliver seamless and authentic travel experiences. Founded in the year 2002, for more than 19 years, we have provided extraordinary sightseeing experiences to many visitors to Sri Lankan destinations.</p>
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div>
                </h3>
                <p>153, Main Road,</p>
                <p>Dehiwala.</p>
                <p>Sri-Lanka</p>
                <p class="email-id">info@roadtripsrilanka.com</p>
                <p>+94 011-1234567</p>
            </div>
            <div class="col">
                <h3>Links<div class="underline"><span></span></div>
                </h3>
                <ul>
                    <li><a href="loghomepage.php">Home</a></li>
                    <li><a href="join.php">Join Us</a></li>

                </ul>
            </div>
            <div class="col">
                <div class="social-icons">
                    <h3>Social Media <div class="underline"><span></span></div>
                    </h3>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
                <div class="newsletter">
                    <h3>Subscribe Newsletter<div class="underline"><span></span></h3>
                    <input class="news" type="email" name="" id="" placeholder="Your Email Address" required>
                    <button class="newsbtn">Subscribe</button>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright <span> RoadTrip Sri-Lanka. </span> &#169; 2021 - All Rights Reserved.</p>
        <p class="copyright">Website designed and developed by <span> Madura Prasad.</span></p>
    </footer>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 10000); // Change image every 10 seconds
        }
    </script>
</body>

</html>