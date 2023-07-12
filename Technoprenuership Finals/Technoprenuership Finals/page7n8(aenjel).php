<?php 
    include 'shared/header.php';
?>
    <style>
        * {
            margin: 0;
            padding: 0;
            color: #8B0D0D;
        }

        #more {
            display: none;
        }

        #see {
            display: none;
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
            font-family: 'DM Sans', sans-serif;
            font-weight: bolder;
        }

        .logo {
            margin: 0;
            margin-right: 20px;
            padding: 0;
            height: 65px;
            border: none;
        }

        .photoContainer {
            margin: 0;
            padding: 0;
            background-color: white;
            text-align: center;
            font-family: 'DM Sans', sans-serif;
            padding: 20px;
            height: 120px;
            width: 120px;
            border-radius: 25px;
        }

        .wrapper {
            margin: 2px 10px;
            width: 70%;
        }

        img {
            max-width: 400px;
            float: left;
            border: 2px solid #8B0D0D;
            border-radius: 10px;
            margin-right: 50px;
        }

        .text-box h2 {
            font-family: 'DM Sans', sans-serif;
            font-weight: bolder;
            font-size: 40px;
            margin-bottom: 10px;
            text-decoration: underline;
        }

        .text-box p {
            font-family: 'DM Sans', sans-serif;
            font-weight: light;
            font-size: 20px;
            text-align: justify;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            height: 40px;
        }

        .addEventButton {
            display: inline-block;
            padding: 15px 25px;
            font-size: 18px;
            font-family: 'DM Sans', sans-serif;
            font-weight: bolder;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #8B0D0D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 6px #999;
        }

        .addEventButton:hover {
            background-color: #FFEB60
        }

        .addEventButton:active {
            background-color: #FFF5BF;
            box-shadow: 0 1px #666;
            transform: translateY(4px);
        }

        .left {
            position: absolute;
            left: 30px;
            width: 150px;
            height: auto;
            border: none;
            background: none;
            border-radius: 25px;
            padding: 10px;
        }

        .left2 {
            position: absolute;
            top: 500px;
            left: 40px;
            width: 150px;
            border: none;
            background: none;
            border-radius: 25px;
            padding: 10px;
        }

        .orgName {
            position: absolute;
            top: 125px;
            right: 30px;
            width: 78%;
            border: none;
            background-color: white;
            border-radius: 50px;
            padding: 10px;
            font-family: 'DM Sans', sans-serif;
            text-align: center;
            font-size: 24px;
            font-weight: bolder;
            color: #8b0d0d5d;
        }

        .futureEventText {
            position: absolute;
            top: 175px;
            right: 30px;
            width: 78%;
            border: none;
            background: none;
            border-radius: 50px;
            padding: 10px;
            font-family: 'DM Sans', sans-serif;
            text-align: left;
            font-size: 24px;
            font-weight: bolder;
            color: #8b0d0d;
        }

        .pastEventText {
            display: flex;
            margin-left: 250px;
            top: 360px;
            right: 30px;
            width: 78%;
            border: none;
            background: none;
            border-radius: 50px;
            padding: 10px;
            font-family: 'DM Sans', sans-serif;
            text-align: left;
            font-size: 24px;
            font-weight: bolder;
            color: #8b0d0d;
        }

        .EventContainer {
            width: 1040px;
            min-height: 100px;
            background-color: white;
            border-radius: 25px;
            margin-right: 35px;
            margin-top: 120px;
            padding: 20px;
            display: flexbox;
            float: right;
            border: none;
            letter-spacing: 2px;
            text-align: justify;
        }

        .pastEventContainer {
            width: 1040px;
            min-height: 100px;
            background-color: white;
            border-radius: 25px;
            margin-right: 35px;
            margin-bottom: 30px;
            padding: 20px;
            display: flexbox;
            float: right;
            border: none;
        }

        .EventTitle {
            font-family: 'DM Sans', sans-serif;
            text-align: left;
            font-size: 24px;
            font-weight: bolder;
            color: #8b0d0d;
            text-decoration: underline;
            margin-left: 130px;

        }

        .EventDetails {
            display: flex;
            align-items: center;
            gap: 6rem;
            flex-wrap: wrap;
            font-family: 'DM Sans', sans-serif;
            padding-top: 12px;
            text-align: left;
            font-size: 18px;
            font-weight: light;
            color: #8b0d0d;
            margin-left: 130px;
        }

        .eventPubMat {
            position: absolute;
            padding: 0;
            margin: 0;
            width: 100px;
            border: none;
            float: left;
            background-color: #8B0D0D;
        }

        .seeMoreButton {
            border-radius: 25px;
            float: left;
            background: none;
            border: none;
            color: #8B0D0D;
            text-align: center;
            font-size: 16px;
            font-family: 'DM Sans', sans-serif;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
        }

        .seeMoreButton span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .seeMoreButton span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .seeMoreButton:hover span {
            padding-right: 25px;
            color: #D89B00;
        }

        .seeMoreButton:hover span:after {
            opacity: 1;
            right: 0;
        }

        .seeMoreButton:active {
            background-color: #D89B00;
        }

        button {
            background-color: #8B0D0D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
            box-shadow: grey;
        }

        button:active {
            opacity: 1;
            background-color: #8B0D0D;
            box-shadow: grey;
        }

        .cancelbtn,
        .deletebtn {
            float: left;
            width: 50%;
        }

        .cancelbtn {
            background: none;
            color: #D89B00;
        }

        .cancelbtn:hover {
            background: none;
            color: #8B0D0D;
            text-decoration: underline;
        }

        .deletebtn {
            background-color: #f44336;
        }

        .container {
            padding: 16px;
            text-align: center;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background: none;
            padding-top: 100px;
        }

        .modal-content {
            background-color: white;
            margin: 5% auto 15% auto;
            border: 1px solid #8B0D0D;
            border-radius: 25px;
            width: 80%;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bolder;
            color: #8B0D0D;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        @media screen and (max-width: 300px) {

            .cancelbtn,
            .deletebtn {
                width: 50%;
            }
        }
    </style>

