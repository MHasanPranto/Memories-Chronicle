<?php 
session_start();
include "../admin/includes/connection.php";

if($_POST){

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    date_default_timezone_set('Asia/Dhaka');
    $date=date("Y-m-d");
    $time=date("h:i:sa");
    
  
    $img_name = $_FILES['b_image']['name'];
    $img_size = $_FILES['b_image']['size'];
    $tmp_name = $_FILES['b_image']['tmp_name'];
    $error = $_FILES['b_image']['error'];
  
    // echo "<pre>";
    //   print_r($_FILES['b_image']);
    //   echo "</pre>";
  
    if ($error === 0) {
      if ($img_size > 1000000) {
        
        echo '<script type = "text/javascript"> alert(" Sorry, your file is too large. ") </script>';
        echo '<script type = "text/javascript"> window.location = "../writeblog.php"</script>';
          
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
        $allowed_exs = array("jpg", "jpeg", "png"); 
  
        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = '../images/user post image/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
  
          //  image Database e Insert
          $sql = "INSERT INTO user_blog(title,image,date,time,user_id,user_name) 
                    VALUES('$title','$new_img_name','$date','$time','$user_id','$user_name')";
          mysqli_query($conn, $sql);
          echo '<script type = "text/javascript"> alert(" Posted successfully ") </script>';
          echo '<script type = "text/javascript"> window.location = "../profile.php"</script>';
        }else {
          
          echo '<script type = "text/javascript"> alert(" You can not upload files of this type ") </script>';
          echo '<script type = "text/javascript"> window.location = "../writeblog.php"</script>';
        }
      }
    }else {
      
      echo '<script type = "text/javascript"> alert(" unknown error occurred! ") </script>';
      echo '<script type = "text/javascript"> window.location = "../writeblog.php"</script>';
    }
  
  }

?>