<?php 
    include 'shared/header.php';
?>
  <style>
    body {
      font-family: 'DM Sans', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1e4b3;
    }
    
    .container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      max-height: 100%;
    }
    
    .logopic {
      display: flex;
      align-items: center;
    }
    
    .logopic img {
      width: 350px;
      height: 350px;
      margin-right: 0px;
    }
    
    .logopic .webbit-title {
      font-size: 600%;
      font-weight: bold;
      margin-right: 5%;
      color: #8B0D0D;
    }
    
    .buttons {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      height: 100px;
      top: 150px;
      border-bottom-width: 100vh;
    }
    
    .button {
      margin-top: 10px;
      padding: 10px 90px;
      background-color: #8B0D0D;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;  
    }
    
    .button:hover {
      background-color: #FFEB60;
    }
    
    .image-container {
      display: flex;
      align-items: center;
      background-color: #ffffff;
      padding: 20px;
    }
    
    .image-container img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      background-color: #ffffff;
    }
    
    .image-title {
      font-size: 24px;
      font-weight: bold;
      margin-left: 10px;
      color: #8B0D0D;
    }

    .text {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      height: 150px;
      top: 200px;
      border-bottom-width: 50vh;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logopic">
      <img src="logo.png" alt="Logo">
      <div class="webbit-title">Webbit</div>
    </div>

    <div class="buttons">
      <div class="text">
        <div class="follow">Please click your destination below</div>
      </div>
      <a href="page2 (vj).html" class="button">Guest</a>
      <a href="Page 5 (axl).html" class="button">Admin</a>
    </div>
  </div>

</body>
</html>
