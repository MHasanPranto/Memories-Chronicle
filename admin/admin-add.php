<?php 
  ob_start();
  session_start();
  include "./includes/connection.php";
  $msg = "";
  if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO admin (email, name, username, password, user_type) VALUES ('$email', '$name', '$username', '$password', 'admin')";

    if($conn->query($sql) === TRUE){
      $msg = "Admin Added Sucessfully !";
    }
    else{
      echo "Error " . $sql . ' ' . $conn->connect_error;
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/admin-manage.css" />
    <!-- <link rel="stylesheet" href="./css/admin-login-style.css"> -->
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
      <?php
        include "./navbar.php"; 
      ?>

      <main>
      <div class="main__container">
        <h2>Admin management</h2>
        <div class="form-body">
          <form
          action="<?= $_SERVER['PHP_SELF']?>"
          autocomplete="off"
          method="POST"
          >
          <div class="form-div">
            
            <div class="title">Memories Chronicel</div>
            <div class="sub-title">
              Admin Recruitment Form
            </div>
            <div class="fields">
              <div class="name">                
                <input
                  type="name"
                  name="name"
                  class="name-input"
                  placeholder="Name"
                />
              </div>
              <div class="email">                
                <input
                  type="email"
                  name="email"
                  class="email-input"
                  placeholder="Email"
                />
              </div>
              <div class="username">                
                <input
                  type="username"
                  name="username"
                  class="user-input"
                  placeholder="Username"
                />
              </div>
              <div class="password">                
                <input
                  type="password"
                  name="password"
                  class="pass-input"
                  placeholder="Password"
                />
              </div>

              <h5 style="color:crimson; text-align: center;"><?php if($msg !== NULL){echo $msg;} ?></h5>
            </div>
            <button class="signin-button" name="login">Add</button>
          </div>
        </form>
      </div>
        
      </div>
      </main>   

      <?php
        include "./sidebar.php"; 
      ?>
    </div>

    <script src="./js/script.js"></script>
  </body>
</html>
