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
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  </head>
  <body>
    <div class="transition transition-1 is-active"></div>
    <!-- ------------------------cursor---------------- -->
    <div id="cursor"></div>
    <span class="tail"></span>
    <!-- ------------------------cursor---------------- -->
    <section class="loading">
      <div class="loading-container">
        <div class="loading-screen"></div>
        <div class="loader">
          <div class="intrologo">
            <img src="./images/logo2.png" alt="" />
          </div>
          <div class="ringOne ring">
            <img src="./images/ring.png" alt="" />
          </div>
          <div class="ringTwo ring">
            <img src="./images/ring.png" alt="" />
          </div>
        </div>
        <!-- button -->
        <div class="overlay-1">
          <p class="screen">MEMORIES CHRONICEL</p>

          <div class="intro">
            <button class="mybtn" onclick="fadeOut()">
              Let's Make Memories Together
            </button>
          </div>
        </div>

        <div class="overlay-2"></div>
    </section>
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
              <div class="overlay">
                <div class="inner">
                  <h2 class="title">
                    <span style="font-size: 3.7rem">W</span>elcome <br />To
                    <br />
                    <span style="color: crimson">Memories</span> Chronicel
                  </h2>
                  <p>
                    <span style="font-size: 1.7rem; color: crimson">W</span>e
                    care &
                    <span style="font-size: 1.7rem; color: crimson">W</span>e
                    believe that every memories are important. Thats why
                    <span style="font-size: 1.7rem; color: crimson"
                      >Memories</span
                    >
                    Chronicel family is here to make those memories more
                    special. So any occation or celebration like Weadding,
                    Birthday, Business Conference or any event we are just a
                    <span style="color: cyan">Click</span> away to Decorate that
                    for you the way you want. So what are you waiting for! Hire
                    us now.
                  </p>
                  <button class="btn"><a href="./contact.php" style = "text-decoration: none;color: #eee;">Hire Us</a></button>
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

    <script>function loading() {
      console.log('load');
      // TweenMax.to(".loading",4,{
      //   delay:6.6,
      //   top:"-110%",
    
      //   ease:Expo.easeInOut
      // });
      var t1 = new TimelineMax();
    
      t1.from('.ringOne', 4, {
        delay: 0.4,
        opacity: 0,
        y: 80,
        ease: Expo.easeInOut,
      })
        .from(
          '.ringTwo',
          4,
          {
            delay: 0.9,
            opacity: 0,
            y: 80,
            ease: Expo.easeInOut,
          },
          '-=5'
        )
        .to('.intrologo', 1, {
          delay: 1.6,
          opacity: 1,
          ease: Power2.easeInOut,
        })
        .fromTo(
          '.intro',
          4,
          {
            opacity: 0,
            bottom: '-110%',
          },
          {
            opacity: 1,
            bottom: 0,
            ease: Expo.easeInOut,
          }
        );
    
      // TweenMax.from(".loading-screen",3,{
      //   delay:8.4,
      //   top:"-110%",
      //   ease:Expo.easeInOut
      // });
    }
    loading();</script>
    <script src="./js/courser.js"></script>
    <script src="./js/transition.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
