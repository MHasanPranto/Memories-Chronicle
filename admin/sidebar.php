<?php 
  ob_start();
  
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 include "./includes/connection.php";
  

  
?>
<div id="sidebar">
  <div class="sidebar__title">
    <div class="sidebar__img">
      <img src="./assets/logo2.png" alt="logo" />
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
      <a href="./index.php">Dashboard</a>
    </div>
    <?php 
    if(!isset($_SESSION['admin-username']) || $_SESSION['role'] == "super-admin"){
      
      echo "<h2>MANAGEMENT</h2>";
    echo "<div class='sidebar__link'>";
      echo "<i class='fas fa-user-secret'></i>";
      echo "<a href='./admin-management.php'>Admin Management</a>";
    echo "</div>";
    echo "<div class='sidebar__link'>";
      echo "<i class='fas fa-users'></i>";
      echo "<a href='./client management.php'>Client Management</a>";
    echo "</div>";
    echo "<div class='sidebar__link'>";
      echo "<i class='fas fa-blog'></i>";
      echo "<a href='./client blog management.php'>Client's Blog Management</a>";
    echo "</div>";
    echo "<div class='sidebar__link'>";
      echo "<i class='fas fa-tasks'></i>";
      echo "<a href='./all-event-list.php'>All Event List</a>";
    echo "</div>";
    echo "<div class='sidebar__link'>";
      echo "<i class='fas fa-file-invoice-dollar'></i>";
      echo "<a href='./payment-record.php'>Payment Records</a>";
    echo "</div>";
    
  }?>

    <h2>POST</h2>
    <div class="sidebar__link">
      <i class="fas fa-edit"></i>
      <a href="./blog.php">New Blog</a>
    </div>
    <div class="sidebar__link">
      <i class="fas fa-images"></i>
      <a href="./gallery.php">Gallery</a>
    </div>

    <h2>PAYROLL</h2>
    <div class="sidebar__link">
      <!-- <i class="fab fa-opencart"></i> -->
      <i class="fas fa-inbox"></i>
      <a href="./order.php">Client's Messages</a>
    </div>
    <div class="sidebar__link">
      <i class="fas fa-hand-holding-usd"></i>
      <a href="./payroll.php">Payroll</a>
    </div>

    <div class="sidebar__logout">
      <i class="fa fa-power-off"></i>
      <a href="./logout.php">Log out</a>
    </div>
  </div>
</div>
