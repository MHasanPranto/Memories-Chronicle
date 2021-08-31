<?php 
session_start();
include "./admin/includes/connection.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Registration</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/user login registration style.css">

    <script src="./js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="color"></div>
      <div class="color"></div>
      <div class="color"></div>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="container_inner">
          <div class="form login">
            <h2>Login Form</h2>
            <form action="./logincheck.php" id="form" method="POST">
              <div class="inputBox">
                <input type="text" name="lemail" id="email" placeholder="Email" />
              </div>

              <div class="inputBox">
                <input type="password" name="lpass" id="password" placeholder="Password" />
              </div>

              <div class="inputBox">
                <button class="btn-praimary" name="login">Login</button>
              </div>

              <p onclick="toggle()" class="togle">Register</p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container dark" id="reg">
      <div class="color"></div>
      <div class="color"></div>
      <div class="color"></div>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="container_inner">
          <div class="form regis">
            <h2>Registration Form</h2>
            <form action="./registrationcheck.php" ID= "register" method="POST" autocomplete="off" enctype="multipart/form-data">
              <div class="inputBox">
                <input type="text"  name="name" id="name" placeholder="Name" />
              </div>
              <div class="inputBox">
                <input type="text" name="email" id="email" placeholder="Email" />
              </div>
              <div class="inputBox">
                <input type="text"  name="number" id="number" placeholder="Number" />
              </div>
              <div class="inputBox">
                <input type="file"  name="p_image" id="p_image" placeholder="p_image" />
                <label for="p_image" class="p_image"><span class="choose_btn">Choose</span> <span id="file_label">Your profile Image</span> </label>
              </div>
              <div class="inputBox">
                <input type="password" name="password" id="password" placeholder="Password" />
              </div>

              <div class="inputBox">
                <input type="password"  name="cpassword" id="cpassword" placeholder="Confirm password" />
              </div>
              

              <div class="inputBox">
                <button class="btn-praimary" name="reg">Register</button>
              </div>

              <p onclick="toggle()" class="togle">Login</p>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      const reg = document.getElementById('reg');
      function toggle() {
        reg.classList.toggle('active');
      }

      $('document').ready(function(){
  
      var $file = $('#p_image'),
          $label = $file.next('label'),
          $labelText = $label.find('#file_label'),
          // $labelRemove = $('i.remove'),
          labelDefault = $labelText.text();
      
          
          $file.on('change', function(event){
            var fileName = $file.val().split( '\\' ).pop();
            if( fileName ){
              console.log($file)
              $labelText.text(fileName);
              
            }else{
              $labelText.text(labelDefault);
              
            }
          });
        })
    </script>
  </body>
</html>
