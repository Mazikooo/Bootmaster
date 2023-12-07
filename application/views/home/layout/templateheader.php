<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Bootmaster</title>

  
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/maicons.css')?>">
  
 
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap.css')?>">
  

  <link rel="stylesheet" href="<?php echo base_url('assets/home/vendor/animate/animate.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/theme.css') ?>">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Boot<span class="text-primary">master</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('template');?>">Template</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('pricing');?>">Pricing</a>
            </li>
            
            <?php if(empty($this->session->userdata('member'))){ ?>
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="<?php echo site_url('main/login');?>">Login</a>
            </li>

            <?php } else { ?>
              <li class="nav-item">
              <a class="nav-link" >Welcome, <?php echo $this->session->userdata('member'); ?>!</a>
            </li>

              <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="<?php echo site_url('main/logout');?>">Logout</a>
            </li>
              <?php }?>  
          </ul>
        </div>

      </div>
    </nav>

   
  </header>