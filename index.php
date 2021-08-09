<?php include('header.php');?>


	
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
					      <img src="images/banner_image/slide-1.jpg" alt="Los Angeles" class="img-fluid">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-2.jpg" alt="Chicago" class="img-fluid">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-3.jpg" alt="New York" class="img-fluid">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-4.jpg" alt="New York" class="img-fluid">
					    </div>
					    <div class="carousel-item text-center">
					      <img src="images/banner_image/slide-5.jpg" alt="New York" class="img-fluid">
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

		<!-- free shipping -->
		<div class="row pt-5 pb-5">
			<div class="col-4">
				<div class="d-block text-center">
					<div class=""><img src="images/free_shipping/free_shipping.gif" class="img-fluid w-25"></div>
					<div class="">
						<label class="text-secondary">FREE SHIPPING ALL OVER INDIA</label>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="d-block text-center">
					<div class=""><img src="images/free_shipping/price-tag.gif" class="img-fluid w-25"></div>
					<div class="">
						<label class="text-secondary">FREE SHIPPING ABOVE $275 FOR ABROAD</label>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="d-block text-center">
					<div><img src="images/free_shipping/exchange.gif" class="img-fluid w-25"></div>
					<div>
						<label class="text-secondary">30 DAYS EASY EXCHANGE</label>
					</div>
				</div>
			</div>
		</div>

		<!-- end free shipping -->

		<!-- slider -->
		<div class="row d-flex justify-content-center">
			<div class="col-8">
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
			<div class="col-4">
				<div class="row">
					<div class="col-12 text-center">
						<img src="images/banner_image/poster-1.jpg" class="img-fluid">
					</div>
					<div class="col-12 mt-2 text-center">
						<img src="images/banner_image/poster-1.jpg" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
		<!-- end slider -->

		<!-- Responsive Portfolio Gallery Filter Using CSS Grid -->
		<div class="row">
			<div class="col-12">
				
				<section class="portfolio-section">
			      	<div class="container">
			        <h2 class="title text-center">LATEST COLLECTION</h2>
			        	<span class="hr-role"></span>
				        <div class="portfolio-tab">
				          	<ul id="filters" class="clearfix">
				              	<li class="filter active" data-filter=".snippet, .design, .full-project">ALL</li>
				              	<li class="filter" data-filter=".snippet">BANARASI</li>
				              	<li class="filter" data-filter=".design">SILK SAREE</li>
				              	<li class="filter" data-filter=".full-project">COLLON</li>
				              	<li class="filter" data-filter=".full-project">CHIFFON</li>
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
					    <div class="carousel-item active text-center">
					    	<div class="row">
						      	<div class="col-3"> 
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/banarasi1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">BENARASI SAREES</h5>
									  	</div>
									</div>
								</div>
								<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/chiffon.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">CHIFFON SAREES</h5>
									  	</div>
									</div>
								</div>
								<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/cotton.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">COTTON SAREES</h5>
									  	</div>
									</div>
								</div>
								<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/silk1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">SILK SAREES</h5>
									  	</div>
									</div>
								</div>
							</div>
					    </div>
					   <div class="carousel-item text-center">
					   		<div class="row">
						      	<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/categories/south-silk1.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">SOUTH SILK SAREES</h5>
									  	</div>
									</div>
								</div>
								<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/silk.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">TRADITIONAL SILK SAREES</h5>
									  	</div>
									</div>
								</div>
								<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/chiffon.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">CHIFFON SAREES</h5>
									  	</div>
									</div>
								</div>
								<div class="col-3">
									<div class="card mouse-hover" style="width: 18rem;">
									  	<img class="card-img-top" src="https://content-d11d.kxcdn.com/pub/media/wysiwyg/cotton.jpg" alt="Card image cap">
									  	<div class="card-body">
										    <h5 class="card-title">COTTON SAREES</h5>
									  	</div>
									</div>
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

		<div class="row">
			<div class="col-4">
				<div class="media">
					<i class="fas fa-3x fa-headset mr-3"></i>
				  
				  	<div class="media-body align-self-center">
				    	<h6 class="mt-0">ONLINE SUPPORT 20/7</h6>
				  	</div>
				</div>
			</div>
			<div class="col-4">
				<div class="media">
				  	<i class="far fa-3x fa-smile mr-3"></i>
				  	<div class="media-body align-self-center ">
				    	<h6 class="mt-0">OVER ONE LAKH SATISFIED CUSTOMERS</h6>
				  	</div>
				</div>
			</div>
			<div class="col-4">
				<div class="media">
				  	<i class="fab fa-3x fa-google-pay mr-3"></i>
				  	<div class="media-body align-self-center ">
				    	<h6 class="mt-0">100% SECURED PAYMENT GATEWAY</h6>
				  	</div>
				</div>
			</div>
		</div>

		<!-- end online supports -->

		<!-- spcial and must have product -->
		<div class="row pt-5 pb-5">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h5 class="mb-4">SPECIAL PRODUCT</h5>
						<div class="media mouse-hover mt-2 mb-2 p-3">
						  	<img class="align-self-center mr-3" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
						  	<div class="media-body">
						    	<h5 class="mt-0">SOFT DHAKAI JAMDANI SAREE (ADI31921)</h5>

					    		<ul class="list-inline">
					    			<li class="list-inline-item">45256</li>
					    			<li class="list-inline-item">500</li>
					    		</ul>
						    	
						    	<p>*All prices exclusive of GST</p>
						    	
						  	</div>
						</div>
						<div class="media mouse-hover mt-2 mb-2 p-3">
						  	<img class="align-self-center mr-3" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080010.jpg" alt="Generic placeholder image">
						  	<div class="media-body">
						    	<h5 class="mt-0">SOFT DHAKAI JAMDANI SAREE (ADI31922)</h5>
						    	<ul class="list-inline">
					    			<li class="list-inline-item">45256</li>
					    			<li class="list-inline-item">500</li>
					    		</ul>
						    	<p>*All prices exclusive of GST</p>
						  	</div>
						</div>
						<div class="media mouse-hover mt-2 mb-2 p-3">
						  	<img class="align-self-center mr-3" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2080003.jpg" alt="Generic placeholder image">
						  	<div class="media-body">
						    	<h5 class="mt-0">SOFT DHAKAI SILK SAREE (ADI319442)</h5>
						    	<ul class="list-inline">
					    			<li class="list-inline-item">45256</li>
					    			<li class="list-inline-item">500</li>
					    		</ul>
						    	<p>*All prices exclusive of GST</p>
						  	</div>
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="#">SEE ALL</a>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h5 class="mb-4">MUST HAVE</h5>
						<div class="media mouse-hover mt-2 mb-2 p-3">
						  	<img class="align-self-center mr-3" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2030579.jpg" alt="Generic placeholder image">
						  	<div class="media-body">
						    	<h5 class="mt-0">SOFT DHAKAI JAMDANI SAREE (ADI31921)</h5>

					    		<ul class="list-inline">
					    			<li class="list-inline-item">45256</li>
					    			<li class="list-inline-item">500</li>
					    		</ul>
						    	
						    	<p>*All prices exclusive of GST</p>
						    	
						  	</div>
						</div>
						<div class="media mouse-hover mt-2 mb-2 p-3">
						  	<img class="align-self-center mr-3" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2031273.jpg" alt="Generic placeholder image">
						  	<div class="media-body">
						    	<h5 class="mt-0">SOFT DHAKAI JAMDANI SAREE (ADI31922)</h5>
						    	<ul class="list-inline">
					    			<li class="list-inline-item">45256</li>
					    			<li class="list-inline-item">500</li>
					    		</ul>
						    	<p>*All prices exclusive of GST</p>
						  	</div>
						</div>
						<div class="media mouse-hover mt-2 mb-2 p-3">
						  	<img class="align-self-center mr-3" src="https://content-d11d.kxcdn.com/pub/media/catalog/product/cache/d6291e6fb9373e75922539a602b01bf9/a/d/adi2030579.jpg" alt="Generic placeholder image">
						  	<div class="media-body">
						    	<h5 class="mt-0">SOFT DHAKAI SILK SAREE (ADI319442)</h5>
						    	<ul class="list-inline">
					    			<li class="list-inline-item">45256</li>
					    			<li class="list-inline-item">500</li>
					    		</ul>
						    	<p>*All prices exclusive of GST</p>
						  	</div>
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="#">SEE ALL</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end spcial and must have product -->

		<!-- testimonials -->
		<section class="testimonial-area">
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
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						<div class="client-info">
							<div class="client-video">
								<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
							</div>
							<div class="client-details">
								<h6>Yeasin Arafat</h6>
								<span>Designer, LLCG Team</span>
							</div>
						</div>

					</div>
					<!-- Single Testimonial -->
					<div class="single-testimonial">
						<div class="round-1 round"></div>
						<div class="round-2 round"></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						<div class="client-info">
							<div class="client-video">
								<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
							</div>
							<div class="client-details">
								<h6>Yeasin Arafat</h6>
								<span>Designer, LLCG Team</span>
							</div>
						</div>

					</div>
					<!-- Single Testimonial -->
					<div class="single-testimonial">
						<div class="round-1 round"></div>
						<div class="round-2 round"></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						<div class="client-info">
							<div class="client-video">
								<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
							</div>
							<div class="client-details">
								<h6>Yeasin Arafat</h6>
								<span>Designer, LLCG Team</span>
							</div>
						</div>

					</div>
					<!-- Single Testimonial -->
					<div class="single-testimonial">
						<div class="round-1 round"></div>
						<div class="round-2 round"></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						<div class="client-info">
							<div class="client-video">
								<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
							</div>
							<div class="client-details">
								<h6>Yeasin Arafat</h6>
								<span>Designer, LLCG Team</span>
							</div>
						</div>

					</div>
					<!-- Single Testimonial -->
					<div class="single-testimonial">
						<div class="round-1 round"></div>
						<div class="round-2 round"></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
						<div class="client-info">
							<div class="client-video">
								<a href="#"><img src="https://i.ibb.co/DWhSr6S/play-button2.png" alt=""></a>
							</div>
							<div class="client-details">
								<h6>Yeasin Arafat</h6>
								<span>Designer, LLCG Team</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end testimonials -->


		<!-- Exclusive Banarasi Sarees Online Shopping -->
		<div class="row pt-5 pb-5 justify-content-md-center">
			<div class="col-10">
				<h3>Exclusive Banarasi Sarees Online Shopping</h3>
				<p>
				Banarasi Sarees are famous all over the world for its lustrous and incomparable beauty. Be it young, old, curvy or lean body a Pure Banarasi silk saree bring out the best in any woman. Our Exclusive Banarasi wedding sarees collection are intricately designed and inspired by royal artwork. The gold and silver brocade, or zari work has made this saree a perfect bridal attire. Shop from the premium range of Designer Banarasi and Traditional Banarasi sarees online at Adi Mohini Mohan Kanjilal.
				</p>
			</div>
		</div>
		<!-- end Exclusive Banarasi Sarees Online Shopping -->


		<!-- Explore New Designer Sarees Online Collection -->
		<div class="row pt-5 pb-5 justify-content-md-center">
			<div class="col-10">
				<div class="d-flex justify-content-center">
					<?php echo COMPANY_NAME;?>
				</div>
				<h3>Explore New Designer Sarees Online Collection at Adi Mohini Mohan Kanjilal</h3>
				<p class="text-justify">
				“Saree is an art and you are the canvas” This is an eternal truth that there are few things which never go out of style and delicate women in elegant saree is one of them. But it is also true that fashion changes very quickly and for this reason Adi Mohini Mohan Kanjilal, one of the largest ethnic store in India bringing perfect fashion that stays forever. Why Choose Us? “A woman should have two things – Class and Charm” You know that life is too short to be same person every day. Keeping in mind the growing demand of online shopping, Adimohinimohankanjilal has bring you the new and fashionable way of shopping. In our online store you can do online shopping with great conviction. You can quickly find your desired clothes with best deals and supports in our website. Here you will get latest design and trendy sarees which are not even available at the local market. If you have a special place for Bengali sarees in your mind then you can feast on our latest Silk Sarees, Banarasi sarees, Dhakai Jamdani Sarees collections. You will surely become delighted if you see our eccentric collection of outfits. Now, do not worry about attending a wedding or parties. We have an exotic collection of designer sarees, party sarees and reception sarees that truly make you look more alluring. Apart from this, our embroideried fancy sarees will truly enhance your charm. In our online store you will get a plethora of beautiful traditional handloom Sarees. Modern generation can buy from our trendy ethnic collection of chiffon sarees whose radiance, vigor and variety is outstanding. Apart from this, they can also buy modern Indo-western dresses, like Salwar suits, designer Lehengas, Palazzos etc which are more stylish and influential. South India is a treasure trove of rich culture and authentic clothes. You can have a look on our latest collection of unique South Indian Sarees like Kanjivaram, Arni Silks, Opara silks which give you an out-standing look. Our happiness depends on your shopping experience with us. We are aiming to provide 100% genuine quality products, timely delivery and exclusive discounts on every product. Check out our online store daily and stay updated with latest fashion trends.
				</p>
			</div>
		</div>

		<!-- end Explore New Designer Sarees Online Collection -->

	</div>


<?php include('footer.php');?>