<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  ob_start();
  session_start();
  include "./connection.php";

  if(isset($_POST['confirm'])) {
    $c_msg_id = $_POST['c_msg_id'];
    $c_number = $_POST['number'];
    $c_name = $_POST['name'];
    $c_email = $_POST['email'];
    $event_type = $_POST['event'];
    $event_date = $_POST['event_date'];
    $tobepaid = $_POST['tobepaid'];
    $e_confirmed_by = $_SESSION['admin-username'];
    $role = $_SESSION['role'];
    date_default_timezone_set('Asia/Dhaka');
    $confirm_date = date("F j, Y, g:i a");


    $sql = "INSERT INTO `events`(`c_msg_id`, `c_number`, `c_name`, `c_email`, `event_type`, `event_date`, `to_be_paid`, `e_confirmed_by`, `role`, `confirm_date`) 
                        VALUES ('$c_msg_id','$c_number','$c_name','$c_email','$event_type','$event_date','$tobepaid','$e_confirmed_by','$role','$confirm_date')";

    if($conn->query($sql) === TRUE){

        $sql2 = "UPDATE client_msg SET event_status = 3 WHERE id = '$c_msg_id'";
        if($conn->query($sql2) === TRUE) {
    
          echo '<script type = "text/javascript"> alert(" Event Confirmed Successfully. ") </script>';
          echo '<script type = "text/javascript"> window.location = "../payroll.php"</script>';
        
        } else {
        echo "Erorr while updating record : ". $conn->error;
        }
    }
    else{
      echo "Error " . $sql . ' ' . $conn->connect_error;
    }
    
    
    }
    ?>