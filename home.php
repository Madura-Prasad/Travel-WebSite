<?php
include_once("Inc/header.php");
?>


<link rel="stylesheet" href="CSS/home.css">
<section>
    <!-- video -->
    <video src="IMG/Home/Video.m4v" autoplay="" muted="" loop=""></video>
</section>


<div class="main">
    <div class="head">
        <!-- introduction -->
        <h1>Welcome to RoadTrip Plan – Your Partner in Luxury Holidays to Sri Lanka</h1>
        <h3>Truly a Magnificent Luxury Travel Experience</h3>
        <img src="IMG/Home/head.png" alt="Img Not Found" class="headimg">
        <p class="main3">Sri Lanka is a country that never ceases to fascinate. Astonishment, astonishment, and amazement are just a few of the feelings associated with tourism on this idyllic island. Combine this with rich and magnificent accommodations, beautiful and unparalleled levels of food, and you have a true luxury experience only the wealthy can have. </p>
        <p class="main4">Explore, experience, and enjoy the most incredible places while taking in the glory of Sri Lanka's most distinctive socio-cultural and historical splendor with Lanka Travel Plan, a luxury tour operator that promises a genuinely premium luxury travel experience in Sri Lanka.</p>
        <!-- about us button link -->
        <a href="aboutus.php"><button class="more">More</button></a>
    </div>

    <div class="catergory">
        <img src="IMG/texture.jpg" alt="" class="catergoryimg">



        <!-- categories -->
        <table class="table">
            <tr>
                <td>
                    <a href="tours.php"><img class="cater-img" src="IMG/Home/day-Tours.jpg" alt="Img Not Found"></a>
                </td>
                <td>
                    <a href="luxurysuv.php"><img class="cater-img" src="IMG/Home/Luxury-SUV-Tours.jpg" alt="Img Not Found"></a>
                </td>
                <td>
                    <a href="luxutrytour.php"><img class="cater-img" src="IMG/Home/Luxury-Tours.jpg" alt="Img Not Found"></a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="treekingtour.php"><img class="cater-img" src="IMG/Home/Trekking-Tours.jpg" alt="Img Not Found"></a>
                </td>
                <td>
                    <a href="photographytour.php"><img class="cater-img" src="IMG/Home/Photography-Tour.jpg" alt="Img Not Found"></a>
                </td>
            </tr>
        </table>

        <div class="trip">
            <h2>Plan your next luxury tour with</h2>
            <h1>RoadTrip Travel Plan</h1>
            <div class="hr"></div>
        </div>
        <div class="cat">
            <div class="txta">
                <tr>
                    <td>
                        <img class="image" src="IMG/Home/2.png" alt="">
                        <h3>Bespoke Luxury</h3>
                        <p>We offer highly personalized trips that are determined by your needs, inclinations, and goals, combining our 15+ years of worldwide exposure and local experience with considerable study and preparation.</p>
                    </td>
                </tr>
            </div>

            <br><br>
            <div class="txtb">
                <tr>
                    <td>
                        <img class="image" src="IMG/Home/1.png" alt="">
                        <h3>First-hand Knowledge</h3>
                        <p>Through years of first-hand experience, we expose the spirit of each Sri Lankan location.</p>
                    </td>
                </tr>
            </div>
            <br><br>
            <div class="txtc">
                <tr>
                    <td>
                        <img class="image" src="IMG/Home/4.png" alt="">
                        <h3>Flexibility</h3>
                        <p>We're adaptable and know how to make planning simple for our clients. We can assist you if you have no clue where to go on vacation.</p>
                    </td>
                </tr>
            </div>
            <br><br>
            <div class="txtd">
                <tr>
                    <td>
                        <img class="image" src="IMG/Home/3.png" alt="">
                        <h3>Round the Clock Service</h3>
                        <p>Luxury service starts the minute you inquire, continues through the design and booking process, and continues long after you return from your trip.</p>
                    </td>
                </tr>
            </div>
        </div>
        <img class="cat-img" src="IMG/home/mm.jpg" alt="">
    </div>
</div>

<!-- What Client Says -->
<div class="slideshow-container">
    <div class="test">
        <h2> <i>What Clients Says...</i> </h2>
    </div>

    <div class="mySlides">
        <q>Dushan is a great way to visit Sri Lanka, but it's much better if you have Dushan as your tour guide. He was always ready to follow us and help in our wishes and needs during our 5-day trip. We enjoyed the wonderful nature, the culture, the food and local aspects.</q>
        <p class="author">Shuro - Moscow, Russia</p>
        <br>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
    </div>

    <div class="mySlides">
        <q>Dushan made our trip perfect. He was extremely helpful, kind about everything: accomodation, food, tickets, interesting spots and what not. If i visit Lanka again i would choose only Dushan as my guide and now my friend.</q>
        <p class="author">Ernest Hemingway</p>
        <br>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
        
    </div>

    <div class="mySlides">
        <q>Our trip was made wonderful thanks to Dushan. He was incredibly helpful and courteous in regards to everything: lodging, food, tickets, fascinating places, and so on. If I return to Sri Lanka, I will only use Dushan as my guide and now buddy.</q>
        <p class="author">Thomas </p>
        <br>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>



<script>
    let video = document.querySelector('video');
    window.addEventListener('scroll', function() {
        let value = 1 + window.scrollY / -1000;
        video.style.opacity = value;
    })
</script>
<?php
include_once("Inc/footer.php");
?>