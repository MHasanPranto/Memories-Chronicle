<?php 
  ob_start();
  session_start();
  include "./includes/connection.php";

    if(!isset($_SESSION['admin-username']) || $_SESSION['role'] != "super-admin"){
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
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
    <?php
        include "./navbar.php"; 
      ?>

    <main>
      <div class="main__container">
        <h2>Admin management</h2>

        <div class="table">
          <table class="neumorphic">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM admin WHERE user_type = 'admin'";
                $result = $conn->query($sql);
                if($result !== false && $result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>" .$row['name']."</td>
                            <td>" .$row['email']."</td>
                            <td>" .$row['username']."</td>
                            <td>" .$row['password']."</td>
                            <td>" ."<a href='./includes/admin-edit.php?id=".$row['id']."'><button type='button'><i class='fas fa-user-edit'></i></button></a>
                            <a href='./includes/admin-remove.php?id=".$row['id']."'><button type='button'><i class='fas fa-user-minus'></i></button></a>"."</td>
                            
                          </tr>";
                  }
                }
                else{
                  echo "<tr><td colspan='5' style= 'color: crimson;'><center>No Admin Added yet ! Add a new one</center></td></tr>";
                }
              ?>
              
            </tbody>
          </table>
          <center><a href="./admin-add.php"><button class="add-btn" type="button"><i class="fas fa-user-plus"></i> Add Admin</button></a></center>
        </div>
      </div>
    </main>

      <?php
        include "./sidebar.php"; 
      ?>
    </div>

    <script src="./js/script.js"></script>
  </body>
</html>
