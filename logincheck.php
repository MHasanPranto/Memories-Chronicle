<?php
session_start();
include "./admin/includes/connection.php";

if(isset($_POST['login'])){

  
  $email=$_POST['lemail'];
  
  $password=$_POST['lpass'];

  $email = mysqli_real_escape_string($conn,$email);
  $password = mysqli_real_escape_string($conn,$password);

  

  $sql = "SELECT * FROM user WHERE email=? AND password=? ";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss",$email,$password);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  
      
  if($result->num_rows==1 && $row['email']==$email && $row['password']==$password){

    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_number'] = $row['number'];
    $_SESSION['user_image'] = $row['image'];
    

    header("location:./profile.php");
  }
  else{
    echo '<script type = "text/javascript"> alert(" Sorry !! Password or Email is incorrect. Try again ") </script>';
    echo '<script type = "text/javascript"> window.location = "./login.php" </script>';
  }

}

?>