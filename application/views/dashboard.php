<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <title>Hunger</title>
  <style type="text/css"></style>
</head>
<body>


  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">Hunger</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="<?php echo base_url().'home'?>">
          <i class='bx bxs-dashboard' ></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url().'home'?>">
          <i class='bx bxs-shopping-bag-alt' ></i>
          <span class="text" onclick="myFunction()">Manage Needy</span>
            <div>
              <li><a href="<?php echo base_url().'view_Needy'?>">Add-Needy</a></li>
              <li><a href="<?php echo base_url().'needy'?>">View-Needy</a></li>
            </div>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-doughnut-chart' ></i>
          <span class="text">Manage Restaurant</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-message-dots' ></i>
          <span class="text">Report</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="#">
          <i class='bx bxs-cog' ></i>
          <span class="text">Settings</span>
        </a>
      </li>
      <li>
        <a href="#" class="logout">
          <i class='bx bxs-log-out-circle' ></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
<!--     <nav>
      <i class='bx bx-menu' ></i>
      <a href="#" class="nav-link">Categories</a>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">8</span>
      </a>
      <a href="#" class="profile">
        <img src="img/people.png">
      </a>
    </nav> -->
    <!-- NAVBAR -->

    
  </section>
  <!-- CONTENT -->
  

  <script src="script.js"></script>
</body>
</html>