</head>

<body>
    <div class="navbar">
        <img src="logo.png" class="logo">
        Webbit
    </div>

    <div class="left">
        <div class="photoContainer">
            Note: Your image must be below 10MB and only in JPEG, or PNG.
        </div>

        <form action="/action_page.php">
            <input type="file" id="myFile" name="filename" style="margin-top: 20px;">

        </form>
    </div>

    <div class="left2">
        <btn class="addEventButton" onclick="location.href='page9(jayvee).html'">Add Event</btn>

    </div>

    <div class="orgName">
        Organization's Name
    </div>

    <div class="futureEventText">
        Future Event/s:
    </div>

    <div class="EventContainer">
        <img src="logo.png" class="eventPubMat">
        <div class="EventTitle">
            TUKLAS HACKATHON
        </div>
        <div class="EventDetails">
            <p>𝗔𝗿𝗲 𝘆𝗼𝘂 𝗿𝗲𝗮𝗱𝘆 𝘁𝗼 𝗯𝗲 𝗽𝗮𝗿𝘁 𝗼𝗳 𝘁𝗵𝗲 𝗦𝗼𝗹𝘂𝘁𝗶𝗼𝗻?

                This is for you 𝐏𝐔𝐏𝐒𝐓𝐁 𝐒𝐭𝐮𝐝𝐞𝐧𝐭𝐬!<span id="dots">...</span><span id="more">
                </br>
                    We are delighted to
                    announce that 𝗧𝗨𝗞𝗟𝗔𝗦 𝗛𝗮𝗰𝗸𝗮𝘁𝗵𝗼𝗻 is now open for registration!
                </br>
                    Take the Challenge, reap the rewards, and get ready to create your most feasible solution that will
                    solve
                    the 𝗨𝗻𝗶𝘁𝗲𝗱 𝗡𝗮𝘁𝗶𝗼𝗻𝘀 𝟭𝟳 𝗦𝘂𝘀𝘁𝗮𝗶𝗻𝗮𝗯𝗹𝗲 𝗗𝗲𝘃𝗲𝗹𝗼𝗽𝗺𝗲𝗻𝘁 𝗚𝗼𝗮𝗹𝘀.
                </br>
                    Expand your skills and connect with us by joining our whole day 𝐟𝐚𝐜𝐞 𝐭𝐨 𝐟𝐚𝐜𝐞
                    𝐈𝐧𝐟𝐨-𝐬𝐞𝐬𝐬𝐢𝐨𝐧 𝐚𝐧𝐝 𝐒𝐨𝐥𝐮𝐭𝐢𝐨𝐧 𝐃𝐞𝐬𝐢𝐠𝐧 𝐃𝐚𝐲 𝐭𝐡𝐢𝐬 𝐜𝐨𝐦𝐢𝐧𝐠 𝐉𝐮𝐧𝐞
                    𝟐𝟔,
                    𝟐𝟎𝟐𝟑.
                </br>
                    Mark your calendars and register here:
                </br>
                    TUKLAS HACKATHON
                    TUKLAS HACKATHON
                    <button onclick="document.getElementById('id01').style.display='block'">Delete Event</button>

                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">×</span>
                        <form class="modal-content" action="/action_page.php">
                            <div class="container">
                                <h1>Delete Event</h1>
                                <p>Are you sure you want to delete this event?</p>

                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="deletebtn">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </span></p>
            <button class="seeMoreButton" onclick="getFuture()" id="myBtn"><span>Read More</span></button>

        </div>

    </div>

    <div class="pastEventText">
        Previous Event/s:
    </div>

    <div class="pastEventContainer">
        <img src="logo.png" class="eventPubMat">
        <div class="EventTitle">
            INFO SESSION
        </div>

        <div class="EventDetails">
            <p>𝗔𝗿𝗲 𝘆𝗼𝘂 𝗿𝗲𝗮𝗱𝘆 𝘁𝗼 𝗯𝗲 𝗽𝗮𝗿𝘁 𝗼𝗳 𝘁𝗵𝗲 𝗦𝗼𝗹𝘂𝘁𝗶𝗼𝗻?

                This is for you 𝐏𝐔𝐏𝐒𝐓𝐁 𝐒𝐭𝐮𝐝𝐞𝐧𝐭𝐬!<span id="dots1">...</span><span id="see">
                </br>    
                    We are delighted to
                    announce that 𝗧𝗨𝗞𝗟𝗔𝗦 𝗛𝗮𝗰𝗸𝗮𝘁𝗵𝗼𝗻 is now open for registration!
                </br>
                    Take the Challenge, reap the rewards, and get ready to create your most feasible solution that will
                    solve
                    the 𝗨𝗻𝗶𝘁𝗲𝗱 𝗡𝗮𝘁𝗶𝗼𝗻𝘀 𝟭𝟳 𝗦𝘂𝘀𝘁𝗮𝗶𝗻𝗮𝗯𝗹𝗲 𝗗𝗲𝘃𝗲𝗹𝗼𝗽𝗺𝗲𝗻𝘁 𝗚𝗼𝗮𝗹𝘀.
                </br>
                    Expand your skills and connect with us by joining our whole day 𝐟𝐚𝐜𝐞 𝐭𝐨 𝐟𝐚𝐜𝐞
                    𝐈𝐧𝐟𝐨-𝐬𝐞𝐬𝐬𝐢𝐨𝐧 𝐚𝐧𝐝 𝐒𝐨𝐥𝐮𝐭𝐢𝐨𝐧 𝐃𝐞𝐬𝐢𝐠𝐧 𝐃𝐚𝐲 𝐭𝐡𝐢𝐬 𝐜𝐨𝐦𝐢𝐧𝐠 𝐉𝐮𝐧𝐞
                    𝟐𝟔,
                    𝟐𝟎𝟐𝟑.
                </br>
                    Mark your calendars and register here:
                </br>
                    TUKLAS HACKATHON
                    TUKLAS HACKATHON
                    <button onclick="document.getElementById('id02').style.display='block'">Delete Event</button>

                    <div id="id02" class="modal">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
                        <form class="modal-content" action="/action_page.php">
                            <div class="container">
                                <h1>Delete Event</h1>
                                <p>Are you sure you want to delete this event?</p>
                
                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id02').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <button type="button" onclick="document.getElementById('id02').style.display='none'"
                                        class="deletebtn">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </span></p>
            <button class="seeMoreButton" onclick="getPast()" id="myBtn1"><span>Read More</span></button>
        </div>

    </div>



    <script>
        function getFuture() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }

        function getPast() {
            var dots1 = document.getElementById("dots1");
            var moreText1 = document.getElementById("see");
            var btnText1 = document.getElementById("myBtn1");

            if (dots1.style.display === "none") {
                dots1.style.display = "inline";
                btnText1.innerHTML = "Read more";
                moreText1.style.display = "none";
            } else {
                dots1.style.display = "none";
                btnText1.innerHTML = "Read less";
                moreText1.style.display = "inline";
            }
        }

        var modal = document.getElementById('id01');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal = document.getElementById('id02');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>