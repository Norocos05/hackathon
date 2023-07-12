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

    .event-title {
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
      background-color: #FFFFff;
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
      height: 280px;
      width: 240px;
      margin-bottom: 0px;
      background-color: #FFFFff;
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
      <img src="logo.png" alt="Logo">
      <div class="title">Webbit</div>
    </div>
  </div>

  <div class="container">
    <div class="info-container">
      <div class="info-image">
        <img src="haka.png" alt="hakaimg">
      </div>
      <div class="info-columns">
        <div class="column">
          <div class="event-title">Event Title:</div>
          <input type="text" class="text-input" placeholder="Enter event title">
        </div>

        <div class="column">
          <p><b>Description</b></p>
          <p>Are your ready to be part of the solution?</p>
          <p>This is for you PUPSTB Students</p>
          <p>We are delighted to announce that TUKLAS HACKATON is now open for ragitration</p>
          <p>Take the challenge, reap the rewards, and get ready to create your most feasible solution that will solve the united nations 17 sustainable development goals.</p>
          <p>Expand your skill and connect with us by joining our whole day face to face information session and solution design day this coming June 26, 2023.</p>
          <p></p>

        </div>
      </div>

      <div class="additional-container">
        <div class="column">
          <p><b>Date</b></p>
          <input type="text" class="text-input1" placeholder="Enter date">
        </div>
      
      <div class="column1>">
        <div class="column">
          <p><b>Time</b></p>
          <input type="text" class="text-input1" placeholder="Enter time">
        </div>
      </div>
      
        <div class="column">
          <p><b>Venue</b></p>
          <input type="text" class="text-input1" placeholder="Enter ">
        </div>
      </div>
      
      
    </div>
  </div>

  <div class="upload-container">
    <input type="file" id="fileInput" />
    <label for="fileInput">Add File</label>
  </div>

  <div class="signup">
    <a href="page7n8(aenjel).html" class="button">Upload</a>
  </div>
</body>
</html>
