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
                  <th rowspan = "2">Name</th>
                  <th rowspan = "2">Email</th>
                  <th rowspan = "2">Number</th>
                  <th rowspan = "2">Event Type</th>
                  <th rowspan = "2">Message</th>
                  <th rowspan = "2">User Name</th>
                  <th colspan = "2">Event Status</th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>Info</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM client_msg";
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
                         
                        <td>
                            <?php if($row['event_status'] == 2 ){
                                        echo "<span style = 'color:crimson;'>Event Deleted </span>";
                                    }else if($row['event_status'] == 3 ){
                                        echo "<span style = 'color:#368B85;'>Event Confirmed </span>";
                                    }else{
                                        echo "<span style = 'color:#FFC074;'>Event Pending </span>";
                                    }
                            ?>                        
                        </td>

                        <td><?php if($row['event_status'] == 2 ){
                            // delete er info
                            echo "<span > <a href='./includes/delete-log.php?id=".$row['id']."'><button type='button'><i class='fas fa-info-circle'></i></button></a> </span>";
                        }else if($row['event_status'] == 3 ){
                            // confirm er info
                            echo "<span > <a href='./payroll.php'><button type='button'><i class='fas fa-info-circle'></i></button></a> </span>";
                        }else{
                            // pending er info
                            echo "<span > <a href='./order.php'><button type='button'><i class='fas fa-info-circle'></i></button></a> </span>";
                        }?></button></a>                        
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

    <script src="./js/script.js"></script>
  </body>
</html>
