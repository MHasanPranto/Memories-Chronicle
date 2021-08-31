<?php 
  ob_start();
  session_start();
  include "./connection.php";
  $id = $_GET['id'];

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
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/admin-manage.css" />
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
            <a class="active_link" href="#">Admin Panel</a>
            </div>
            <div class="navbar__right">
            <a href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>

            <a href="#">
                <img width="30" src="../assets/1.png" alt="" />
                <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
            </a>
            </div>
        </nav>
        <main>
            <div class="main__container">
            <h2>Event Delete Log</h2>

            <div class="table" style="top:35%; left:60%;">
                <table class="neumorphic" style="width:800px;">
                    <thead>
                        <tr>
                            <th colspan = "4"> <h2>Event Deletion Information</h2> </th>
                        </tr>
                        <tr>
                            <th>Client Message ID</th>
                            <th>Deleted By</th>
                            <th>Role</th>
                            <th>Date</th>                            
                        </tr>
                    </thead>
                    <tbody style = "color: crimson;">
                        <?php
                            $sql = "SELECT * FROM event_dlt_log WHERE c_msg_id = '$id'";
                            $result = $conn->query($sql);
                            if($result !== false && $result->num_rows > 0){
                                $row = $result->fetch_assoc();

                        ?>
                        <tr>                         
                            <td><?php echo $row['c_msg_id'] ?></td>
                            <td><?php echo $row['deleted_by'] ?></td>
                            <td><?php echo $row['role'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                        </tr>
                        <tr>
                            <td colspan = '4'>
                                <a href='../all-event-list.php'><button class = "add-btn" type='button'>Back</button></a>
                            </td>
                        </tr>

                        <?php
                            }
                            
                        else{
                            echo "<tr><td colspan='5' style= 'color: crimson;'><center>No message Added yet </center></td></tr>";
                            }
                        ?>
                            
                    </tbody>                
                </table>
            </div>
            </div>
        </main>

        <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="../assets/logo2.png" alt="logo" />
            <h1>Memories Chronicel</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="../index.php">Dashboard</a>
          </div>
          <?php 
          if(!isset($_SESSION['admin-username']) || $_SESSION['role'] == "super-admin"){
            
            echo "<h2>MANAGEMENT</h2>";
          echo "<div class='sidebar__link'>";
            echo "<i class='fas fa-user-secret'></i>";
            echo "<a href='../admin-management.php'>Admin Management</a>";
          echo "</div>";
          echo "<div class='sidebar__link'>";
            echo "<i class='fas fa-users'></i>";
            echo "<a href='../client management.php'>Client Management</a>";
          echo "</div>";
          echo "<div class='sidebar__link'>";
            echo "<i class='fas fa-blog'></i>";
            echo "<a href='../client blog management.php'>Client's Blog Management</a>";
          echo "</div>";
          echo "<div class='sidebar__link'>";
            echo "<i class='fas fa-tasks'></i>";
            echo "<a href='../all-event-list.php'>All Event List</a>";
          echo "</div>";
          echo "<div class='sidebar__link'>";
            echo "<i class='fas fa-file-invoice-dollar'></i>";
            echo "<a href='../payment-record.php'>Payment Records</a>";
          echo "</div>";
                    
        }?>

          <h2>POST</h2>
          <div class="sidebar__link">
            <i class="fas fa-edit"></i>
            <a href="../blog.php">New Blog</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-images"></i>
            <a href="../gallery.php">Gallery</a>
          </div>

          <h2>PAYROLL</h2>
          <div class="sidebar__link">
            <!-- <i class="fab fa-opencart"></i> -->
            <i class="fas fa-inbox"></i>
            <a href="../order.php">Client's Messages</a>
          </div>
          <div class="sidebar__link">
            <i class="fas fa-hand-holding-usd"></i>
            <a href="../payroll.php">Payroll</a>
          </div>

          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="../logout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/script.js"></script>
  </body>
</html>
