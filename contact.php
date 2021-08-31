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
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
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
              <div class="contact-wrapper">
                <div class="contact-container">
                    <div class="contactInfo">
                        <div>
                    
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span>
                                    <img src="./images/location.png">
                                </span>
                                <span>
                                    #46/22 Press Club Road<br>
                                    Khulna, Bangladesh<br>
                                    9201
                                </span>
                            </li>
                            <li>
                             <span>
                                 <img src="./images/mail.png">
                             </span>
                             <span>
                                 info@memorieschronicel.com
                             </span>
                         </li>
                         <li>
                             <span>
                                 <img src="./images/call.png">
                             </span>
                             <span>
                                 0123456789
                             </span>
                         </li>
                        </ul>
                </div>
                <ul class="sci">
                        <li>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <form action="./include/contactcheck.php" id="form" method="POST" autocomplete="off">
                            <div class="formBox">
                                
                                <div class="inputBox w50">
                                    <input type="text" name="name" id="name" required>
                                    <span>Name</span>
                                </div>
                               
                             <div class="inputBox w50">
                                 <input type="email" name="email" id="email" required>
                                 <span>Email Address</span>
                             </div>
                             <div class="inputBox w50">
                                 <input type="text" name="number" id="number" required>
                                 <span>Mobile Number</span>
                             </div>
                             <div class="inputBox w50">
                                 <!-- <input type="text"  name="event" id="event" required> -->
                                 <select name="event" id="event">
                                     <option value=""><span>Event Type</span></option>
                                     <option value="Wedding">Wedding</option>
                                     <option value="Birthday">Birthday</option>
                                     <option value="Business Conference">Business Conference</option>
                                     <option value="Product Launch">Product Launch</option>
                                 </select>
                                 
                                 
                             </div>
                             <div class="inputBox w100">
                                 <textarea type="text" name="message"  id="message" required></textarea>
                                 <span>Write your message here...</span>
                             </div>
                             <div class="inputBox w100">
                                 <input type="submit" name="submit" value="send">
                             </div>
                         </form>
                    </div>
                </div>
              </div>
              </header>
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
