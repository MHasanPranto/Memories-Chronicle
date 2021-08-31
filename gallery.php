<?php
    ob_start();
    session_start();
    require_once('./admin/includes/connection.php');
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
    <link rel="stylesheet" href="./css/gallery.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/anime.min.js"></script>
    <script type="text/javascript" src="./js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
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
              <div class="gallery-wrapper">
                <div class="gallery">
                  <div class="swiper-container main-slider loading">
                    <div class="swiper-wrapper">

                      <?php
                        
                        $sql = "SELECT * FROM gallery";
                        $result = $conn->query($sql);

                        if ($result !== false && $result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {  
                      ?>
                      <div class="swiper-slide">
                        <figure
                          class="slide-bgimg"
                          style="background-image: url(./admin/assets/gallery/<?php echo $row['image'];?>)"
                        >
                          <img src="./admin/assets/gallery/<?php echo $row['image'];?>" class="entity-img" />
                        </figure>
                        <div class="content">
                          <p class="title"><?php echo $row['title'];?></p>
                          <span class="caption"
                            ><?php echo $row['caption'];?></span
                          >
                        </div>
                      </div>

                      <?php
                        }
                        }
                        
                      ?>
                      
                    </div>
                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div> -->
                  </div>

                  <!-- Thumbnail navigation -->
                  <div class="swiper-container nav-slider loading">
                    <div class="swiper-wrapper" role="navigation">
                    <?php
                        
                        $sql2 = "SELECT * FROM gallery";
                        $result2 = $conn->query($sql2);

                        if ($result2 !== false && $result2->num_rows > 0) {
                          while ($row2 = $result2->fetch_assoc()) {  
                      ?>
                      <div class="swiper-slide">
                        <figure
                          class="slide-bgimg"
                          style="background-image: url(./admin/assets/gallery/<?php echo $row2['image'];?>)"
                        >
                          <img src="./admin/assets/gallery/<?php echo $row2['image'];?>" class="entity-img" />
                        </figure>
                        <div class="content">
                          <p class="title"><?php echo $row2['title'];?></p>
                        </div>
                      </div>

                      <?php
                          }
                        } 
                      ?>
                      
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

    <script type="text/javascript" src="./js/transition.js"></script>
    <script type="text/javascript" src="./js/courser.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
    <script type="text/javascript" src="./js/galerry.js"></script>
  </body>
</html>
