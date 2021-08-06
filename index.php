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
  	<style type="text/css">
  		footer{
  			background-color: #343a40;
  		}

  		.copyright_section_bg{
  			background-color: #212529;
  		}
  		li.footer_list_heading{
  			color: #868e96;
  			font-size: 1rem;
  		}
  		li.footer_list_item{
  			color: #dee2e6;
  			font-size: .8rem;
  		}

  	</style>
  	<style type="text/css">
  		@media (max-width: 575.98px) {

		  	h4 {
		    	font-size: 20px;
		  	}
		  	span,p,li,a {
		    	font-size: 14px;
		  	}
		}
		@media (min-width: 576px) and (max-width: 767.98px) {
		  
		  	h4 {
		    	font-size: 20px;
		  	}
		  	span,
		  p,
		  li,
		  	a {
		    	font-size: 14px;
		  	}
		}

		/*@media (min-width: 576px) {
		  .container {
		      max-width: 540px;
		  }
		}
		@media (min-width: 768px) {
		  .container {
		      max-width: 720px;
		  }
		}
		@media (min-width: 992px) {
		  .container {
		      max-width: 960px;
		  }
		}
		@media (min-width: 1200px) {
		  .container {
		      max-width: 1140px;
		  }
		}*/
.template-btn {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  padding: 12px 20px;
  display: inline-block;
  background: transparent;
  cursor: pointer;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
}
.template-btn:hover {
  color: white;
  background: #f28500;
}
.portfolio-section {
  padding-top: 30px;
  transition: 1.3s;
  box-sizing: border-box;
  height: auto;
}

.portfolio-tab ul {
  text-align: center;
  margin-top: 50px;
}
.portfolio-tab ul li {
  color: #000;
  background: transparent;
  display: inline;
  font-weight: 500;
  text-transform: uppercase;
  padding: 12px 16px;
  border: 2px solid #e30b5d;
  margin: 0 5px;
  cursor: pointer;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-tap-highlight-color: transparent;
}
@media (max-width: 575.98px) {
  .portfolio-tab ul li {
    display: block;
    margin: 10px auto;
    max-width: 200px;
  }
}
.portfolio-tab ul li:hover {
  background: #e30b5d;
  color: #fff
}
.portfolio-tab ul .active {
  background: #e30b5d;
  color: #fff
}
.clearfix:after {
  display: table;
  content: " ";
  clear: both;
}
.portfolio-grid {
  margin-top: 50px;
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(3, 1fr);
  grid-auto-rows: 300px;
}
@media (max-width: 768px) {
  .portfolio-grid {
    grid-template-columns: repeat(1, 1fr);
  }
}
@media only screen and (min-width: 768.1px) and (max-width: 991px) {
  .portfolio-grid {
    grid-template-columns: repeat(2, 1fr);
  }		
  }
.portfolio-grid .portfolio {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	display:none;
	overflow:hidden;
}
.portfolio-wrapper {
  overflow:hidden;
  position: relative !important;
  cursor:pointer;
}
.portfolio-bg {
  width: 100%;
  height: 300px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  transition: 1s;
  transform: scale(1)
}
.portfolio:hover .portfolio-bg{
  transform: scale(1.2)
}
.first .portfolio-bg{
  background-image: url('https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?cs=srgb&dl=accounts-applications-apps-267350.jpg&fm=jpg');
  
}
.second .portfolio-bg{
  background-image: url('https://images.pexels.com/photos/1053687/pexels-photo-1053687.jpeg?cs=srgb&dl=art-art-materials-artwork-1053687.jpg&fm=jpg');
}
.third .portfolio-bg{
  background-image: url('https://images.pexels.com/photos/6224/hands-people-woman-working.jpg?cs=srgb&dl=brainstorming-campaign-collaborate-6224.jpg&fm=jpg');
  
}
.portfolio .label {
  position: absolute;
  width: 100%;
  height:100%;
  bottom: 0;
  transition: 0.5s;
  opacity: 0;
  visibility: hidden
}

