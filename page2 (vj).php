<?php 
    include 'shared/header.php';
?>
    <style>
        * {
            margin: 0;
            padding: 0;
            color: #8B0D0D;
        }

        body {
            color: #8B0D0D;
            background: #FFF5BF;
        }

        .navbar {
            margin-top: 10px;
            margin-left: 10px;
            padding: 5px;
            margin-bottom: 10px;
            height: 80px;
            font-size: 60px;
            font-weight: bolder;
        }

        .navbar img {
            width: 100px;
            height: 100px;
        }

        .logo {
            margin: 0;
            margin-right: 20px;
            padding: 0;
            height: 65px;
            border: none;
            float: left;
        }

        .navbar h3 {
            float: left;
            font-size: 50px;
            margin-top: 20px;
        }

        .container {
            width: 50px;
            min-width: 250px;
            max-width: 350px;
            width: 100%;
            height: 110px;
            text-align: center;
            float: right;
        }

        form {
            border-radius: 50%;
            position: absolute;
        }

        input[type=text] {
            width: 200px;
            box-sizing: border-box;
            border: 2px solid #8B0D0D;
            border-radius: 50px;
            font-size: 24px;
            color: black;
            background-color: white;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
            width: 100%;
        }

        button {
            position: absolute;
            top: 12px;
            right: 0;
            width: 50px;
            height: 100%;
            border-radius: 50%;
            cursor: pointer;
            border: none;
            background: none;
            font-size: 24px;
        }

        /* Slideshow container */
        .slideshow-container {
            width: 100%;
            position: relative;
            margin: 0;
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }

        /* Make the images invisible by default */
        .Containers {
            float: left;
            margin: 0;
            padding: 0;
            width: 100%;
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        .slide-animation {
            animation-name: slide;
            animation-duration: 1s;
            animation-fill-mode: forwards;
        }

        .slide {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }

        #slide-1:target~.Containers {
            left: 0px;
        }

        #slide-2:target~.Containers {
            left: -500px;
        }

        #slide-3:target~.Containers {
            left: -1000px;
        }

        #slide-4:target~.Containers {
            left: -1500px;
        }

        @keyframes slide {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Worknumbering */
        .col {
            float: left;
            width: 33.33%;
            padding: 0px;
        }

        .col img {
            height: 300px;
        }

        /* The circles or bullets and indicators */
        .dots {
            cursor: pointer;
            height: 16px;
            width: 16px;
            margin: 0 3px;
            background-color: #acc;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.5s ease;
        }

        .enable,
        .dots:hover {
            background-color: #717161;
        }

        /* Faint animation */
        /* .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 5s;
          animation-name: fade;
          animation-duration: 2s;
        } */

        /* @-webkit-keyframes fade {
          from {opacity: .5}
          to {opacity: 3}
        }
        
        @keyframes fade {
          from {opacity: .5}
          to {opacity: 5}
        } */

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 130px;
            padding: 10px;
            margin-top: 20px;
            margin-left: 40px;
            height: 200px;
            border-radius: 20px;
        }

        .column img {
            width: 130px;
            height: 100px;
            border-radius: 20px;
        }

        p {
            margin-top: 10px;
            text-align: center;
            cursor: pointer;
        }

        h2 {
            margin-top: 15px;
            font-size: 15px;
            text-align: center;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        
    </style>
</head>

<body>
    <div class="navbar">
        <img src="https://i.ibb.co/FbWH2k3/354733136-1450445189055023-2242609763632934780-n-removebg-preview.png"
            class="logo">
        <h3>Webbit</h3>
        <div class="container">
            <form style="float: right;">
                <input type="text" name="search" placeholder="Search">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>

    <!-- Slideshow container -->
    <div class="slider">
        <span id="slide-1"></span>
        <span id="slide-2"></span>
        <span id="slide-3"></span>
        <span id="slide-4"></span>
    </div>
        <div class="slideshow-container fade row">
            <!-- Full images with numbers and message Info -->
            <div class="Containers" alt="slide">
                <div class="col">
                    <img src="https://i.ibb.co/jRMXVFn/339625897-768068291591173-5064789911831905464-n.jpg"
                        class="slide" style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/jRMXVFn/339625897-768068291591173-5064789911831905464-n.jpg"
                        class="slide" style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/jRMXVFn/339625897-768068291591173-5064789911831905464-n.jpg"
                        class="slide" style="width:100%;">
                </div>
            </div>

            <div class="Containers" alt="slide">
                <div class="col">
                    <img src="https://i.ibb.co/FW1KmHx/IMG-20230129-161556.jpg"  style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/FW1KmHx/IMG-20230129-161556.jpg"  style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/FW1KmHx/IMG-20230129-161556.jpg"  style="width:100%;">
                </div>
            </div>

            <div class="Containers row" alt="slide">
                <div class="col">
                    <img src="https://i.ibb.co/jRMXVFn/339625897-768068291591173-5064789911831905464-n.jpg"
                        class="slide" style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/jRMXVFn/339625897-768068291591173-5064789911831905464-n.jpg"
                        class="slide" style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/jRMXVFn/339625897-768068291591173-5064789911831905464-n.jpg"
                        class="slide" style="width:100%;">
                </div>
            </div>

            <div class="Containers row" alt="slide">
                <div class="col">
                    <img src="https://i.ibb.co/tpt1B5w/IMG-20230129-171606.jpg" style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/tpt1B5w/IMG-20230129-171606.jpg"  style="width:100%;">
                </div>
                <div class="col">
                    <img src="https://i.ibb.co/tpt1B5w/IMG-20230129-171606.jpg"  style="width:100%;">
                </div>
            </div>
        </div>
        <br>

        <!-- The circles/dots -->
        <div style="text-align:center">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
            <span class="dots" onclick="currentSlide(4)"></span>
        </div>


        <div class="row">
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
            <div class="column" style="background-color:white">
                <img src="https://i.ibb.co/bFwLt3j/359231487-982362046410686-2772333752583385136-n.jpg">
                <h2>TUKLAS HACKATON</h2>
                <a href="page3(aenjel).html"><p style="text-decoration: underline; color: #D89B00; font-weight: 700;">See More</p></a>
            </div>
        </div>

</body>

<script>
    var slidePosition = 0;
    SlideShow(slidePosition);

    // Forward/Back controls
    function plusSlides(n) {
        SlideShow(slidePosition += n);
    }

    // Image controls
    function currentSlide(n) {
        SlideShow(slidePosition = n - 1);
    }

    function SlideShow(n) {
        var i;
        var slides = document.getElementsByClassName("Containers");
        var circles = document.getElementsByClassName("dots");
        if (n >= slides.length) { slidePosition = 0 }
        if (n < 0) { slidePosition = slides.length - 1 }
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.remove("slide-animation"); // Remove slide-animation class from all slides
            slides[i].style.display = "none";
        }
        for (i = 0; i < circles.length; i++) {
            circles[i].className = circles[i].className.replace(" enable", "");
        }
        slides[slidePosition].style.display = "block";
        slides[slidePosition].classList.add("slide-animation"); // Add slide-animation class to current slide
        circles[slidePosition].className += " enable";
    }
</script>

</html>