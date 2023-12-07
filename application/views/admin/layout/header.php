<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Bootmaster</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="<?php echo base_url('assets/admin/images/favicon.ico') ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/pages/waves/css/waves.min.css') ?>" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/bootstrap/css/bootstrap.min.css') ?>">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/pages/waves/css/waves.min.css') ?>" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/icon/themify-icons/themify-icons.css') ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/icon/font-awesome/css/font-awesome.min.css') ?>">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/jquery.mCustomScrollbar.css') ?>">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/style.css') ?>">
  </head>

  <body>
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                         
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="<?php echo base_url('assets/admin/images/logobm2.png')?>"  width="90" height="30"alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                     
                      <ul class="nav-right">
                          
                        
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="<?php echo base_url('assets/admin/images/profil.png')?>" class="img-radius" alt="User-Profile-Image">
                                  <span><?php echo $this->session->userdata('userName'); ?></span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="#!">
                                          <i class="ti-settings"></i> Settings
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="user-profile.html">
                                          <i class="ti-user"></i> Profile
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="email-inbox.html">
                                          <i class="ti-email"></i> My Messages
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="auth-lock-screen.html">
                                          <i class="ti-lock"></i> Lock Screen
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="<?php echo site_url('loginadmin/logout'); ?>">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
