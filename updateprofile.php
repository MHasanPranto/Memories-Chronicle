<?php 
session_start();
include "./admin/includes/connection.php";
if(!isset($_SESSION['user_name'])){
  echo '<script type = "text/javascript"> alert(" OPPS!! It seems that you are not logged in. Please Log in First.") </script>';
  echo '<script type = "text/javascript"> window.location = "./login.php" </script>';
  // header("location:");
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM user WHERE id = {$id}";
  $result = $conn->query($sql);
  $data = $result->fetch_assoc();
  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Profile</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/updateprofile.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  </head>
  <body>
    <div class="transition transition-3 is-active"></div>
    <!-- ------------------------cursor---------------- -->
    <div id="cursor"></div>
    <span class="tail"></span>
    <!-- ------------------------cursor---------------- -->
    <form action="./include/profileupdate.php" method="POST" autocomplete="off" enctype="multipart/form-data">
      <div class="table">
        <div class="table-cell">
          <div class="modal">
            <div id="profile">
              <div class="dashes"></div>
              <label>Click to browse or drag an image here</label>
            </div>
            <div class="info">
              <div class="label">Name</div>
              <div class="editable">
                <input
                  name="name"
                  class="w3-input w3-animate-input"
                  type="text"
                  value="<?php echo $data['name'];?>"
                  style="width: 200px"
                />
              </div>
              <div class="label">Email</div>
              <div class="editable">
                <input
                  name="email"
                  class="w3-input w3-animate-input"
                  type="text"
                  value="<?php echo $data['email'];?>"
                  style="width: 200px"
                />
              </div>
              <div class="label">Number</div>
              <div class="editable">
                <input
                  name="number"
                  class="w3-input w3-animate-input"
                  type="text"
                  value="<?php echo $data['number'];?>"
                  style="width: 200px"
                />
              </div>
              <div class="label">Password</div>
              <div class="editable">
                <input
                  name="pass"
                  class="w3-input w3-animate-input"
                  type="text"
                  value="<?php echo $data['password'];?>"
                  style="width: 200px"
                />
              </div>
            </div>
            <input type="file" id="mediaFile" name="p_image" />
            <button type="submit">Done Editing</button>
            <button><a href="./profile.php">Cancel Editing</a></button>
          </div>
        </div>
      </div>
      
    </form>
    <div class="circle1"></div>
    <div class="circle2"></div>

    <script src="./js/courser.js"></script>
    <script src="./js/transition.js"></script>
    <script src="./js/updateprofile.js"></script>
  </body>
</html>
