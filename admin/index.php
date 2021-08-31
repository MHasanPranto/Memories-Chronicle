<?php 
  ob_start();
  session_start();
  include "./includes/connection.php";

  if(!isset($_SESSION['admin-username'])){
    header("location:./admin-login.php");
  }
  //  || $_SESSION['role'] != "super-admin" || $_SESSION['role'] != "admin"
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"  />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
      <?php
        include "./navbar.php"; 
      ?>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE SURU -->

          <div class="main__title">
            <img src="./assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>Memories Chronicel</h1>
              <p>Welcome <span style="color: crimson;"><?php echo $_SESSION['name'];?></span> to your dashboard</p>
            </div>
          </div>

          <!-- MAIN TITLE SES -->

          <!-- MAIN CARDS SURU -->


          <div class="main__cards">
            <div class="card">
              <i
                class="fas fa-users fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Clints</p>
                <?php
                $sql = "SELECT * FROM user";
                $result = $conn->query($sql);
                $clientnum = $result->num_rows;
                ?>
                <span class="font-bold text-title"><?php echo $clientnum ?></span>
              </div>
            </div>

            <div class="card">
              <i class="fas fa-dollar-sign fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Total Cradit</p>
                <?php
                $sql2 = "SELECT SUM(paid) AS turnover, COUNT(paid) AS enum FROM turnover";
                $result2 = $conn->query($sql2);
                $row = $result2->fetch_assoc();
                ?>
                <span class="font-bold text-title"><?php echo $row['turnover'] ?> ৳</span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-user-friends fa-2x text-lightblue"
                aria-hidden="true"
              ></i>

              <div class="card_inner">
                <p class="text-primary-p">Number of Admins</p>
                <?php
                $sql3 = "SELECT * FROM admin";
                $result3 = $conn->query($sql3);
                $adminnum = $result3->num_rows;
                ?>
                <span class="font-bold text-title"><?php echo $adminnum ?></span>
              </div>
            </div>

            <div class="card">
              <i
                class="fas fa-calendar-check fa-2x text-lightblue"
                aria-hidden="true"
              ></i>

              <div class="card_inner">
                <p class="text-primary-p">Number of Completed Event</p>                
                <span class="font-bold text-title"><?php echo $row['enum'] ?></span>
              </div>
            </div>

            
          <!-- MAIN CARDS SES -->
          <h5></h5>
        </div>
      </main>

      <?php
        include "./sidebar.php"; 
      ?>
    </div>
    
    <script src="./js/script.js"></script>
  </body>
</html>
