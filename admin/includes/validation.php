<?php 
  ob_start();
  session_start();
  include "./connection.php";

  $login = $_POST['login'];
  

  if (isset($login)) {
   $username = $_POST['username']; 
   $password = $_POST['password'];
   $username = mysqli_real_escape_string($conn,$username); 
   $password = mysqli_real_escape_string($conn,$password);
   
   $sql = "SELECT * FROM admin WHERE username=? AND password=? ";

   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ss",$username,$password);
   $stmt->execute();
   $result = $stmt->get_result();
   $row = $result->fetch_assoc();

   
   $_SESSION['admin-username'] = $row['username'];
   $_SESSION['role'] = $row['user_type'];
   $_SESSION['name'] = $row['name'];
   

   if($result->num_rows==1 && ($_SESSION['role']=="super-admin" || $_SESSION['role']=="admin"))
   {
       header("location:../index.php");
   }
//    else if($result->num_rows==1 && $_SESSION['role']=="admin")
//    {
//        header("location:../index.php");
//    }
   else
   {
    
        
    
    header("Location:../admin-login.php?error=Sorry, that username or password is incorrect. Please try again.");
    
        
   }


} 
?>

