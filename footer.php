<!-- footer -->
	<footer>
		<div class="container-fluid">
			<div class="row pt-5">
				<div class="col-12 text-center">
					<a class="navbar-brand text-white" href="#"><?php echo COMPANY_NAME; ?></a>
				</div>
				<div class="col-12 text-center">
					<ul class="list-inline">
						<li class="list-inline-item follow_us">Follow Us</li>
						<li class="list-inline-item"><i class="fab fa-facebook-square" style="color:#50adff;"></i></li>
						<li class="list-inline-item"><i class="fab fa-twitter-square" style="color:#85b6ff;"></i></li>
						<li class="list-inline-item"><i class="fab fa-youtube-square" style="color:#ff5151;"></i></li>
					</ul>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<ul class="list-unstyled">
						<li class="footer_list_heading">CONTACT US</li>
						<li class="footer_list_item"><?php echo COMPANY_ADDRESS; ?></li>
						<li class="footer_list_item">(+91) 9051757287</li>
						<li class="footer_list_item">(+91) 9051757287</li>
						<li class="footer_list_item">Infinity Square, Sevoke Rd, 2nd Mile, Near PC Mittal Bus Stop, Siliguri, West Bengal 734001</li>
						<li class="footer_list_item">info@kothakoli.com</li>
						<li class="footer_list_item"><a href="https://goo.gl/maps/i1H54i8MhzCTm9Vd6" target="_blank"> Map Direction <i class="fas fa-external-link-alt"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-xxs-6">
					<ul class="list-unstyled">
						<li class="footer_list_heading">STORE</li>
						<li class="footer_list_item">My account</li>
						<li class="footer_list_item">Order history</li>
						<li class="footer_list_item">Wish list</li>
						<li class="footer_list_item"><a href="about-us.php"> About Us</a></li>
						<li class="footer_list_item">Site map</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-6">
					<ul class="list-unstyled">
						<li class="footer_list_heading">INFORMATION</li>
						<li class="footer_list_item">Special products</li>
						<li class="footer_list_item">Offers</li>
						<li class="footer_list_item">Advanced Search</li>
						<li class="footer_list_item">Blog</li>
						<li class="footer_list_item"><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<ul class="list-unstyled">
						<li class="footer_list_heading">HELP & POLICIES</li>
						<li class="footer_list_item"><a href="terms-condition.php"> Terms & Conditions</a></li>
						<li class="footer_list_item"><a href="privecy-pollicy.php"> Privacy Policy</a></li>
						<li class="footer_list_item"><a href="shipping-delevery.php"> Shipping & Delivery</a></li>
						<li class="footer_list_item"><a href="return-cancel.php"> Return & Cancellation</a></li>
						<li class="footer_list_item">CUSTOMER SUPPORT : 9804149917</li>
					</ul>
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
							<p class="text-white">Developed by Biswajit Das</p>
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
  	<!-- owl carasol -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  	
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

  	<!-- <script>
      $(document).ready(function() {
          	document.addEventListener("contextmenu", function(e){
			    e.preventDefault();
			}, false);
        });
    </script> -->

  	<!-- client carasol -->
  	<script type="text/javascript">
  		$('.carousel-client').bxSlider({
			auto: true,
		    slideWidth: 234,
		    minSlides: 2,
		    maxSlides: 5,
		    controls: false
		});

		$('.our_category_slider').bxSlider({
			auto: true,
		    slideWidth: 234,
		    minSlides: 2,
		    maxSlides: 5,
		    controls: false
		});

  	</script>

  	<!-- owl carasole -->
  	<script type="text/javascript">
  		$(".testimonial-content").owlCarousel({
			loop: true,
			items: 2,
			margin: 50,
			dots: true,
			nav: false,
			mouseDrag: true,
			autoplay: true,
			autoplayTimeout: 1000,
			smartSpeed: 800,
			responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:1,
		            nav:false
		        },
		        1000:{
		            items:2,
		            nav:true
		        }
		    }
		});

  	</script>
</body>
</html>

