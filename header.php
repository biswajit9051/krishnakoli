<?php
	include('libs/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Krishnakoli</title>
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
      body{
        background-color: #f7f7f7;
      }
      /*header*/
      .navbar-dark .navbar-nav .nav-link{
        color: white !important;
      }
      .navbar-dark .navbar-nav .nav-link:hover{
        color: #e4e4e4 !important;
      }
      /*end header*/
      .breadcrumb.bg-none, nav.bg-none{
        background-color: transparent !important;
      }
      .text-blue{
        color: #3a9cff !important;
      }
      .bg-white{
        background-color: white !important;
      }
      .breadcrumb.bg-breadcum{
        background: rgb(149,201,254);
        background: linear-gradient(180deg, rgba(149,201,254,1) 0%, rgba(58,156,255,1) 100%);
      }
      .breadcrumb-item>a{
        color: #3a9cff !important;
      }
      .breadcrumb-item.active{
        color: #313131 !important;
      }
      .mouse-hover:hover{
          cursor: pointer;
          box-shadow: 0px 2px 19px -5px rgba(0,0,0,0.15);
          -webkit-box-shadow: 0px 2px 19px -5px rgba(0,0,0,0.15);
          -moz-box-shadow: 0px 2px 19px -5px rgba(0,0,0,0.15);
          border-radius: 7px;
      }
      .spcial-product-heading{
        font-size: .8rem;
      }
      img.spcial-product-img{
        height: 150px;
      }
      .spcial-product-gstInfo{
        font-size: .6rem;
      }
      .row.justify-content-around.pt-5.pb-5.online-support-bg-img{
        background-image: "images/support/customet-support.jpg" !important;  
        background-repeat: no-repeat; 
        background-attachment: fixed; 
        background-position: center; 
        background-size: cover;
      }
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .card-header>h6{
        font-size: .7rem;
      }
      ul.filter-area >.list-group-item{
        font-size: .7rem;
        display: block;
        vertical-align: middle;
      }
      li.list-group-item > label{
        display: block !important;
      }
      
      /* feacher image grid style */
      .grid-container-feacher {
        display: grid;
        grid-template-columns: auto auto;
        grid-gap: 5px;
        padding: 0px;
      }

      .grid-container-feacher > div {
        text-align: center;
        padding: 0 0;
      }

      .feacher-item1 {
        grid-row: 1 / 3;
      }
      /* end feacher image grid style */

      hr.kk-hr{
        width: 10%;
        margin: 0 auto;
        background-color: #3A9CFF;
        height: 1px;
      }

      li.footer_list_item>a:hover , li.footer_list_item:hover{
        color: white;
        cursor: pointer;
        text-decoration: none;
      }

      /*// Extra small devices (portrait phones, less than 576px)*/
      @media (max-width: 511px) { 
        .col-xxs-6{
          flex: 0 0 50%;
          max-width: 50%;
        }
        .col-xxs-4{
          flex: 0 0 33.333333%;
          max-width: 33.333333%;
        }

        
      }
      /*// Extra small devices (portrait phones, less than 576px)*/
      @media (max-width: 575.98px) { 
        .portfolio-tab ul li{
          display: inline;
          padding: 4px 5px;
          margin: 0 2px;
          font-size: 8px;
        }
        .col-xs-6{
          flex: 0 0 50%;
          max-width: 50%;
        }
       img.img-sm-h-400{
          height: 200px !important;
        }
        .mb-xs-2{
          margin-bottom: 1em !important;
        }

      }

      /*// Small devices (landscape phones, less than 768px)*/
      @media (max-width: 767.98px) {
        .portfolio-tab ul li{
          display: inline;
          padding: 2px 6px;
          margin: 0 3px;
        }
        .cat-card-font{
          font-size: .6rem;
        }
        img.img-size-lg-300{
          height: 300px !important;
        }
      }

      /*// Medium devices (tablets, less than 992px)*/
      @media (max-width: 991.98px) {
        img.img-size-lg-400{
          height: 300px !important;
        }
      }

      /*// Large devices (desktops, less than 1200px)*/
      @media (max-width: 1199.98px) {
        .cat-card-font{
          font-size: .7rem;
        }
        img.img-size-lg-400{
          height: 300px !important;
        }
      }
      @media (max-width: 1400px) {
        .cat-card-font{
          font-size: .7rem;
        }
        img.img-size-lg-400{
          height: 300px !important;
        }
      }
      
    </style>
    <style type="text/css">
      /*card*/
      /* card */
      .dress-card-img-top {
        width:100%;
        border-radius: 7px 7px 0 0;
      }

      .dress-card-body {
        padding:1rem;
        background: #fff;
        border-radius: 0 0 7px 7px;
      }

      .dress-card-title {
        line-height: 0.5rem;
      }

      .dress-card-crossed {
        text-decoration: line-through;
      }

      .dress-card-price {
        font-size: 1rem;
        font-weight: bold;
      }

      .dress-card-off {
        color: #3a9cff;
      }

      .dress-card-para {
        margin-bottom: 0.2rem;
        font-size: 1.0rem;
        margin-bottom: 0rem;
      }

      .dress-card {
        border-radius: 14px;
      }

      .dress-card-heart {
        font-size: 1em;
        color: #DB2763;
        margin: 4.5px;
        position: absolute;
        left: 4px;
        top: 0px;
        
      }

      .surprise-bubble {
        position: absolute;
        bottom: 12rem;
        right: 2rem;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        background: #fff;
        padding: 1rem;
        color: white;
        -webkit-transition: all 0.55s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.55s cubic-bezier(0.645, 0.045, 0.355, 1);
      }

      .surprise-bubble a {
        font-size: 0.65em;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: white;
        font-family: arial;
        text-decoration: none;
        position: absolute;
        top: 9px;
        left: 20px;
        opacity: 0;
        -webkit-transition-delay: 2s;
        /* Safari */
        transition-delay: 2s;
        -webkit-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
      }

      .surprise-bubble:hover {
        border-radius: 999rem;
        padding: 1rem;
        width: 26%;
        height: 30px;
        background: #DB2763;
        color: white;
        -webkit-transition: all 0.55s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.55s cubic-bezier(0.645, 0.045, 0.355, 1);
      }

      .surprise-bubble:hover a {
        opacity: 1;
        -webkit-transition-delay: 2s;
        /* Safari */
        transition-delay: 2s;
        -webkit-transition: opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1);
      }

      .card-button {
        text-align: center;
        text-transform: uppercase;
        font-size: 15px;
        padding: 9px;
      }
      .card-button a {
        text-decoration: none;
      }

      .card-button-inner {
        padding: 10px;
        border-radius: 3px;
      }

      .bag-button {
        background: #3a9cff;
        color: white;
      }

      .bag-button :hover{
        background: #e299b9;
      }

      .wish-button {
        border: 1px solid #3a9cff;
        color: #3a9cff;
      }
      .pointer{
        cursor: pointer;
      }
      li.list-group-item{
        padding: .15rem 1.25rem !important;
      }
      
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark">
      <a class="navbar-brand" href="#"><img src="images/logo/logo.png" alt="krishnakoli" class="img-fluid" style="width: 100px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php
              foreach ($header_li as $key => $value) {
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $value; ?>"><?php echo $key; ?></a>
                </li>
                <?php
              }
            ?>  
        </ul>
      </div>
      
  </nav>