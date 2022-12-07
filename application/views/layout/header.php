<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Hunger</title>

  <!-- Main Styles -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles/style.min.css">
  
  <!-- Themify Icon -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/themify-icons/themify-icons.css">

  <!-- mCustomScrollbar -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

  <!-- Waves Effect -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/waves/waves.min.css">

  <!-- Sweet Alert -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/sweet-alert/sweetalert.css">
  
  <!-- Percent Circle -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/percircle/css/percircle.css">

  <!-- Chartist Chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/chart/chartist/chartist.min.css">

  <!-- FullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

</head>

<body>
<div class="main-menu">
  <header class="header">
    <a href="index.html" class="logo">Food Assistance System</a>
    <button type="button" class="button-close fa fa-times js__menu_close"></button>
  </header>
  <!-- /.header -->
  <div class="content">

    <div class="navigation">
      <h5 class="title">Main Menu</h5>
      <!-- /.title -->
      <ul class="menu js__accordion">
        <li class="">
          <a class="waves-effect" href="<?php echo base_url() ?>"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
        </li>
        <!-- <li>
          <a class="waves-effect" href="calendar.html"><i class="menu-icon ti-calendar"></i><span>Calendar</span></a>
        </li> -->
        <li>
          <a class="waves-effect parent-item js__control <?php if($this->uri->segment(2) == 'view_needy') echo 'current active'  ?>" href="#"><i class="menu-icon ti-user"></i><span>Manage Needy</span><span class="menu-arrow fa fa-angle-down"></span></a>
          <ul class="sub-menu js__content">
            <li><a href="<?php echo base_url() ?>Needy_master/add_needy">Add Needy</a></li>
            <li><a href="<?php echo base_url() ?>Needy_master/view_needy">View Needy</a></li>
          </ul>
          <!-- /.sub-menu js__content -->
        </li>

        <li>
          <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-home"></i><span>Manage Restaurant</span><span class="menu-arrow fa fa-angle-down"></span></a>
          <ul class="sub-menu js__content">
            <li><a href="<?php echo base_url() ?>Needy_master/add_restaurant">Add Restaurant</a></li>
            <li><a href="<?php echo base_url() ?>Needy_master/view_restaurant">View Restaurant</a></li>
          </ul>
          <!-- /.sub-menu js__content -->
        </li>

        <li>
          <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-list-ol"></i><span>Reports</span><span class="menu-arrow fa fa-angle-down"></span></a>
          <ul class="sub-menu js__content">
            <li><a href="<?php echo base_url() ?>Reports/paid">Paid List</a></li>
            <li><a href="<?php echo base_url() ?>Reports/not_paid">Not Paid List</a></li>
            <li><a href="<?php echo base_url() ?>Reports/rejected">Rejected List</a></li>
          </ul>
          <!-- /.sub-menu js__content -->
        </li>

        <li>
          <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon ti-list-ol"></i><span>Donation</span><span class="menu-arrow fa fa-angle-down"></span></a>
          <ul class="sub-menu js__content">
            <li><a href="<?php echo base_url() ?>Reports/add_donation">Add Donation</a></li>
            <li><a href="<?php echo base_url() ?>Reports/view_donation">View Donation</a></li>
          </ul>
          <!-- /.sub-menu js__content -->
        </li>
        
      </ul>
      <!-- /.menu js__accordion -->
    </div>
    <!-- /.navigation -->
  </div>
  <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
  <div class="pull-left">
    <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
    <h1 class="page-title">Home</h1>
    <!-- /.page-title -->
  </div>
  <!-- /.pull-left -->
  <div class="pull-right">
    
    <div class="ico-item">
      <i class="ti-user"></i>
      <ul class="sub-ico-item">

        <li><a class="" href="<?php echo base_url() ?>Auth/logout">Log Out</a></li>
      </ul>
      <!-- /.sub-ico-item -->
    </div>
  </div>
  <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
  <h2 class="popup-title">Your Notifications</h2>
  <!-- /.popup-title -->
  <div class="content">
    <ul class="notice-list">
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">John Doe</span>
          <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
          <span class="time">10 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Anna William</span>
          <span class="desc">Like your post: “Facebook Messenger”</span>
          <span class="time">15 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
          <span class="name">Update Status</span>
          <span class="desc">Failed to get available update data. To ensure the please contact us.</span>
          <span class="time">30 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
          <span class="name">Jennifer</span>
          <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
          <span class="time">45 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Michael Zenaty</span>
          <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
          <span class="time">50 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Simon</span>
          <span class="desc">Like your post: “Facebook Messenger”</span>
          <span class="time">1 hour</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
          <span class="name">Account Contact Change</span>
          <span class="desc">A contact detail associated with your account has been changed.</span>
          <span class="time">2 hours</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Helen 987</span>
          <span class="desc">Like your post: “Facebook Messenger”</span>
          <span class="time">Yesterday</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
          <span class="name">Denise Jenny</span>
          <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
          <span class="time">Oct, 28</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Thomas William</span>
          <span class="desc">Like your post: “Facebook Messenger”</span>
          <span class="time">Oct, 27</span>
        </a>
      </li>
    </ul>
    <!-- /.notice-list -->
    <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
  </div>
  <!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
  <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
  <!-- /.popup-title -->
  <div class="content">
    <ul class="notice-list">
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">John Doe</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">10 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Harry Halen</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">15 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Thomas Taylor</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">30 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
          <span class="name">Jennifer</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">45 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
          <span class="name">Helen Candy</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">45 min</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
          <span class="name">Anna Cavan</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">1 hour ago</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar bg-success"><i class="fa fa-user"></i></span>
          <span class="name">Jenny Betty</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">1 day ago</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
          <span class="name">Denise Peterson</span>
          <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
          <span class="time">1 year ago</span>
        </a>
      </li>
    </ul>
    <!-- /.notice-list -->
    <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
  </div>
  <!-- /.content -->
</div>
<!-- /#message-popup -->