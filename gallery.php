<?php
include_once("Inc/header.php");
?>



<link rel="stylesheet" href="CSS/gallery.css">

<div class="head">
    <img src="IMG/texture.jpg" alt="Image Not Found" srcset="">
    <div class="text9">
        <h2>Gallery</h2>
        <p>Take a look at the breathtaking beauty captured in still pictures.</p>
    </div>
</div>

<div class="main">
    <div class="full-img" id="fullimgbox">
        <img src="IMG/Gallery/1.jpg" alt="Image Not Found." id="fullimg">
        <span onclick="closefullimg()"><i class="fas fa-times-circle"></i></span>

    </div>
    <!-- header -->

    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('nature')"> Nature</button>
        <button class="btn" onclick="filterSelection('beach')"> Beach</button>
        <button class="btn" onclick="filterSelection('falls')"> Falls</button>
        <button class="btn" onclick="filterSelection('culture')"> Culture & History</button>
        <button class="btn" onclick="filterSelection('city')"> Cities</button>
        <button class="btn" onclick="filterSelection('luxury')"> Luxury & Suv Tours</button>
        <button class="btn" onclick="filterSelection('photo')"> Photography Tours</button>
    </div>



    <!-- Portfolio Gallery Grid -->
    <div class="row">
        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/1.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Bentota</h4>

            </div>
        </div>

        <div class="column falls">
            <div class="content">
                <img src="IMG/Gallery/2.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Elgin-Falls</h4>

            </div>
        </div>

        <div class="column culture">
            <div class="content">
                <img src="IMG/Gallery/3.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Jethawanaramaya</h4>

            </div>
        </div>

        <div class="column falls">
            <div class="content">
                <img src="IMG/Gallery/4.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Ramboda-Falls</h4>

            </div>
        </div>

        <div class="column city">
            <div class="content">
                <img src="IMG/Gallery/5.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Colombo</h4>

            </div>
        </div>

        <div class="column city">
            <div class="content">
                <img src="IMG/Gallery/6.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Colombo</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/7.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Bundala</h4>

            </div>
        </div>

        <div class="column culture">
            <div class="content">
                <img src="IMG/Gallery/8.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Polonnaruwa</h4>
            </div>
        </div>
        <div class="column luxury">
            <div class="content">
                <img src="IMG/Gallery/9.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Luxury & Suv Tours</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/10.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Gal-Oya</h4>
            </div>
        </div>

        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/11.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Hikkaduwa</h4>
            </div>
        </div>

        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/12.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Hikkaduwa</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/13.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Horton-Plains</h4>
            </div>
        </div>

        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/14.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>trincomalee</h4>
            </div>
        </div>

        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/15.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Unawatuna</h4>
            </div>
        </div>

        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/16.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Hikkaduwa Korel-Beach</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/17.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Maduru-Oya</h4>
            </div>
        </div>

        <div class="column culture">
            <div class="content">
                <img src="IMG/Gallery/18.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Anuradhapura</h4>
            </div>
        </div>

        <div class="column beach">
            <div class="content">
                <img src="IMG/Gallery/19.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Nila Weli</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/20.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Thanamalwila</h4>
            </div>
        </div>

        <div class="column culture">
            <div class="content">
                <img src="IMG/Gallery/21.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Aukana-State</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/22.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Udawalawe</h4>
            </div>
        </div>

        <div class="column falls">
            <div class="content">
                <img src="IMG/Gallery/23.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Bomuru-Ella</h4>
            </div>
        </div>

        <div class="column nature">
            <div class="content">
                <img src="IMG/Gallery/24.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Yala</h4>
            </div>
        </div>

        <div class="column culture">
            <div class="content">
                <img src="IMG/Gallery/25.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Nalanda-Gedige</h4>
            </div>
        </div>

        <div class="column culture">
            <div class="content">
                <img src="IMG/Gallery/26.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Sigiriya</h4>
            </div>
        </div>

        <div class="column luxury">
            <div class="content">
                <img src="IMG/Gallery/27.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Luxury & Suv Tours</h4>
            </div>
        </div>

        <div class="column luxury">
            <div class="content">
                <img src="IMG/Gallery/28.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Luxury & Suv Tours</h4>
            </div>
        </div>

        <div class="column photo">
            <div class="content">
                <img src="IMG/Gallery/29.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Photography-Tours</h4>
            </div>
        </div>

        <div class="column falls">
            <div class="content">
                <img src="IMG/Gallery/30.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Bopath-Ella</h4>
            </div>
        </div>

        <div class="column falls">
            <div class="content">
                <img src="IMG/Gallery/31.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Sera-Ella Falls</h4>
            </div>
        </div>

        <div class="column falls">
            <div class="content">
                <img src="IMG/Gallery/32.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>St.Claire's-Falls</h4>
            </div>
        </div>

        <div class="column luxury">
            <div class="content">
                <img src="IMG/Gallery/33.jpg" style="width:100%" onclick="openfullimg(this.src)">
                <h4>Luxury & Suv Tours</h4>
            </div>
        </div>

        <!-- END GRID -->
    </div>

    <!-- END MAIN -->
</div>


<script>
    var fullimgbox = document.getElementById("fullimgbox");
    var fullimg = document.getElementById("fullimg");

    function openfullimg(pic) {
        fullimgbox.style.display = "flex";
        fullimg.src = pic;
    }


    function closefullimg() {
        fullimgbox.style.display = "none";
    }


    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>




<?php
include_once("Inc/footer.php");
?>