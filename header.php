<?php
	include('libs/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo COMPANY_NAME;?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<!-- font awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  	<!-- owl carasole -->
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  	<!-- product card -->
  	<link rel="stylesheet" type="text/css" href="css/product-card.css">
  	<!-- client carasol -->
  	<link rel="stylesheet" type="text/css" href="css/client-slider.css">
  	<!-- testimonial -->
  	<link rel="stylesheet" type="text/css" href="css/testimonial.css">
  	<!-- portfolio gallery -->
  	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
  	<!-- master style -->
  	<link rel="stylesheet" type="text/css" href="css/master.style.css">

    <style type="text/css">
      .mouse-hover:hover{
          cursor: pointer;
          box-shadow: 0px 2px 19px -5px rgba(0,0,0,0.15);
          -webkit-box-shadow: 0px 2px 19px -5px rgba(0,0,0,0.15);
          -moz-box-shadow: 0px 2px 19px -5px rgba(0,0,0,0.15);
          border-radius: 7px;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="#"><?php echo COMPANY_NAME;?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BANARASI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SILK SAREE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COLLON</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CHIFFON / NET</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
        </ul>
      </div>  
  </nav>