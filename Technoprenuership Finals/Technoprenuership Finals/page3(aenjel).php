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

        input[type=text] {
            width: 200px;
            box-sizing: border-box;
            border: 2px solid #8B0D0D;
            border-radius: 50px;
            font-size: 24px;
            background-color: white;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        .container {
            width: 50px;
            min-width: 250px;
            max-width: 350px;
            width: 100%;
            height: 180px;
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

        button i {
            color: #8B0D0D;
        }

        button:hover i {
            color: #FFEB60;
        }

        .eventContainer {
            margin: 20px;
            padding: 20px;
            background-color: white;
            height: 500px;
            border-radius: 10px;
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

        .JoinButton {
            display: inline-block;
            padding: 15px 25px;
            font-size: 24px;
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

        .JoinButton:hover {
            background-color: #FFEB60
        }

        .JoinButton:active {
            background-color: #FFF5BF;
            box-shadow: 0 1px #666;
            transform: translateY(4px);
        }
    </style>

</head>

<body>
    <div class="navbar">
        <img src="logo.png" class="logo">
        Webbit
        <div class="container">
            <form style="float: right;" action="/action_page.php">
                <input type="text" name="search" placeholder="Search">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>

    <div class="eventContainer">
        <div class="wrapper">
            <img
                src="haka.png">

            <div class="text-box">
                <h2>TUKLAS HACKATHON</h2>
                <p>
                    𝗔𝗿𝗲 𝘆𝗼𝘂 𝗿𝗲𝗮𝗱𝘆 𝘁𝗼 𝗯𝗲 𝗽𝗮𝗿𝘁 𝗼𝗳 𝘁𝗵𝗲 𝗦𝗼𝗹𝘂𝘁𝗶𝗼𝗻?
                    </br>
                    This is for you 𝐏𝐔𝐏𝐒𝐓𝐁 𝐒𝐭𝐮𝐝𝐞𝐧𝐭𝐬!
                    </br>
                    We are delighted to announce that 𝗧𝗨𝗞𝗟𝗔𝗦 𝗛𝗮𝗰𝗸𝗮𝘁𝗵𝗼𝗻 is now open for registration!
                    </br>
                    Take the Challenge, reap the rewards, and get ready to create your most feasible solution that will
                    solve the 𝗨𝗻𝗶𝘁𝗲𝗱 𝗡𝗮𝘁𝗶𝗼𝗻𝘀 𝟭𝟳 𝗦𝘂𝘀𝘁𝗮𝗶𝗻𝗮𝗯𝗹𝗲 𝗗𝗲𝘃𝗲𝗹𝗼𝗽𝗺𝗲𝗻𝘁 𝗚𝗼𝗮𝗹𝘀.
                    </br>
                    Expand your skills and connect with us by joining our whole day 𝐟𝐚𝐜𝐞 𝐭𝐨 𝐟𝐚𝐜𝐞
                    𝐈𝐧𝐟𝐨-𝐬𝐞𝐬𝐬𝐢𝐨𝐧 𝐚𝐧𝐝 𝐒𝐨𝐥𝐮𝐭𝐢𝐨𝐧 𝐃𝐞𝐬𝐢𝐠𝐧 𝐃𝐚𝐲 𝐭𝐡𝐢𝐬 𝐜𝐨𝐦𝐢𝐧𝐠 𝐉𝐮𝐧𝐞
                    𝟐𝟔,
                    𝟐𝟎𝟐𝟑.

                    Interested?
                </p>
            </div>

        </div>

        <div class="center">
            <btn class="JoinButton" onclick="location.href='Page 4 (axl).html'">Join Now</btn>
        </div>

    </div>

    



</body>

</html>