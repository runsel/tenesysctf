<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CTF Platform developed by Hendrik Agung a.k.a Runsel">
  <meta name="author" content="Hendrik Agung.M">

  <link rel="shortcut icon" href="images/favicon_1.ico">

  <title>NdeeCTF Platform</title>

  <!-- Base Css Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Icons -->
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
  <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

  <!-- Plugins css -->
  <link href="assets/modal-effect/css/component.css" rel="stylesheet">
  
  <!-- animate css -->
  <link href="css/animate.css" rel="stylesheet" />

  <!-- Plugins css -->
  <link href="assets/notifications/notification.css" rel="stylesheet" />

  <!-- DataTables -->
  <link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

  <!-- Waves-effect -->
  <link href="css/waves-effect.css" rel="stylesheet">

  <!-- sweet alerts -->
  <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

  <!-- Custom Files -->
  <link href="css/helper.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <script src="js/modernizr.min.js"></script>
  
</head>

<body class="fixed-left">

  <!-- Begin page -->
  <div id="wrapper">
  
    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <a href="./home.php" class="logo"><i class="md md-terrain"></i> <span>NdeeCTF </span></a>
        </div>
      </div>
      <!-- Button mobile view to collapse sidebar menu -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="">
            <div class="pull-left">
              <button class="button-menu-mobile open-left">
                <i class="fa fa-bars"></i>
              </button>
              <span class="clearfix"></span>
            </div>

            <ul class="nav navbar-nav navbar-right pull-right">
              <li class="dropdown hidden-xs">
                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                  <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg">
                  <li class="text-center notifi-title">Notification</li>
                  <li class="list-group">
                   <!-- list item-->
                   <a href="javascript:void(0);" class="list-group-item">
                    <div class="media">
                     <div class="pull-left">
                      <em class="fa fa-user-plus fa-2x text-info"></em>
                    </div>
                    <div class="media-body clearfix">
                      <div class="media-heading">New user registered</div>
                      <p class="m-0">
                       <small>You have 10 unread messages</small>
                     </p>
                   </div>
                 </div>
               </a>
               <!-- list item-->
               <a href="javascript:void(0);" class="list-group-item">
                <div class="media">
                 <div class="pull-left">
                  <em class="fa fa-diamond fa-2x text-primary"></em>
                </div>
                <div class="media-body clearfix">
                  <div class="media-heading">New settings</div>
                  <p class="m-0">
                   <small>There are new settings available</small>
                 </p>
               </div>
             </div>
           </a>
           <!-- list item-->
           <a href="javascript:void(0);" class="list-group-item">
            <div class="media">
             <div class="pull-left">
              <em class="fa fa-bell-o fa-2x text-danger"></em>
            </div>
            <div class="media-body clearfix">
              <div class="media-heading">Updates</div>
              <p class="m-0">
               <small>There are
                <span class="text-primary">2</span> new updates available</small>
              </p>
            </div>
          </div>
        </a>
        <!-- last list item -->
        <a href="javascript:void(0);" class="list-group-item">
          <small>See all notifications</small>
        </a>
      </li>
    </ul>
  </li>
  <li class="hidden-xs">
    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
  </li>
  <li class="dropdown">
    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
    <ul class="dropdown-menu">
      <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
      <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
    </ul>
  </li>
</ul>
</div>
<!--/.nav-collapse -->
</div>
</div>
</div>
<!-- Top Bar End -->