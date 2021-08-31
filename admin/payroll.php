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
          <h2>Confirmed Event & Payment Discription </h2>

          <div class="table" style="top:35%; left:60%;">
            <table class="neumorphic" style="width:850px;">
              <thead>
                <tr>
                  <th rowspan = "2">Client Message Id</th>
                  <th rowspan = "2">Client Name</th>
                  <th rowspan = "2">Client Number</th>
                  <th rowspan = "2">Event Type</th>
                  <th rowspan = "2">Event Date</th>                  
                  <th colspan = "2">Payment Status</th>
                  <th rowspan = "2">Add Payment</th>
                </tr>
                <tr>
                    <th>To be Paid</th>
                    <th>Paid</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM events";
                  $result = $conn->query($sql);
                  if($result !== false && $result->num_rows > 0){
                    while($row = $result->fetch_assoc()){

                      ?>
                      <tr>                         
                        <td><?php echo $row['c_msg_id'] ?></td>
                        <td><?php echo $row['c_name'] ?></td>
                        <td><?php echo $row['c_number'] ?></td>
                        <td><?php echo $row['event_type'] ?></td>
                        <td><?php echo $row['event_date'] ?></td>
                        <td><?php echo $row['to_be_paid'] ?></td>
                        <td><?php echo $row['paid'] ?></td>
                         
                        

                        <td><?php if($row['payment_status'] == 1 ){
                            // delete er info
                            echo "<span > <a href='./includes/add-payment.php?id=".$row['id']."'><button type='button'><i class='fas fa-money-check-alt'></i></button></a> </span>";
                        }else if($row['payment_status'] == 2 ){
                            // confirm er info
                            echo "<button type='button' disabled><i class='fas fa-money-check-alt'></i></button>";
                        }?>                     
                        </td>
                        
                              
                      </tr>

                    <?php
                    }
                  }
                  else{
                    echo "<tr><td colspan='6' style= 'color: crimson;'><center>No post Added yet </center></td></tr>";
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
