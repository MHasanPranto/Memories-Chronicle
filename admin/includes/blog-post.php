<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  ob_start();
  session_start();
  include "./connection.php";

  if($_POST) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    
    $caption = mysqli_real_escape_string($conn,$_POST['caption']);
    $adminusername = $_SESSION['admin-username'];
    $role = $_SESSION['role'];
    date_default_timezone_set('Asia/Dhaka');
    $date = date("F j, Y, g:i a");

//     print_r($title." ");
//     echo "<pre>";
//   print_r($_FILES['image_file']);
//   echo "</pre>";
// print_r($caption." ");
//     print_r($adminusername." ");
// print_r($role." ");
//     print_r($date." ");

    $img_name = $_FILES['image_file']['name'];
    $img_size = $_FILES['image_file']['size'];
    $tmp_name = $_FILES['image_file']['tmp_name'];
    $error = $_FILES['image_file']['error'];

    if ($error === 0) {
        if ($img_size > 1000000) {
          $em = "Sorry, your file is too large.";
            header("Location: ../blog.php?error=$em");
        }else {
          $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);

          $allowed_exs = array("jpg", "jpeg", "png"); 

          if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = '../assets/gallery/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            //  image Database e Insert
            $sql = "INSERT INTO gallery(title,caption,image,post_by,admin_role,date) 
                    VALUES('$title','$caption','$new_img_name','$adminusername','$role','$date')";
            mysqli_query($conn, $sql);
            echo '<script type = "text/javascript"> alert(" Your Post is posted successfully ") </script>';
            echo '<script type = "text/javascript"> window.location = "../blog.php" </script>';
            
            // header("Location: ../blog.php");
          }else {
            $em = "You can't upload files of this type";
                header("Location: ../blog.php?error=$em");
          }
        }
      }else {
        $em = "unknown error occurred!";
        header("Location: ../blog.php?error=$em");
      }

    
    } else {
    echo "Erorr while updating record : ". $conn->error;
    }
    
    
    ?>