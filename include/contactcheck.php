<?php
session_start();
include "../admin/includes/connection.php";

if(isset($_POST['submit'])){
  if(isset($_SESSION['user_name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $event=$_POST['event'];
    $user_name = $_SESSION['user_name'];
    $user_id = $_SESSION['user_id'];

    $message=mysqli_real_escape_string($conn,$_POST['message']);


    $sql = "INSERT INTO client_msg(name,email,number,event,message,user_name,user_id) VALUE ('$name','$email','$number','$event','$message','$user_name','$user_id')";


    if($conn->query($sql) === TRUE){
      echo "<script>alert('Your message sent successfully !')</script>" ;
      echo '<script type = "text/javascript"> window.location = "../contact.php" </script>';
    }
    else{
      echo "Error " . $sql . ' ' . $conn->connect_error;
    }
  }else{
    echo '<script type = "text/javascript"> alert(" OPPS!! It seems that you are not logged in. Please Log in First.") </script>';
    echo '<script type = "text/javascript"> window.location = "../login.php" </script>';
  }

}
  
?>