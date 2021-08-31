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
    <link rel="stylesheet" href="./css/blog.css" />
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
    <div class="transition transition-3 is-active"></div>
    <!-- ------------------------cursor---------------- -->
    <div id="cursor">
      
    </div>
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
              <div class="blog-wrapper">
                <div class="blog-container">
                  <div class="demo-wrapper">
                    
                    <ul class="blog-items">

                    <?php
                        $sql = "SELECT * FROM user_blog ";
                        $result = $conn->query($sql);
                        if($result !== false && $result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                    ?>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="./images/user post image/<?php echo $row['image']?>" />
                             </div>
                             <figcaption>
                                <p><span style="color:crimson"><?php echo $row['title']?></span></p>
                                <p><span>Posted By <?php echo $row['user_name']?></span></p>
                             </figcaption>
                          </figure>
                          <div class="date"><?php echo $row['date']?></div>
                       </li>

                       <?php
                          }
                        }
                       ?>
                       <!-- <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/2.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?christmas_ice_skating">Christmas Ice Skating</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2008</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/3.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?love_knows_no_boundaries">Love Knows No Boundaries</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2008</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/7.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?sandal">Sandal</a></span></p>
                                <p><span>By Vlad Gerasimov </span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2009</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/13.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?skiing">Skiing</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2004</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/33.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and The Lady</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2009</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/33.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and The Lady</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2009</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/33.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and The Lady</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2009</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/33.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and The Lady</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2009</div>
                       </li>
                       <li class="item">
                          <figure>
                             <div class="view">
                                <img src="https://s.cdpn.io/9674/33.jpg" />
                             </div>
                             <figcaption>
                                <p><span><a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and The Lady</a></span></p>
                                <p><span>By Vlad Gerasimov</span></p>
                             </figcaption>
                          </figure>
                          <div class="date">2009</div>
                       </li> -->
                    </ul>
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
    <script src="./js/courser.js"></script>
    <script src="./js/transition.js"></script>
    <script src="./js/blog.js"></script>
    <script src="./js/menu.js"></script>
  </body>
</html>