.portfolio .label-bg {
  background: #232323;
  opacity: 0.7;
  width: 100%;
  height:100%;
  position: absolute;
  top:0;
  left:0;
  transition: 1px;
}
.portfolio .label-text {
  color:#fff;
  position: relative;
  z-index:500;
  padding:50px 20px;
}
.portfolio:hover .label {
  opacity: 1;
  visibility: visible;
}
.portfolio .text-category {
  display:block;
}
.portfolio .template-btn {
  background: #e30b5d;
  border: 1px solid #e30b5d;
  text-decoration: none;
  margin-top: 20px;
  font-weight: 500
}
  	</style>

  	<!-- product card -->
  	<style type="text/css">
  		.product-grid{
    font-family: 'Poppins', sans-serif;
    text-align: center;
    border-radius: 15px;
    border: 1px solid #e7e7e7;
    overflow: hidden;
    transition: all 0.4s ease-out;
}
.product-grid:hover{ box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.1); }
.product-grid .product-image{ position: relative; }
.product-grid .product-image a.image{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-grid .product-discount-label{
    color: #fff;
    background: #78a206;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    padding: 2px 8px;
    border-radius: 5px;
    position: absolute;
    top: 12px;
    left: 12px;
}
.product-grid .product-links{
    width: 145px;
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 65%;
    left: 50%;
    transition: all 0.4s ease 0s;
}
.product-grid:hover .product-links{
    opacity: 1;
    top: 50%;
}
.product-grid .product-links li{
    display: inline-block;
    margin: 0 2px;
}
.product-grid .product-links li a{
    color: #2c2c2c;
    background: #fff;
    font-size: 16px;
    line-height: 42px;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    display: block;
    position: relative;
    transition: all 0.4s ease-out 0s;
}
.product-grid .product-links li a:hover{
    color: #fff;
    background: #78a206;
    box-shadow: 1px 1px 30px 0 rgba(0, 0, 0, 0.2);
}
.product-grid .product-links li a:before,
.product-grid .product-links li a:after{
    content: attr(data-tip);
    color: #fff;
    background-color: #555;
    font-size: 12px;
    line-height: 18px;
    padding: 5px 10px;
    white-space: nowrap;
    display: none;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -40px;
    transition: all 0.3s ease 0s;
}
.product-grid .product-links li a:after{
    content: '';
    height: 10px;
    width: 10px;
    padding: 0;
    transform: translateX(-50%) rotate(45deg);
    top: -18px;
    z-index: -1;
}
.product-grid .product-links li a:hover:before,
.product-grid .product-links li a:hover:after{
    display: block;
}
.product-grid .product-content{
    padding: 12px 12px 15px;
    position: relative;
}
.product-grid .rating{
    padding: 0;
    margin: 0 0 8px;
    list-style: none;
}
.product-grid .rating li{
    color: #78a206;
    font-size: 14px;
}
.product-grid .rating .far{ color: #808080; }
.product-grid .title{
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 15px;
}
.product-grid .title a{
    color: #2c2c2c;
    transition: all 0.3s ease 0s;
}
.product-grid .title a:hover{ color: #78a206; }
.product-grid .price{
    color: #78a206;
    font-size: 17px;
    font-weight: 600;
    display: block;
    transition: all 0.4s ease-in-out;
}
.product-grid .price span{
    color: #999;
    font-weight: 500;
    text-decoration: line-through;
}
.product-grid:hover .price{ opacity: 0; }
.product-grid .add-to-cart{
    color: #fff;
    background-color: #78a206;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 40px;
    width: 140px;
    height: 40px;
    border-radius: 50px;
    opacity: 0;
    transform: translateX(-50%);
    position: absolute;
    bottom: 50px;
    left: 50%;
    transition: all .4s ease-out;
}
.product-grid .add-to-cart:hover{ background-color: #2f2f2f; }
.product-grid:hover .add-to-cart{
    opacity: 1;
    bottom: 8px;
}
@media screen and (max-width:1200px){
    .product-
  	</style>
  	<!-- client carasol -->
  	<style type="text/css">
  		/****************/
		/*	 BX-SLIDER 	*/
		/****************/
		section.client {
			padding:4em 0em;
			background-color: #eee;

		}
		section.client .section-title {
			margin-bottom: 6em;
		}
		.bx-controls {
			position: relative;
		}
		.bx-wrapper{
			margin: auto !important;
		}
		.bx-wrapper .bx-pager {
		    text-align: center;
		    padding-top: 30px;
		    
		}
		.bx-wrapper .bx-pager .bx-pager-item, .bx-wrapper .bx-controls-auto .bx-controls-auto-item {
		    display: inline-block;
		    *zoom: 1;
		    *display: inline;
		}
		.bx-wrapper .bx-pager.bx-default-pager a {
		    background: #666;
		    text-indent: -9999px;
		    display: block;
		    width: 10px;
		    height: 10px;
		    margin: 0 5px;
		    outline: 0;
		    -moz-border-radius: 5px;
		    -webkit-border-radius: 5px;
		    border-radius: 5px;
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
		        	<a class="nav-link" href="#">HOME</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">SILK</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">COLLON</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">NET</a>
		      	</li>    
		    </ul>
	  	</div>  
	</nav>
	<div class="container-fluid">
		<!-- slider -->
		<div class="row">
			<div class="col-12">
				<div id="demo" class="carousel slide" data-ride="carousel">

				  	<!-- Indicators -->
				  	<ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
				  	</ul>

				  	<!-- The slideshow -->
				  	<div class="carousel-inner">
					    <div class="carousel-item active text-center">
					      <img src="images/banner_image/slide-1.jpg" alt="Los Angeles">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-2.jpg" alt="Chicago">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-3.jpg" alt="New York">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-4.jpg" alt="New York">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-5.jpg" alt="New York">
					    </div>
				  	</div>

				  	<!-- Left and right controls -->
				  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
				  	</a>
				  	<a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
				  	</a>
				</div>
			</div>
		</div>
		<!-- end slider -->

		<!-- Responsive Portfolio Gallery Filter Using CSS Grid -->
		<div class="row">
			<div class="col-12">
				
				<section class="portfolio-section">
			      	<div class="container">
			<!--         <h2 class="title">Portfolio</h2> -->
			        	<span class="hr-role"></span>
				        <div class="portfolio-tab">
				          	<ul id="filters" class="clearfix">
					              <li class="filter active" data-filter=".snippet, .design, .full-project">all</li>
					              <li class="filter" data-filter=".snippet">Snippets</li>
					              <li class="filter" data-filter=".design">Design</li>
					              <li class="filter" data-filter=".full-project">Full Project</li>
				          	</ul>
				        </div>
			        	<div class="portfolio-grid">
				          	<div class="portfolio snippet" data-cat="snippet">
					            <div class="portfolio-wrapper first">
					              <div class="portfolio-bg"></div>
					              <div class="label">
					                <div class="label-text">
					                  <h4>Project Name</h4>
					                  <span class="text-category">Snippet</span>
					                  <a href="#" class="template-btn" target="_blank">View</a>
					                </div>
					                <div class="label-bg"> </div>
					              </div>
					            </div>
				          	</div>
				          	<div class="portfolio design" data-cat="design">
					            <div class="portfolio-wrapper second">
					              <div class="portfolio-bg"></div>
					              <div class="label">
					                <div class="label-text">
					                  <h4>Project Name</h4>
					                  <span class="text-category">Design</span>
					                  <a href="#" class="template-btn" target="_blank">View</a>
					                </div>
					                <div class="label-bg"> </div>
					              </div>
					            </div>
				          	</div>
				          	<div class="portfolio full-project" data-cat="full-project">
					            <div class="portfolio-wrapper third">
					              <div class="portfolio-bg"></div>
					              <div class="label">
					                <div class="label-text">
					                  <h4>Project Name</h4>
					                  <span class="text-category">Full Project</span>
					                  <a href="#" class="template-btn" target="_blank">View</a>
					                </div>
					                <div class="label-bg"> </div>
					              </div>
					            </div>
				          	</div>
				          	<div class="portfolio design" data-cat="design">
					            <div class="portfolio-wrapper second">
					              <div class="portfolio-bg"></div>
					              <div class="label">
					                <div class="label-text">
					                  <h4>Project Name</h4>
					                  <span class="text-category">Design</span>
					                  <a href="#" class="template-btn" target="_blank">View</a>
					                </div>
					                <div class="label-bg"> </div>
					              </div>
					            </div>
				          	</div>
				          	<div class="portfolio full-project" data-cat="full-project">
					            <div class="portfolio-wrapper third">
					              <div class="portfolio-bg"></div>
					              <div class="label">
					                <div class="label-text">
					                  <h4>Project Name</h4>
					                  <span class="text-category">Full Project</span>
					                  <a href="#" class="template-btn" target="_blank">View</a>
					                </div>
					                <div class="label-bg"> </div>
					              </div>
					            </div>
				          	</div>
				          	<div class="portfolio snippet" data-cat="snippet">
					            <div class="portfolio-wrapper first">
					              <div class="portfolio-bg"></div>
					              <div class="label">
					                <div class="label-text">
					                  <h4>Project Name</h4>
					                  <span class="text-category">Snippet</span>
					                  <a href="#" class="template-btn" target="_blank">View</a>
					                </div>
					                <div class="label-bg"> </div>
					              </div>
					            </div>
				          	</div>
			        	</div>
			      	</div>
			    </section>
			</div>
		</div>
		<!-- end Responsive Portfolio Gallery Filter Using CSS Grid -->

		<!-- photo card view -->
		<div class="row mt-5 mb-5">
			<div class="col-12">
				<h3 class="text-center mt-5 mb-5">OUR PRODUCT</h3>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/13901220/2021/4/12/ecaac2a1-036c-4c1d-b5a9-2c025a235a7b1618227724245-Saree-Mall-Rust-Organza-Ethnic-Floral-Print-Casual-Wear-Sare-1.jpg" style="height: 400px;">
			            </a>
			            <span class="product-discount-label">-33%</span>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Men's Blazer</a></h3>
			            <div class="price"><span>$90.00</span> $66.00</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://i.pinimg.com/550x/8e/22/d2/8e22d29cef155013a9e877730ba156c2.jpg" style="height: 400px;">
			            </a>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Women's Shirt</a></h3>
			            <div class="price">$79.90</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/13901220/2021/4/12/ecaac2a1-036c-4c1d-b5a9-2c025a235a7b1618227724245-Saree-Mall-Rust-Organza-Ethnic-Floral-Print-Casual-Wear-Sare-1.jpg" style="height: 400px;">
			            </a>
			            <span class="product-discount-label">-33%</span>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Men's Blazer</a></h3>
			            <div class="price"><span>$90.00</span> $66.00</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://i.pinimg.com/550x/8e/22/d2/8e22d29cef155013a9e877730ba156c2.jpg" style="height: 400px;">
			            </a>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Women's Shirt</a></h3>
			            <div class="price">$79.90</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/13901220/2021/4/12/ecaac2a1-036c-4c1d-b5a9-2c025a235a7b1618227724245-Saree-Mall-Rust-Organza-Ethnic-Floral-Print-Casual-Wear-Sare-1.jpg" style="height: 400px;">
			            </a>
			            <span class="product-discount-label">-33%</span>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Men's Blazer</a></h3>
			            <div class="price"><span>$90.00</span> $66.00</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://i.pinimg.com/550x/8e/22/d2/8e22d29cef155013a9e877730ba156c2.jpg" style="height: 400px;">
			            </a>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Women's Shirt</a></h3>
			            <div class="price">$79.90</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/13901220/2021/4/12/ecaac2a1-036c-4c1d-b5a9-2c025a235a7b1618227724245-Saree-Mall-Rust-Organza-Ethnic-Floral-Print-Casual-Wear-Sare-1.jpg" style="height: 400px;">
			            </a>
			            <span class="product-discount-label">-33%</span>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Men's Blazer</a></h3>
			            <div class="price"><span>$90.00</span> $66.00</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-6">
			    <div class="product-grid">
			        <div class="product-image">
			            <a href="#" class="image">
			                <img class="pic-1" src="https://i.pinimg.com/550x/8e/22/d2/8e22d29cef155013a9e877730ba156c2.jpg" style="height: 400px;">
			            </a>
			            <ul class="product-links">
			                <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
			                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
			                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
			            </ul>
			        </div>
			        <div class="product-content">
			            <ul class="rating">
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="fas fa-star"></li>
			                <li class="far fa-star"></li>
			            </ul>
			            <h3 class="title"><a href="#">Women's Shirt</a></h3>
			            <div class="price">$79.90</div>
			            <a class="add-to-cart" href="#">add to cart</a>
			        </div>
			    </div>
			</div>
		</div>
		<!-- end photo card view -->

		<!-- client carasol -->
		<div class="row">
			<div class="col-12">
				<div class="carousel-client">
					<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo1.png"></div>
					<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
					<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
					<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo1.png"></div>
					<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
					<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
				</div>
			</div>
		</div>
		<!-- end client carasol -->

		<!-- Exclusive Banarasi Sarees Online Shopping -->
		<div class="row pt-5 pb-5">
			<div class="col-12">
				<h3>Exclusive Banarasi Sarees Online Shopping</h3>
				<p>
				Banarasi Sarees are famous all over the world for its lustrous and incomparable beauty. Be it young, old, curvy or lean body a Pure Banarasi silk saree bring out the best in any woman. Our Exclusive Banarasi wedding sarees collection are intricately designed and inspired by royal artwork. The gold and silver brocade, or zari work has made this saree a perfect bridal attire. Shop from the premium range of Designer Banarasi and Traditional Banarasi sarees online at Adi Mohini Mohan Kanjilal.
				</p>
			</div>
		</div>
		<!-- end Exclusive Banarasi Sarees Online Shopping -->


	</div>
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row pt-5">
				<div class="col-12 text-center">
					<a class="navbar-brand" href="#"><?php echo COMPANY_NAME; ?></a>
				</div>
				<div class="col-12 text-center">
					<ul class="list-inline">
						<li class="list-inline-item">Follow Us</li>
						<li class="list-inline-item"><i class="fab fa-facebook-square"></i></li>
						<li class="list-inline-item"><i class="fab fa-twitter-square"></i></li>
						<li class="list-inline-item"><i class="fab fa-youtube-square"></i></li>
					</ul>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-4">
					<ul class="list-unstyled">
						<li class="footer_list_heading">CONTACT US</li>
						<li class="footer_list_item"><?php echo COMPANY_ADDRESS; ?></li>
						<li class="footer_list_item">(+91) 83369 123457</li>
						<li class="footer_list_item">(+91) 33225 12345</li>
						<li class="footer_list_item">Infinity Square, Sevoke Rd, 2nd Mile, Near PC Mittal Bus Stop, Siliguri, West Bengal 734001</li>
						<li class="footer_list_item">care@abc.in</li>
						<li class="footer_list_item">Map Direction <i class="fas fa-external-link-alt"></i></li>
					</ul>
				</div>
				<div class="col-2">
					<ul class="list-unstyled">
						<li class="footer_list_heading">STORE</li>
						<li class="footer_list_item">My account</li>
						<li class="footer_list_item">Order history</li>
						<li class="footer_list_item">Wish list</li>
						<li class="footer_list_item">About Us</li>
						<li class="footer_list_item">Site map</li>
					</ul>
				</div>
				<div class="col-3">
					<ul class="list-unstyled">
						<li class="footer_list_heading">INFORMATION</li>
						<li class="footer_list_item">Special products</li>
						<li class="footer_list_item">Offers</li>
						<li class="footer_list_item">Advanced Search</li>
						<li class="footer_list_item">Blog</li>
						<li class="footer_list_item">Contact Us</li>
					</ul>
				</div>
				<div class="col-3">
					<ul class="list-unstyled">
						<li class="footer_list_heading">HELP & POLICIES</li>
						<li class="footer_list_item">Terms & Conditions</li>
						<li class="footer_list_item">Privacy Policy</li>
						<li class="footer_list_item">Shipping & Delivery</li>
						<li class="footer_list_item">Return & Cancellation</li>
						<li class="footer_list_item">CUSTOMER SUPPORT : 9804149917</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row copyright_section_bg">
				<div class="col-12">
					<div class="d-flex justify-content-between pt-3">
						<div>
							<p class="text-white">Copyright © 2021 <?php echo COMPANY_NAME; ?> Pvt. Ltd.</p>
						</div>
						<div>
							<p class="text-white">Developed by IPS</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- end footer -->
	

	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<!-- responsive albume -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
  	<!-- client carasol -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.js"></script>
  	
  	<!-- responsive albume -->
  	<script type="text/javascript">
  		$(function () {
			var filterList = {
				init: function () {
					// MixItUp plugin
					// http://mixitup.io
					$('.portfolio-grid').mixItUp({
						selectors: {
			  			  	target: '.portfolio',
			  			  	filter: '.filter'	
		  		  		},
		  		  		load: {
		    		  		filter: 'all' // show app tab on first load
		    			}     
					});								
				}
			};
			// Run the show!
			filterList.init();
		});	
  	</script>

  	<!-- client carasol -->
  	<script type="text/javascript">
  		$('.carousel-client').bxSlider({
			auto: true,
		    slideWidth: 234,
		    minSlides: 2,
		    maxSlides: 5,
		    controls: false
		});

  	</script>

</body>
</html>

