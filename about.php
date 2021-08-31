<?php 
session_start();
include "./admin/includes/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memories Chronicel</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />

    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  </head>
  <body>
    <div class="transition transition-2 is-active"></div>
    <!-- ------------------------cursor---------------- -->
    <div id="cursor"></div>
    <span class="tail"></span>
    <!-- ------------------------cursor---------------- -->
    <section class="header">
      <div class="container">
        <div class="navbar">
          <div class="menu">
            <!-- <h3 class="logo">Memories <span>Chronicel</span></h3> -->
            <img class="blogo" src="./images/logo2.png" alt="" />
            <div class="hamburger-menu" id="h-menu">
              <div class="bar"></div>
            </div>
          </div>
        </div>

        <div class="main-container">
          <div class="main">
            <header>
              <div class="about-wrapper">
                <div class="about">
                  <div class="inner-section">
                    <h1>About Us</h1>
                    <p class="text">
                      <strong
                        >We are a full service event design and planning
                        company. We also do day-of coordination for all events.
                        Specializing in maximizing your event budget so you get
                        the event of your dreams. Custom packages, package
                        pricing and hourly rate options are available.<br />

                        Call for details at 0123456789</strong
                      >
                    </p>
                    <div class="skills">
                      <button><a href="./contact.php">Contact Us</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          </div>

          <div class="shadow one"></div>
          <div class="shadow two"></div>
        </div>

        <div class="links">
          <ul>
            <li>
              <a href="./index.php" style="--i: 0.05s">Home</a>
            </li>
            <li>
              <a href="./about.php" style="--i: 0.1s">About Us</a>
            </li>
            <li>
              <a href="./services.php" style="--i: 0.15s">Services</a>
            </li>
            <li>
              <a href="./gallery.php" style="--i: 0.2s">Gallery</a>
            </li>
            <li>
              <a href="./blog.php" style="--i: 0.25s">Blog</a>
            </li>
            <li>
              <a href="./contact.php" style="--i: 0.3s">Contact</a>
            </li>
            <li>
              <a href="./team.php" style="--i: 0.35s">Team Member</a>
            </li>
            <li>
              <a href="./profile.php" style="--i: 0.4s">Profile</a>
            </li>
            <?php 
              if(!isset($_SESSION['user_name'])){
      
            ?>
              <li>
                  <a href="./login.php" style="--i: 0.45s">Login</a>
              </li>
            <?php }else{

              ?>
              <li>
                <a href="./logout.php" style="--i: 0.45s">Logout</a>
              </li>
              <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </section>

    <script src="./js/transition.js"></script>
    <script src="./js/courser.js"></script>
    <script src="./js/menu.js"></script>
  </body>
</html>
