<?php 
  ob_start();
  session_start();
  include "./includes/connection.php";

    if(!isset($_SESSION['admin-username'])){
    header("location:./admin-login.php");
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
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
    <?php
        include "./navbar.php"; 
      ?>

    <main>
      <div class="main__container">
        <h2>Gallery Management</h2>

        <div class="table" style="top:38%; left:60%;">
          <table class="neumorphic" style="width:800px;">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Caption</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);
                if($result !== false && $result->num_rows > 0){
                  while($row = $result->fetch_assoc()){

                    ?>
                    <tr>
                        <td>
                            <div class="popup_image" style="width:70px; height:50px;">
                                <a href="./assets/gallery/<?php echo $row['image']?>" class="image-link" title="<?php echo $row['title']?>">
                                    <img src="./assets/gallery/<?php echo $row['image']?>" style="width:100%; height:100%;" alt="">
                                </a>
                            </div>
                        </td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['caption'] ?></td>
                        
                        
                        <td><a href='./includes/gallery-post-edit.php?id=<?php echo $row['id'] ?>'><button type='button'><i class='fas fa-edit'></i></button></a>
                        <a href='./includes/gallery-post-remove.php?id=<?php echo $row['id'] ?>'><button type='button'><i class='fas fa-trash'></i></button></a>
                        </td>
                            
                    </tr>

                          <?php
                  }
                }
                else{
                  echo "<tr><td colspan='5' style= 'color: crimson;'><center>No post Added yet </center></td></tr>";
                }
              ?>
              
            </tbody>
          </table>
          
        </div>
      </div>
    </main>

      <?php
        include "./sidebar.php"; 
      ?>
    </div>

    <script>
        $('.image-link').magnificPopup({
            type: "image",
            image: {
                markup: '<div class="mfp-figure">'+
                '<div class="mfp-close"></div>'+
                '<div class="mfp-img"></div>'+
                '<div class="mfp-bottom-bar">'+
                '<div class="mfp-title"></div>'+
                '<div class="mfp-counter"></div>'+
                '</div>'+
                '</div>', 
                cursor: 'mfp-zoom-out-cur',
                titleSrc: 'title', 
                verticalFit: true, 
                tError: '<a href="%url%">The image</a> could not be loaded.' 
            }
            });
    </script>

    <script src="./js/script.js"></script>
  </body>
</html>
