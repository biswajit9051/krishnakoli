<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<form class="form" action="all-products.php" method="GET">
		<div class="card mt-3 mb-1">
		    <div class="card-header bg-white border-0" id="headingOne">
		      	<h6 class="mb-0 pointer" data-toggle="collapse" data-target="#CATEGORY">
		          	CATEGORY
		          	<i class="fa fa-angle-down float-right" aria-hidden="true"></i>
		     	 </h6>
		    </div>

		   	<div id="CATEGORY" class="collapse show">
		      	<div class="card-body pb-2 p-0">
			        <ul class="list-group mt-2 filter-area">
			        	<?php

		        		foreach ($header_li as $key => $value) {
		        			?>
			              	<li class="list-group-item border-0 ">
			              		<label>
			              			<input type="checkbox" class="mr-2" name="filter-category[]" value="<?php echo $key; ?>">
								    <?php echo $key; ?>
								</label>	
					  		</li>
			              	<?php
		        		}
				           
		            	?>
					</ul>
		      	</div>
		  	</div>
	  	</div>

	  	<div class="card mt-1 mb-1">
		    <div class="card-header bg-white border-0" id="headingOne">
		      	<h6 class="mb-0 pointer" data-toggle="collapse" data-target="#PRICE">
		          	PRICE
		          	<i class="fa fa-angle-down float-right" aria-hidden="true"></i>
		     	 </h6>
		    </div>

		    <div id="PRICE" class="collapse">
		      <div class="card-body pb-2 p-0">
		        <ul class="list-group mt-2 filter-area">
				  	<li class="list-group-item border-0">
				  		<label><input type="checkbox" class="mr-2" name="filter-price[]" value="500-below">&#8377 500 and below</label>
						<label><input type="checkbox" class="mr-2" name="filter-price[]" value="500-1000">&#8377 500 to 1000</label>
						<label><input type="checkbox" class="mr-2" name="filter-price[]" value="1000-1500">&#8377 1000 to 1500</label>
						<label><input type="checkbox" class="mr-2" name="filter-price[]" value="1500-2000">&#8377 1500 to 2000</label>
						<label><input type="checkbox" class="mr-2" name="filter-price[]" value="2000-2500">&#8377 2000 to 2500</label>
						<label><input type="checkbox" class="mr-2" name="filter-price[]" value="2500-above">&#8377 2500 and above</label>
				  	</li>
				</ul>
		      </div>
		    </div>
	  	</div>

	  	<div class="card mt-1 mb-1">
		    <div class="card-header bg-white border-0" id="headingOne">
		      	<h6 class="mb-0 pointer" data-toggle="collapse" data-target="#CUSTOMER-RATINGS">
		          	CUSTOMER RATINGS
		          	<i class="fa fa-angle-down float-right" aria-hidden="true"></i>
		     	 </h6>
		    </div>

		    <div id="CUSTOMER-RATINGS" class="collapse">
		      <div class="card-body pb-2 p-0">
		        <ul class="list-group mt-2 filter-area">
				  	<li class="list-group-item border-0 ">
				  		<label><input type="checkbox" class="mr-2" name="filter-customer-rating[]" value="5">5★ & above</label>
						<label><input type="checkbox" class="mr-2" name="filter-customer-rating[]" value="4">4★ & above</label>
						<label><input type="checkbox" class="mr-2" name="filter-customer-rating[]" value="3">3★ & above</label>
						<label><input type="checkbox" class="mr-2" name="filter-customer-rating[]" value="2">2★ & above</label>
						<label><input type="checkbox" class="mr-2" name="filter-customer-rating[]" value="1">1★ & above</label>
				  	</li>
				</ul>
		      </div>
		    </div>
	  	</div>

	  	<div class="card mt-1 mb-1">
		    <div class="card-header bg-white border-0" id="headingOne">
		      	<h6 class="mb-0 pointer" data-toggle="collapse" data-target="#DISCOUNT">
		          	DISCOUNT
		          	<i class="fa fa-angle-down float-right" aria-hidden="true"></i>
		     	 </h6>
		    </div>

		    <div id="DISCOUNT" class="collapse">
		      <div class="card-body p-0">
		        <ul class="list-group pb-2 mt-2 filter-area">
				  	<li class="list-group-item border-0 ">
				  		<label><input type="checkbox" class="mr-2" name="filter-discount[]" value="50">50% or more</label>
				  		<label><input type="checkbox" class="mr-2" name="filter-discount[]" value="40">40% or more</label>
				  		<label><input type="checkbox" class="mr-2" name="filter-discount[]" value="30">30% or more</label>
				  		<label><input type="checkbox" class="mr-2" name="filter-discount[]" value="20">20% or more</label>
				  		<label><input type="checkbox" class="mr-2" name="filter-discount[]" value="10">10% or more</label>
						<label><input type="checkbox" class="mr-2" name="filter-discount[]" value="10-below">10% and below</label>
				  	</li>
				</ul>
		      </div>
		    </div>
	  	</div>

	  	<div class="card mt-1 mb-1">
		    <div class="card-header bg-white border-0" id="headingOne">
		      	<h6 class="mb-0 pointer"  data-toggle="collapse" data-target="#AVAILABILITY">
		          	AVAILABILITY
		          	<i class="fa fa-angle-down float-right" aria-hidden="true"></i>
		     	 </h6>
		    </div>

		    <div id="AVAILABILITY" class="collapse">
		      <div class="card-body pb-2 p-0">
		        <ul class="list-group mt-2 filter-area">
				  	<li class="list-group-item border-0 ">
						<label><input type="checkbox" class="mr-2" name="filter-availability" value="Include-out-of-stock">Include Out of Stock</label>
				  	</li>
				</ul>
		      </div>
		    </div>
	  	</div>

	  	<div class="form-group">
	  		<input type="submit" name="" class="btn btn-sm btn-primary float-right" value="SEARCH">
	  	</div>
	</form>			
</div>