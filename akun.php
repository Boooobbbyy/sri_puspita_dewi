<?php include('templates/head.php') ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>lighten</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;s
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
         <!-- Custom styles for this template -->
         <link href="css/floating-labels.css" rel="stylesheet">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>Website Pengepul Sampah </p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="images/Empul.gif" alt="Empul" width="80"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                            <li> <a href="home.php">Home</a> </li>
                            <li> <a href="about.php">About</a> </li>
                            <li> <a href="tc.php">Trash Collect</a> </li>
                            <li class="active"> <a href="akun.php"> Account</a> </li>
                            <li><a href="FB.php">FeedBack</a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
<!-- contact -->
<body>
<div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container h-100 pt-5">
        <div class="row align-itemes-center h-100 align-middle">
          <div class="col-6 mx-auto">
         <div class="jumbotron">
         <form class="form-login">
         <div class="text-center mb-4">
         <img class="mb-4" src="" alt="" width="90" >
         <h1 class="h3 mb-3 font-weight-normal"> Account</h1>
         <p>Account ku!</p>
        </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="First Name" placeholder="" required autofocus>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="Last Name" placeholder="" required autofocus>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" id ="email" placeholder="" required autofocus>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password1" name="password1" class="form-control" placeholder="" required>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password2"  name="password2" class="form-control" placeholder="" required>
    <label></label>
  </div>
  
  <div class="form-label-group">
    <input type="text" name="Alamat" class="form-control" placeholder="" required>
    <label></label>
  </div>

  <div class="form-label-group">
    <input type="number" name="No.hp" class="form-control" placeholder="" required>
    <label></label>
  </div>
  <div class="form-label-group">
    <select  class="form-control custom-select " name="Jenis Kelamin" class="form-control" placeholder="" required>
    <option selected disabled> </option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
    </select>
    <label></label>
  </div>
  <button type="submit" name="submit" class="btn btn-warning btn-block">Submit</button>
  <button class="btn btn-primary btn-block"><a class="text-light " href="">Log Out</a></button>
</form>
</body>
</div></div></div></div></div>
    <!-- end contact -->

<?php include('templates/foter.php') ?>