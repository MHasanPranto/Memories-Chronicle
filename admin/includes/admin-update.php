<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  ob_start();
  session_start();
  include "./connection.php";

  if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    
    $sql = "UPDATE admin SET email = '$email', name = '$name', username = '$username', password = '$password' WHERE id = '$id'";
    if($conn->query($sql) === TRUE) {

      echo '<script type = "text/javascript"> alert(" Information Updated Successfully. ") </script>';
      echo '<script type = "text/javascript"> window.location = "../admin-management.php"</script>';
    
        // header("location:../");
        // header("location:./admin-edit.php?id=" . $id);
    
    } else {
    echo "Erorr while updating record : ". $conn->error;
    }
    $conn->close();
    }
    ?>