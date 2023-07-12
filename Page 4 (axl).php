<?php 
    include 'shared/header.php';
?>
<style>
    *{
        font-family: 'DM Sans' ,sans-serif;
    }
      
    body {
      margin: 0;
      padding: 0;
      background-color: #FFF5BF;
    }
    .container{
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 20px;
    }

    .bg p{
            text-align: center;
            font-size: 40px;
            padding: 5px;
            color: #8B0D0D;
    }

    .container h1{
      color: #8B0D0D;
      font-size: 30px;
    }

    .container h2{
      color: #8B0D0D;
      font-size: 20px;
    }

    .container h3{
      color: #8B0D0D;
      font-size: 20px;
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

    .info-container2 {
      position: relative;
      height: 280px;
      width: 280px;
      margin-bottom: 0px;
      margin-top: 0px;
      margin-left: 50px;
      margin-right: 50px;
      border-radius: 10px;
      overflow: hidden;
    }

    .info-image {
      width: 300px;
      height: 300px;
      background-color: #cf3232;
      margin-right: 20px;
      margin-left: 20px;
      border-radius: 20px; 
      overflow: hidden;
    }

    .info-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .signup {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      margin-top: 40px;
      margin-right: 500px;
    }

    .signup button {
      padding: 10px 20px;
      font-size: 24px;
      font-weight: bold;
      color: #FFFFFF;
      background-color: #8B0D0D;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    .signup button:hover {
      background-color: #FEDF00;
      box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
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
      border-radius: 10px;
      cursor: pointer;
    }

    .upload-container label:hover {
      background-color: #FEDF00;
      box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
    }

    ::-webkit-input-placeholder{
        color: #8B0D0D;
    }

    .additional-container {
      position: relative;
      height: 280px;
      width: 280px;
      margin-bottom: 0px;
      margin-top: 0px;
      margin-left: 50px;
      margin-right: 50px;
      border-radius: 10px;
      overflow: hidden;
    }

    .text-input1 {
      width: 90%;
      padding: 5px;
      font-size: 18px;
      border-radius: 10px; 
      overflow: hidden;
    }

    .container .register-link {
    font-size: 15px;
    text-align: center;
    margin-top: 5px;
    color:#B87979;
    align-items: flex-start;
    margin-left: 50px;
    margin-top: -10px;
    }

</style>

<body>

      <div class="container">
        <div class="logo">
          <img src="https://i.ibb.co/tDyDL2d/logo.png" alt="Logo">
          <div class="title">Webbit</div>
        </div>
      </div>
      
      <div class="bg">
        <p>Tuklas Hackathon Notification Form</p>
      </div>
      
    <div class="container">
      <div class="info-container">
        <div class="info-image">
          <img src="https://i.ibb.co/hs4wRr2/Add-Image.png" alt="Add-Image">
        </div>
      </div>
   

      <div class="info-container2">
        <div class="column">
          <p></p>
          <input type="text" class="text-input1" placeholder="Name">
        </div>
      
      <div class="column1>">
        <div class="column">
          <p></p>
          <input type="text" class="text-input1" placeholder="Email">
        </div>
      </div>
      
        <div class="column">
          <p></p>
          <input type="text" class="text-input1" placeholder="Affiliation">
        </div>

        <div class="column">
          <P></P>
          <input type="text" class="text-input1" placeholder="Course, Year & Section">
        </div>
      </div>



      <div class="additional-container">
        <div class="column">
          <p></p>
          <input type="text" class="text-input1" placeholder="Phone Number">
        </div>

        <h1>Notify me via:</h1>
        <h2><input type="checkbox" name="" id="check">
        <label for="check"> Email</label></h2>
        <h3><input type="checkbox" name="" id="check">
        <label for="check"> Phone Number</label></h3>
      </div>
    </div>


    <div class="upload-container">
        <input type="file" id="fileInput" />
        <label for="fileInput">Add File</label>
    </div>

    <div class="signup">
      <button>Notify Me!</button>
    </div>

    <div class="container">
        <div class="register-link"> 
            <p>Note: Your image must be below</p>
            <p>10MB and only in JPEG, or PNG.</p> 
        </div>
    </div>


</body>
</html>