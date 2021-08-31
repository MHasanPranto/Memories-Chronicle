<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  ob_start();
  session_start();
  include "./connection.php";

  if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $sql = "DELETE FROM admin WHERE id = '$id'";
    if($conn->query($sql) === TRUE) {
        echo '<script type = "text/javascript"> alert(" Admin removed Successfully. ") </script>';
        echo '<script type = "text/javascript"> window.location = "../admin-management.php"</script>';
        // header("location:");
        // header("location:./admin-edit.php?id=" . $id);
    
    } else {
    echo "Erorr while updating record : ". $conn->error;
    }
    $conn->close();
    }
    ?>