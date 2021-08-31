<?php 
  ob_start();
  session_start();
  include "./includes/connection.php";
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
    <link rel="stylesheet" href="./css/blog-post.css" />

    <script src="../js/jquery-3.6.0.min.js"></script>
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
    <?php
        include "./navbar.php"; 
      ?>

      <main>
        <div class="main__container">
          <h2>Post Blog for Gallery</h2>

          <div class="form-card">
            <div class="card">
              <h3>Post Blog</h3>
              <form action="./includes/blog-post.php" autocomplete="off" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" />
                  </div>
                </div>
                <div class="col">
                  <!-- <label for="">Select Image</label> -->
                  <input type="file" id="file" name="image_file" />
                  <label id="file-label" for="file" class="file-label">
                    <span class="file-label"><i class="fas fa-upload"></i> Select Image</span>
                  </label>
                  
                </div>

                <div class="col">
                  <div class="form-group">
                    <label>Write Caption</label>
                    <textarea name="caption"></textarea>
                  </div>
                </div>
                

                <div class="col">
                  <input type="submit" value="Post" />
                </div>
              </div>
              </form>
              
            </div>
          </div>
          
        </div>
      </main>

      <?php
        include "./sidebar.php"; 
      ?>
    </div>
    <script src="./js/blog.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
