<?php include('header.php');?>

<div class="container">
	<div class="row">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  	<!-- Indicators -->
		  	<ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
		  	</ul>

		  	<!-- The slideshow -->
		  	<div class="carousel-inner">
			   <!--  <div class="carousel-item active text-center">
			      <img src="images/slider/slide-1.jpg" alt="Los Angeles" class="img-fluid">
			    </div> -->
			    <div class="carousel-item active text-center">
			      <img src="images/slider/slide-2.jpg" alt="banner 1" class="img-fluid">
			    </div>
			    <div class="carousel-item text-center">
			      <img src="images/slider/slide-3.jpg" alt="banner 2" class="img-fluid">
			    </div>
			    <div class="carousel-item text-center">
			      <img src="images/slider/slide-4.jpg" alt="banner 3" class="img-fluid">
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
	<!-- free shipping -->
	<div class="row pt-5 pb-5 bodyColor">
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-4">
			<div class="d-block text-center">
				<div class=""><img src="images/free_shipping/free_shipping.png" class="img-fluid w-25"></div>
				<div class="">
					<label class="text-secondary">FREE SHIPPING ALL OVER INDIA</label>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-4">
			<div class="d-block text-center">
				<div class=""><img src="images/free_shipping/free-delivery-abrot.png" class="img-fluid w-25"></div>
				<div class="">
					<label class="text-secondary">FREE SHIPPING ABOVE $275 FOR ABROAD</label>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-4">
			<div class="d-block text-center">
				<div><img src="images/free_shipping/exchange.png" class="img-fluid w-25"></div>
				<div>
					<label class="text-secondary">30 DAYS EASY EXCHANGE</label>
				</div>
			</div>
		</div>
	</div>
	<!-- end free shipping -->
	<!-- slider -->
	<div class="row d-flex justify-content-center">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center mt-5 mb-5">Featured Section</h3>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="grid-container-feacher">
			  	<div class="feacher-item1">
			  		<div id="demo1" class="carousel slide" data-ride="carousel">

					  	<!-- Indicators -->
					  	<ul class="carousel-indicators">
						    <li data-target="#demo1" data-slide-to="0" class="active"></li>
						    <li data-target="#demo1" data-slide-to="1"></li>
						    <li data-target="#demo1" data-slide-to="2"></li>
					  	</ul>

					  	<!-- The slideshow -->
					  	<div class="carousel-inner">
						    <div class="carousel-item active text-center">
						      <img src="images/banner_image/cotton_saree.jpg" alt="Los Angeles" style="height: 510px; width: 100%;">
						    </div>
						    <div class="carousel-item text-center">
						      <img src="images/banner_image/cotton_saree.jpg" alt="Chicago" style="height: 510px; width: 100%;">
						    </div>
						    <div class="carousel-item text-center">
						      <img src="images/banner_image/cotton_saree.jpg" alt="New York" style="height: 510px; width: 100%;">
						    </div>
						    <div class="carousel-item text-center">
						      <img src="images/banner_image/cotton_saree.jpg" alt="New York" style="height: 510px; width: 100%;">
						    </div>
						    <div class="carousel-item text-center">
						      <img src="images/banner_image/cotton_saree.jpg" alt="New York" style="height: 510px; width: 100%;">
						    </div>
					  	</div>

					  	<!-- Left and right controls -->
					  	<a class="carousel-control-prev" href="#demo1" data-slide="prev">
						    <span class="carousel-control-prev-icon"></span>
					  	</a>
					  	<a class="carousel-control-next" href="#demo1" data-slide="next">
						    <span class="carousel-control-next-icon"></span>
					  	</a>
					</div>
			  	</div>
			  	<div class="feacher-item2">
			  		<img src="images/banner_image/poster-1.jpg" class="img-fluid" style="height: 220px">
			  	</div>
			  	<div class="feacher-item3">
			  		<img src="images/banner_image/poster-1.jpg" class="img-fluid" style="height: 220px">
			  	</div>  
			</div>
		</div>
	</div>


	<!-- Responsive Portfolio Gallery Filter Using CSS Grid -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<section class="portfolio-section">
		      	<div class="container">
		        <h2 class="title text-center mt-5">LATEST COLLECTION</h2>
		        	<span class="hr-role"></span>
			        <div class="portfolio-tab">
			          	<ul id="filters" class="clearfix pl-0">
			              	<li class="filter active" data-filter=".tashor, .handmade-jewellery, .silk, .hand-block">ALL</li>
			              	<li class="filter" data-filter=".tashor">TASHOR</li>
			              	<li class="filter" data-filter=".handmade-jewellery">HANDMADE JEWELLERY</li>
			              	<li class="filter" data-filter=".silk">SILK</li>
			              	<li class="filter" data-filter=".hand-block">HAND BLOCK</li>
			          	</ul>
			        </div>
		        	<div class="portfolio-grid">
			          	<div class="portfolio tashor" data-cat="tashor">
				            <div class="portfolio-wrapper first">
				              <div class="portfolio-bg"></div>
				              <div class="label">
				                <div class="label-text">
				                  <h4>TASHOR</h4>
				                  <h5>COLLECTION</h5>
				                  <!-- <span class="text-category">Snippet</span> -->
				                  <a href="tashor-saree.php" class="template-btn">View</a>
				                </div>
				                <div class="label-bg"> </div>
				              </div>
				            </div>
			          	</div>
			          	<div class="portfolio handmade-jewellery" data-cat="handmade-jewellery">
				            <div class="portfolio-wrapper second">
				              <div class="portfolio-bg"></div>
				              <div class="label">
				                <div class="label-text">
				                  <h4>HANDMADE JEWELLERY</h4>
				                  <h5>COLLECTION</h5>
				                  <!-- <span class="text-category">Design</span> -->
				                  <a href="handmade-jewellery.php" class="template-btn">View</a>
				                </div>
				                <div class="label-bg"> </div>
				              </div>
				            </div>
			          	</div>
			          	<div class="portfolio silk" data-cat="silk">
				            <div class="portfolio-wrapper third">
				              <div class="portfolio-bg"></div>
				              <div class="label">
				                <div class="label-text">
				                  <h4>SILK</h4>
				                  <h5>COLLECTION</h5>
				                  <!-- <span class="text-category">Full Project</span> -->
				                  <a href="silk-sarees.php" class="template-btn">View</a>
				                </div>
				                <div class="label-bg"> </div>
				              </div>
				            </div>
			          	</div>
			          	<div class="portfolio hand-block" data-cat="hand-block">
				            <div class="portfolio-wrapper forth">
				              <div class="portfolio-bg"></div>
				              <div class="label">
				                <div class="label-text">
				                  <h4>HAND BLOCK</h4>
				                  <h5>COLLECTION</h5>
				                  <!-- <span class="text-category">Design</span> -->
				                  <a href="hand-block.php" class="template-btn">View</a>
				                </div>
				                <div class="label-bg"> </div>
				              </div>
				            </div>
			          	</div>
			          	<div class="portfolio tashor" data-cat="tashor">
				            <div class="portfolio-wrapper fifth">
				              <div class="portfolio-bg"></div>
				              <div class="label">
				                <div class="label-text">
				                  <h4>TASHOR</h4>
				                  <h5>COLLECTION</h5>
				                  <!-- <span class="text-category">Full Project</span> -->
				                  <a href="tashor-saree.php" class="template-btn">View</a>
				                </div>
				                <div class="label-bg"> </div>
				              </div>
				            </div>
			          	</div>
			          	<div class="portfolio handmade-jewellery" data-cat="handmade-jewellery">
				            <div class="portfolio-wrapper sixth">
				              <div class="portfolio-bg"></div>
				              <div class="label">
				                <div class="label-text">
				                  <h4>HANDMADE JEWELLERY</h4>
				                  <h5>COLLECTION</h5>
				                  <!-- <span class="text-category">Snippet</span> -->
				                  <a href="handmade-jewellery.php" class="template-btn">View</a>
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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3 class="text-center mt-5 mb-5">OUR PRODUCT</h3>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Pure Tashor Top And Dupatta/WhatsApp Image 2021-08-04 at 9.37.25 PM.jpeg">
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
		            <h3 class="title"><a href="#">Tashor Top And Dupatta</a></h3>
		            <div class="price"><span>900.00</span> 656.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Pure Tashor Jari Border Exclusive Collection/WhatsApp Image 2021-08-04 at 9.32.03 PM (2).jpeg">
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
		            <h3 class="title"><a href="#">Pure Tashor Jari Border</a></h3>
		            <div class="price"><span>1500.00</span> 1380.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Pure Bishnupuri Silk Exclusive Collection/WhatsApp Image 2021-08-04 at 9.34.55 PM (1).jpeg">
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
		            <h3 class="title"><a href="#">Pure Bishnupuri Silk</a></h3>
		            <div class="price"><span>780.00</span> 700.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Handmade Jewellery Collection/WhatsApp Image 2021-08-04 at 9.42.11 PM.jpeg">
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
		            <h3 class="title"><a href="#">Handmade Jewellery</a></h3>
		            <div class="price"><span>500.00</span> 466.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Hand Ari Work On Bishnupuri Katan Silk/WhatsApp Image 2021-08-04 at 9.38.45 PM.jpeg">
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
		            <h3 class="title"><a href="#">Bishnupuri Katan Silk</a></h3>
		            <div class="price"><span>900.00</span> 640.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Deshi Tashor Hand Fulkari Exclusive Collection/WhatsApp Image 2021-08-04 at 9.41.10 PM (1).jpeg">
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
		            <h3 class="title"><a href="#">Deshi Tashor Hand Fulkari</a></h3>
		            <div class="price"><span>1990.00</span> 1660.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Bhagalpuri Deshi Tashor Embroidery Exclusive Collection/WhatsApp Image 2021-08-04 at 9.32.42 PM (1).jpeg">
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
		            <h3 class="title"><a href="#">Tashor Embroidery</a></h3>
		            <div class="price"><span>950.00</span> 616.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
		    <div class="product-grid">
		        <div class="product-image">
		            <a href="#" class="image">
		                <img class="pic-1 img-size-lg-400 img-size-lg-300" src="images/Deshi Tashor Hand Fulkari Exclusive Collection/WhatsApp Image 2021-08-04 at 9.41.09 PM.jpeg">
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
		            <h3 class="title"><a href="#">Deshi Tashor Hand Fulkari</a></h3>
		            <div class="price"><span>900.00</span> 760.00</div>
		            <!-- <a class="add-to-cart" href="#">add to cart</a> -->
		        </div>
		    </div>
		</div>
	</div>
	<!-- end photo card view -->

	<!-- client carasol -->
	<div class="row pt-5 pb-5">
		<div class="col-12">
			<div class="carousel-client">
				<div class="slide"><img src="images/client_logo/1.png"></div>
				<div class="slide"><img src="images/client_logo/2.png"></div>
				<div class="slide"><img src="images/client_logo/3.png"></div>
				<div class="slide"><img src="images/client_logo/4.png"></div>
				<div class="slide"><img src="images/client_logo/5.png"></div>
				<div class="slide"><img src="images/client_logo/6.png"></div>
				<div class="slide"><img src="images/client_logo/7.png"></div>
				<div class="slide"><img src="images/client_logo/8.png"></div>
				<div class="slide"><img src="images/client_logo/1.png"></div>
				<div class="slide"><img src="images/client_logo/2.png"></div>
			</div>
		</div>
	</div>
	<!-- end client carasol -->

	<!-- our catagory -->
	<div class="row pt-5 pb-5">
		<div class="col-12 text-center">
			<h3 class="mb-5">CATEGORY</h3>
		</div>
		<div class="col-12">
			<!--OUR CATEGORIES-->
			<div id="demo2" class="carousel slide" data-ride="carousel">

			  	<!-- Indicators -->
			  	<ul class="carousel-indicators">
				    <li data-target="#demo2" data-slide-to="0" class="active"></li>
				    <li data-target="#demo2" data-slide-to="1"></li>
				    <li data-target="#demo2" data-slide-to="2"></li>
			  	</ul>

			  	<!-- The slideshow -->
			  	<div class="carousel-inner">
				    <div class="carousel-item active text-center justify-content-center">
				    	<div class="row">
					      	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
					      		<a href="tashor-saree.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/banarasi1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Tashor Top And Dupatta</h5>
									  	</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
								<a href="tashor-saree.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/chiffon.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Tashor Jari Border </h5>
									  	</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
								<a href="handmade-jewellery.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/cotton.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Handmade Jewellery</h5>
									  	</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
								<a href="silk-sarees.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/silk1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Katan Silk</h5>
									  	</div>
									</div>
								</a>
							</div>
						</div>
				    </div>
				   <div class="carousel-item text-center">
				   		<div class="row">
					      	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
					      		<a href="tashor-saree.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/south-silk1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Deshi Tashor Hand Fulkari</h5>
									  	</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
								<a href="tashor-saree.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/silk.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Bhagalpuri Deshi Tashor</h5>
									  	</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
								<a href="hand-block.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/chiffon.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Cotton Weaved Hand Block Print</h5>
									  	</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-2 mb-2">
								<a href="tashor-saree.php">
									<div class="card mouse-hover">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/south-silk1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title cat-card-font">Deshi Tashor Hand Fulkari</h5>
									  	</div>
									</div>
								</a>
							</div>
						</div>
				    </div>
			  	</div>

			  	<!-- Left and right controls -->
			  	<a class="carousel-control-prev" href="#demo2" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
			  	</a>
			  	<a class="carousel-control-next" href="#demo2" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
			  	</a>
			</div>
		</div>
	</div>
	<!-- end our category -->

	<!-- online supports -->
	<div class="row justify-content-around pt-5 pb-5 online-support-bg-img">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="media mt-1 mb-1 justify-content-center">
				<i class="fas fa-3x fa-headset mr-3"></i>
			  	<div class="media-body align-self-center">
			    	<h6 class="mt-0 cat-card-font">ONLINE SUPPORT 20/7</h6>
			  	</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="media mt-1 mb-1">
			  	<i class="far fa-3x fa-smile mr-3"></i>
			  	<div class="media-body align-self-center">
			    	<h6 class="mt-0 cat-card-font">OVER ONE LAKH SATISFIED CUSTOMERS</h6>
			  	</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="media mt-1 mb-1">
			  	<i class="fab fa-3x fa-google-pay mr-3"></i>
			  	<div class="media-body align-self-center ">
			    	<h6 class="mt-0 cat-card-font">100% SECURED PAYMENT GATEWAY</h6>
			  	</div>
			</div>
		</div>
	</div>
	<!-- end online supports -->

	<!-- spcial and must have product -->
	<!-- <div class="row pt-5 pb-5">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card mt-1 mb-1">
				<div class="card-body">
					<h5 class="mb-4">SPECIAL PRODUCT</h5>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading">SOFT DHAKAI JAMDANI SAREE (ADI31921)</h5>

				    		<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del></li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	
					    	<p class="spcial-product-gstInfo">*All prices exclusive of GST</p>
					    	
					  	</div>
					</div>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080010.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading spcial-product-img">SOFT DHAKAI JAMDANI SAREE (ADI31922)</h5>
					    	<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del> </li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	<p class="spcial-product-gstInfo">*All prices exclusive of GST</p>
					  	</div>
					</div>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading">SOFT DHAKAI SILK SAREE (ADI319442)</h5>
					    	<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del> </li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	<p class="spcial-product-gstInfo d-block">*All prices exclusive of GST</p>
					  	</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<a href="#">SEE ALL</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card mt-1 mb-1">
				<div class="card-body">
					<h5 class="mb-4">SPECIAL PRODUCT</h5>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading">SOFT DHAKAI JAMDANI SAREE (ADI31921)</h5>

				    		<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del></li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	
					    	<p class="spcial-product-gstInfo">*All prices exclusive of GST</p>
					    	
					  	</div>
					</div>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080010.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading spcial-product-img">SOFT DHAKAI JAMDANI SAREE (ADI31922)</h5>
					    	<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del> </li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	<p class="spcial-product-gstInfo">*All prices exclusive of GST</p>
					  	</div>
					</div>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading">SOFT DHAKAI SILK SAREE (ADI319442)</h5>
					    	<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del> </li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	<p class="spcial-product-gstInfo d-block">*All prices exclusive of GST</p>
					  	</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<a href="#">SEE ALL</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card mt-1 mb-1">
				<div class="card-body">
					<h5 class="mb-4">SPECIAL PRODUCT</h5>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading">SOFT DHAKAI JAMDANI SAREE (ADI31921)</h5>

				    		<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del></li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	
					    	<p class="spcial-product-gstInfo">*All prices exclusive of GST</p>
					    	
					  	</div>
					</div>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080010.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading spcial-product-img">SOFT DHAKAI JAMDANI SAREE (ADI31922)</h5>
					    	<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del> </li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	<p class="spcial-product-gstInfo">*All prices exclusive of GST</p>
					  	</div>
					</div>
					<div class="media mouse-hover mt-2 mb-2 p-3">
					  	<img class="align-self-center mr-3 spcial-product-img" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
					  	<div class="media-body">
					    	<h5 class="mt-0 spcial-product-heading">SOFT DHAKAI SILK SAREE (ADI319442)</h5>
					    	<ul class="list-inline">
				    			<li class="list-inline-item"> &#8377; <del>45256</del> </li>
				    			<li class="list-inline-item"> &#8377; 500</li>
				    		</ul>
					    	<p class="spcial-product-gstInfo d-block">*All prices exclusive of GST</p>
					  	</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<a href="#">SEE ALL</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end spcial and must have product -->
