<?php 
session_start();
include "../admin/includes/connection.php";

if($_POST){

    $id = $_SESSION['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['pass'];
  
    $img_name = $_FILES['p_image']['name'];
    $img_size = $_FILES['p_image']['size'];
    $tmp_name = $_FILES['p_image']['tmp_name'];
    $error = $_FILES['p_image']['error'];
  
    // echo "<pre>";
    //   print_r($_FILES['p_image']);
    //   echo "</pre>";
  
    if ($error === 0) {
      if ($img_size > 1000000) {
        
        echo '<script type = "text/javascript"> alert(" Sorry, your file is too large. ") </script>';
        echo '<script type = "text/javascript"> window.location = "../updateprofile.php?id='.$_SESSION['user_id'].'"</script>';
          
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
        $allowed_exs = array("jpg", "jpeg", "png"); 
  
        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = '../images/user profile image/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
  
          //  image Database e Insert
          $sql = "UPDATE user SET image = '$new_img_name', name = '$name', email = '$email', number = '$number', password = '$password' WHERE id = '$id'";
          mysqli_query($conn, $sql);
          echo '<script type = "text/javascript"> alert(" Profile Updated successfully ") </script>';
          echo '<script type = "text/javascript"> window.location = "../profile.php"</script>';
        }else {
          
          echo '<script type = "text/javascript"> alert(" You can not upload files of this type ") </script>';
          echo '<script type = "text/javascript"> window.location = "../updateprofile.php?id='.$_SESSION['user_id'].'"</script>';
        }
      }
    }else {
      
      echo '<script type = "text/javascript"> alert(" unknown error occurred! ") </script>';
      echo '<script type = "text/javascript"> window.location = "../updateprofile.php?id='.$_SESSION['user_id'].'"</script>';
    }
  
  }

?>