<?php 
  ob_start();
  session_start();
  include "./includes/connection.php";
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
          <h2>Client Messages</h2>

          <div class="table" style="top:35%; left:60%;">
            <table class="neumorphic" style="width:800px;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Number</th>
                  <th>Event Type</th>
                  <th>Message</th>
                  <th>User Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM client_msg WHERE event_status = 1";
                  $result = $conn->query($sql);
                  if($result !== false && $result->num_rows > 0){
                    while($row = $result->fetch_assoc()){

                      ?>
                      <tr>                         
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><?php echo $row['event'] ?></td>
                        <td><?php echo $row['message'] ?></td>
                        <td><?php echo $row['user_name'] ?></td>
                          
                        <td><a href='./includes/confirm-event.php?id=<?php echo $row['id'] ?>'><button type='button'><i class='fas fa-check-square'></i></button></a>
                        <a href='./includes/event-remove.php?id=<?php echo $row['id'] ?>'><button type='button'><i class='fas fa-trash'></i></button></a>
                        </td>
                              
                      </tr>

                            <?php
                    }
                  }
                  else{
                    echo "<tr><td colspan='5' style= 'color: crimson;'><center>No post Added yet </center></td></tr>";
                  }
                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </main>

      <?php
        include "./sidebar.php"; 
      ?>
    </div>

    <script src="../js/script.js"></script>
  </body>
</html>