</div>
<div class="container-fluid">
	<!-- testimonials -->
	<div class="row testimonial-area">
		<div class="container">
			<div class="sec-title white-title">
				<h4>Testimonials</h4>
				<p>WHAT CLIENT'S SAY?</p>

			</div>
			<div class="testimonial-content owl-carousel">
				<!-- Single Testimonial -->
				<div class="single-testimonial">
					<div class="round-1 round"></div>
					<div class="round-2 round"></div>
					<p>The product is exactly the same as what is shown in the picture, which is not the case of many online clothing sites. Very impressed by the purchase. Perfect for gifting purpose too.</p>
					<div class="client-info">
						<div class="client-video">
							<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
						</div>
						<div class="client-details">
							<h6>Paromita Mukherjee</h6>
							<!-- <span>Designer, LLCG Team</span> -->
						</div>
					</div>

				</div>
				<!-- Single Testimonial -->
				<div class="single-testimonial">
					<div class="round-1 round"></div>
					<div class="round-2 round"></div>
					<p>Bought a number of saris and jewellery from here for Pujo. All of them were very well packed and delivered to my house. Very good collection. Highly recommended.</p>
					<div class="client-info">
						<div class="client-video">
							<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
						</div>
						<div class="client-details">
							<h6>Soma Paul</h6>
						</div>
					</div>

				</div>
				<!-- Single Testimonial -->
				<div class="single-testimonial">
					<div class="round-1 round"></div>
					<div class="round-2 round"></div>
					<p>Krishnakoli can be a big saviour for occasions and festivals. All the sarees and handbags that I had to buy for my sister's wedding was from here. Great service, very satisfied.</p>
					<div class="client-info">
						<div class="client-video">
							<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
						</div>
						<div class="client-details">
							<h6>Sheema Sircar</h6>
						</div>
					</div>

				</div>
				<!-- Single Testimonial -->
				<div class="single-testimonial">
					<div class="round-1 round"></div>
					<div class="round-2 round"></div>
					<p>You don't have to think twice before buying anything from Krishnakoli. Huge range of collection for various kinds of sarees, jewellery, and handbags. Very trusted service; you don't have to worry about getting cheated on with the price and delivery.</p>
					<div class="client-info">
						<div class="client-video">
							<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
						</div>
						<div class="client-details">
							<h6>Atri Saha</h6>
						</div>
					</div>

				</div>
				<!-- Single Testimonial -->
				<div class="single-testimonial">
					<div class="round-1 round"></div>
					<div class="round-2 round"></div>
					<p>Krishnakoli never fails to impress with their amazing collection, great packaging and fast delivery. Looking forward to order more.</p>
					<div class="client-info">
						<div class="client-video">
							<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
						</div>
						<div class="client-details">
							<h6>Nilanjana Chakraborty.</h6>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end testimonials -->




	<!-- Explore New Designer Sarees Online Collection -->
	<div class="row pt-5 pb-5 justify-content-center">
		<div class="col-10">
			<div class="d-flex justify-content-center">
				<?php echo COMPANY_NAME;?>
			</div>
			<h3>Explore New Designer Sarees Online Collection at Krishnakoli</h3>
			<p class="text-justify">
			“Saree is an art and you are the canvas” This is an eternal truth that there are few things which never go out of style and delicate women in elegant saree is one of them. But it is also true that fashion changes very quickly and for this reason Adi Mohini Mohan Kanjilal, one of the largest ethnic store in India bringing perfect fashion that stays forever. Why Choose Us? “A woman should have two things – Class and Charm” You know that life is too short to be same person every day. Keeping in mind the growing demand of online shopping, Krishnakoli has bring you the new and fashionable way of shopping. In our online store you can do online shopping with great conviction. You can quickly find your desired clothes with best deals and supports in our website. Here you will get latest design and trendy sarees which are not even available at the local market. If you have a special place for Bengali sarees in your mind then you can feast on our latest Silk Sarees, Banarasi sarees, Dhakai Jamdani Sarees collections. You will surely become delighted if you see our eccentric collection of outfits. Now, do not worry about attending a wedding or parties. We have an exotic collection of designer sarees, party sarees and reception sarees that truly make you look more alluring. Apart from this, our embroideried fancy sarees will truly enhance your charm. In our online store you will get a plethora of beautiful traditional handloom Sarees. Modern generation can buy from our trendy ethnic collection of chiffon sarees whose radiance, vigor and variety is outstanding. Apart from this, they can also buy modern Indo-western dresses, like Salwar suits, designer Lehengas, Palazzos etc which are more stylish and influential. South India is a treasure trove of rich culture and authentic clothes. You can have a look on our latest collection of unique South Indian Sarees like Kanjivaram, Arni Silks, Opara silks which give you an out-standing look. Our happiness depends on your shopping experience with us. We are aiming to provide 100% genuine quality products, timely delivery and exclusive discounts on every product. Check out our online store daily and stay updated with latest fashion trends.
			</p>
		</div>
	</div>
	<!-- end Explore New Designer Sarees Online Collection -->

</div>


<?php include('footer.php');?>