<?php 
    include 'shared/header.php';
?>
  <style>
    body {
      font-family: 'DM Sans', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #FFF39D;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 20px;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      width: 100px;
      height: 100px;
      margin-right: -10px;
      margin-top: -10px;
    }

    .logo .title {
      font-size: 34px;
      font-weight: bold;
      color: #8B0D0D;
      margin-top: -10px;
    }

    .info-container {
      display: flex;
      align-items: flex-start;
      margin-left: 10px;
      margin-top: -30px;
      border-radius: 20px; 
      overflow: hidden;
    }

    .info-image {
      width: 300px;
      height: 300px;
      background-color: #cf3232;
      margin-right: 15px;
      border-radius: 20px; 
      overflow: hidden;
    }

    .info-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .info-columns {
      display: flex;
      flex-direction: column;
      justify-content: space-between; 
      border-radius: 20px; 
      overflow: hidden;
      width: 55%;
    }

    .organ-name {
      font-weight: bold;
      font-size: 20px;
      margin-bottom: 5px;
      border-radius: 20px; 
      overflow: hidden;
    }

    .text-input {
      width: 95%;
      padding: 5px;
      font-size: 18px;
      border-radius: 20px; 
      overflow: hidden;
    }

    .column {
      padding: 10px;
      background-color: #FFFF;
      margin-bottom: 20px;
      border-radius: 20px; 
      overflow: hidden;
    }

    .column p {
      margin: 0;
    }

    .signup {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      margin-top: 40px;
      margin-right: 50px;
    }

    .signup .button {
      padding: 10px 20px;
      font-size: 24px;
      font-weight: bold;
      color: #FFFFFF;
      background-color: #8B0D0D;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .signup .button:hover {
      background-color: #FEDF00;
    }

    .upload-container {
      display: flex;
      align-items: center;
      margin-top: 10px;
      margin-left: 115px;
    }

    .upload-container input[type="file"] {
      display: none;
    }

    .upload-container label {
      padding: 10px 20px;
      font-size: 24px;
      font-weight: bold;
      color: #FFFFFF;
      background-color: #8B0D0D;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .upload-container label:hover {
      background-color: #FEDF00;
    }


    .additional-container {
      position: relative;
      height: 140px;
      width: 240px;
      margin-bottom: 0px;
      padding-top: 10px;
      margin-top: 0px;
      margin-left: 10px;
      margin-right: -10px;
      border-radius: 20px;
      overflow: hidden;
    }

    .text-input1 {
      width: 90%;
      padding: 5px;
      font-size: 18px;
      border-radius: 20px; 
      overflow: hidden;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="https://i.ibb.co/FbWH2k3/354733136-1450445189055023-2242609763632934780-n-removebg-preview.png" alt="Logo">
      <div class="title">Webbit</div>
    </div>
  </div>

  <div class="container">
    <div class="info-container">
      <div class="info-image">
        <img src="https://i.ibb.co/sRg6KBX/gdsc.jpg" alt="hakaimg">
      </div>
      <div class="info-columns">
        <div class="column">
          <input type="text" class="text-input" placeholder=" Organization's Name">
        </div>

        <div class="column" style="color: maroon">
          <p><b>Description</b></p>
          <p>Are your ready to be part of the solution?</p>
          <br>
          <p>This is for you PUPSTB Students</p>
          <br>
          <p>We are delighted to announce that TUKLAS HACKATON is now open for ragitration</p>
          <br>
          <p>Take the challenge, reap the rewards, and get ready to create your most feasible solution that will solve the united nations 17 sustainable development goals.</p>
          <br>
          <p>Expand your skill and connect with us by joining our whole day face to face information session and solution design day this coming June 26, 2023.</p>
          <br>
          <p>Mark your calendars and register here:</p>
          <p style="text-decoration: underline; color: maroon; font-weight: 700; cursor: pointer;">TUKLAS HACKATON</p>
          <p style="text-decoration: underline; color: maroon; font-weight: 700; cursor: pointer;">TUKLAS HACKATON</p>

        </div>
      </div>

      <div class="additional-container">
        <div class="column">
          <input type="text" class="text-input1" placeholder=" Email">
        </div>
      
      <div class="column1>">
        <div class="column">
          <input type="text" class="text-input1" placeholder=" Mission">
        </div>
      </div>
      
      </div>
      
      
    </div>
  </div>

  <div class="upload-container">
    <input type="file" id="fileInput" />
    <label for="fileInput">Add File</label>
  </div>

  <div class="signup">
    <a href="page7n8(aenjel).html" class="button">Sign Up</a>
  </div>
</body>
</html>
