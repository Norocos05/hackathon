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
      background-color: #FFF39D;
    }
    .container{
        width: 350px;
        display: flex;
        flex-direction: column;
        padding: 0 15px 0 15px;  
    }
    .box{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
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
  
    span{
        color: #8B0D0D;
        font-size: small;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
    }
    .input-field .input{
        height: 45px;
        width: 90%;
        border: none;
        border-radius: 10px;
        color: #8B0D0D;
        font-size: 15px;
        padding: 0 0 0 45px;
        outline: none;
    }
    i{
        position: relative;
        top: -33px;
        left: 17px;
        color: #8B0D0D;
    }
    ::-webkit-input-placeholder{
        color: #8B0D0D;
    }
    .submit{
        border: none;
        border-radius: 10px;
        font-size: 15px;
        height: 45px;
        outline: none;
        width: 100%;
        color: #ffffff;
        background-color: #8B0D0D;
        cursor: pointer;
        transition: .3s ;
    }
    .submit:hover{
        box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
    }

    .container .register-link {
    font-size: 20px;
    text-align: center;
    margin-top: 20px;
    }
    .register-link p a {
    color: #8B0D0D;
    text-decoration: none;
    font-weight: 600;
    }
    .register-link p a:hover {
    text-decoration: underline;
    }
    
    </style>
    <body>
        <div class="container">
          <div class="logo">
            <img src="https://i.ibb.co/tDyDL2d/logo.png" alt="Logo">
            <div class="title">Webbit</div>
          </div>
        </div>
        
        <div class="box">
          <div class="container">
            <div class="top">
          </div>
          
              <div class="input-field">
                  <input type="text" class="input" placeholder="Username" id="">
                  <i class='bx bx-user' ></i>
              </div>
              <div class="input-field">
                  <input type="Password" class="input" placeholder="Password" id="">
                  <i class='bx bx-lock-alt'></i>
              </div>
              <div class="input-field">
                  <input type="submit" class="submit" value="Login" id="">
              </div>
              <div class="register-link"> 
                <p>Don't have an account?</p> 
                  <p><a href="page6 (vj).html">Sign Up</a></p>
              </div>
            </div>
          </div>
      </div>  
  
      </body>
</html>
