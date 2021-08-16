<?php include('header.php'); ?>

<style type="text/css">
	.lottie-bg{
		background-image: linear-gradient(rgba(0, 111, 183, 1), rgba(98, 100, 255, 1));
	}
	.featured-categories >li{
		background-color: orange;
		margin: .5rem 0rem;
		text-align: center;
		border-radius: 7px;
		padding: 2rem 0;
	}
	.categories-list>li{
		background-color: orange;
		/*margin: .5rem 0rem;*/
		text-align: center;
		border-radius: 7px;
		padding: 2rem;
	}
</style>

<div class="container-fluid">
	<div class="row mb-5 justify-content-center lottie-bg">
		<div class="col-10">
			<div class="d-flex justify-content-between align-items-center">
				<div class="">
					<h1 class="text-white">We'd love to hear</h1>
					<h1 class="text-white">form you</h1>
				</div>
				<div class="">
					<img src="images/lottie/contact-img.svg" class="">
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center mt-5 mb-5">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				
				<div class="card-body">
					<h5 class="card-title">Register Office</h5>
					<p class="m-auto text-center"><i class="fas fa-building fa-3x"></i></p>
					<p class="text-center mt-4">714, Lake Town, Block - A, Kolkata - 700 089 <br> P: +91 33 40050857 / 58</p>
				</div>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Showroom</h5>
					<p class="m-auto text-center"><i class="fas fa-building fa-3x"></i></p>
					<p class="text-center mt-4">P-255, Lake Town, Block - B, Kolkata - 700 089 <br>  P: +91 33 4005 0859 / 60</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row mb-5 justify-content-center">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<label>Categories</label>
			<ul class="list-unstyled list-inline d-flex justify-content-around categories-list">
				<li class="list-inline-item">1</li>
				<li class="list-inline-item">2</li>
				<li class="list-inline-item">3</li>
				<li class="list-inline-item">4</li>
			</ul>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<div class="row">
				<div class="col-12">
					<label>Featured Categories</label>
					<ul class="list-unstyled featured-categories">
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">OFFERS</h5>
							<p>Some paragraph</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">1</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">2</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">3</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">4</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">5</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">6</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">7</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-center">8</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>