<?php include('header.php'); ?>


<div class="container-fluid">
	<div class="row">
		<img src="images/banner_image/saree-5.jpg" alt="silk saree" class="img-fluid center img-sm-h-400">
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4 class="text-center text-blue mt-4 mb-3">HAND BLOCK COLLECTIONS </h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
						<div class="card mt-3 mb-1">
						    <div class="card-header bg-white border-0" id="headingOne">
						      	<h6 class="mb-0 pointer" data-toggle="collapse" data-target="#CATEGORY">
						          	CATEGORY
						          	<i class="fa fa-angle-down float-right" aria-hidden="true"></i>
						     	 </h6>
						    </div>

						   	<div id="CATEGORY" class="collapse">
						      	<div class="card-body pb-2 p-0">
							        <ul class="list-group mt-2 filter-area">
							        	<?php

						        		foreach ($header_li as $key => $value) {
						        			?>
							              	<li class="list-group-item border-0 ">
										  		<input type="checkbox" id="css">
		      									<label for="css"><?php echo $key; ?></label>
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
								  	<li class="list-group-item border-0 ">
								  		<input type="checkbox" id="css">
      									<label for="css">&#8377 500 to 1000</label>
      									<label for="css">&#8377 1000 to 1500</label>
      									<label for="css">&#8377 1500 to 2000</label>
      									<label for="css">&#8377 2000 to 2500</label>
      									<label for="css">&#8377 2500 and above</label>
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
								  		<input type="checkbox" id="css">
								  		<label for="css">5★ & above</label>
      									<label for="css">4★ & above</label>
      									<label for="css">3★ & above</label>
      									<label for="css">2★ & above</label>
      									<label for="css">1★ & above</label>
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
						      <div class="card-body pb-2 p-0">
						        <ul class="list-group mt-2 filter-area">
								  	<li class="list-group-item border-0 ">
								  		<input type="checkbox" id="css">
								  		<label for="css">50% or more</label>
								  		<label for="css">40% or more</label>
								  		<label for="css">30% or more</label>
								  		<label for="css">20% or more</label>
								  		<label for="css">10% or more</label>
      									<label for="css">10% and below</label>
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
								  		<input type="checkbox" id="css">
      									<label for="css">Include Out of Stock</label>
								  	</li>
								</ul>
						      </div>
						    </div>
					  	</div>
					
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
			<!-- braadcum -->
			<div class="row">
				<div class="page_navigation w-100">
				    <nav aria-label="breadcrumb" class="bg-none">
					  	<ol class="breadcrumb bg-none border-0 rounded-0">
				    		<li class="breadcrumb-item"><a href="#">Home</a></li>
					    	<li class="breadcrumb-item"><a href="#">Library</a></li>
					    	<li class="breadcrumb-item active" aria-current="page">Data</li>
					  	</ol>
					</nav>
			  	</div>  
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="product-info d-flex justify-content-between mb-lg-4 mb-md-3 mb-sm-2 align-items-center">
						<div class="right text-blue font-weight-bold">Product <span class="text-grey">526</span></div>
						<div class="left">
							<div class="w-100">
								<select class="form-control">
									<option>NEWST FIRST</option>
									<option>LOWEST PRICE</option>
									<option>HIGHEST PRICE</option>
									<option>OLDEST FIRST</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- block grid - (single page product card) -->
				<div class="col-md-3">
			        <div class="dress-card">
			          <div class="dress-card-head">
			            <img class="dress-card-img-top" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/7578935/2018/10/23/d7b740bc-e00e-4bec-97aa-65016f8ff2e71540289479612-Harpa-Women-Dresses-2331540289479465-1.jpg" alt="">
			            <div class="surprise-bubble"><span class="dress-card-heart">
			                <i class="fas fa-heart"></i>
			              </span><a href="#"> <span>More</span></a></div>
			          </div>
			          <div class="dress-card-body">
			            <h4 class="dress-card-title">Harpa</h4>
			            <p class="dress-card-para">Womans printed clothing</p>
			            <p class="dress-card-para"><span class="dress-card-price">Rs.839 &ensp;</span><span class="dress-card-crossed">Rs.2099</span><span class="dress-card-off">&ensp;(60% OFF)</span></p>
			            <div class="row">
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner bag-button">Add to Bag</div></a></div>
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner wish-button">Whishlist</div></a></div>
			            </div>
			          </div>
			        </div>
	     	 	</div>

	     	 	<div class="col-md-3">
			        <div class="dress-card">
			          <div class="dress-card-head">
			            <img class="dress-card-img-top" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/7578935/2018/10/23/d7b740bc-e00e-4bec-97aa-65016f8ff2e71540289479612-Harpa-Women-Dresses-2331540289479465-1.jpg" alt="">
			            <div class="surprise-bubble"><span class="dress-card-heart">
			                <i class="fas fa-heart"></i>
			              </span><a href="#"> <span>More</span></a></div>
			          </div>
			          <div class="dress-card-body">
			            <h4 class="dress-card-title">Harpa</h4>
			            <p class="dress-card-para">Womans printed clothing</p>
			            <p class="dress-card-para"><span class="dress-card-price">Rs.839 &ensp;</span><span class="dress-card-crossed">Rs.2099</span><span class="dress-card-off">&ensp;(60% OFF)</span></p>
			            <div class="row">
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner bag-button">Add to Bag</div></a></div>
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner wish-button">Whishlist</div></a></div>
			            </div>
			          </div>
			        </div>
	     	 	</div>

	     	 	<div class="col-md-3">
			        <div class="dress-card">
			          <div class="dress-card-head">
			            <img class="dress-card-img-top" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/7578935/2018/10/23/d7b740bc-e00e-4bec-97aa-65016f8ff2e71540289479612-Harpa-Women-Dresses-2331540289479465-1.jpg" alt="">
			            <div class="surprise-bubble"><span class="dress-card-heart">
			                <i class="fas fa-heart"></i>
			              </span><a href="#"> <span>More</span></a></div>
			          </div>
			          <div class="dress-card-body">
			            <h4 class="dress-card-title">Harpa</h4>
			            <p class="dress-card-para">Womans printed clothing</p>
			            <p class="dress-card-para"><span class="dress-card-price">Rs.839 &ensp;</span><span class="dress-card-crossed">Rs.2099</span><span class="dress-card-off">&ensp;(60% OFF)</span></p>
			            <div class="row">
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner bag-button">Add to Bag</div></a></div>
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner wish-button">Whishlist</div></a></div>
			            </div>
			          </div>
			        </div>
	     	 	</div>

	     	 	<div class="col-md-3">
			        <div class="dress-card">
			          <div class="dress-card-head">
			            <img class="dress-card-img-top" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/7578935/2018/10/23/d7b740bc-e00e-4bec-97aa-65016f8ff2e71540289479612-Harpa-Women-Dresses-2331540289479465-1.jpg" alt="">
			            <div class="surprise-bubble"><span class="dress-card-heart">
			                <i class="fas fa-heart"></i>
			              </span><a href="#"> <span>More</span></a></div>
			          </div>
			          <div class="dress-card-body">
			            <h4 class="dress-card-title">Harpa</h4>
			            <p class="dress-card-para">Womans printed clothing</p>
			            <p class="dress-card-para"><span class="dress-card-price">Rs.839 &ensp;</span><span class="dress-card-crossed">Rs.2099</span><span class="dress-card-off">&ensp;(60% OFF)</span></p>
			            <div class="row">
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner bag-button">Add to Bag</div></a></div>
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner wish-button">Whishlist</div></a></div>
			            </div>
			          </div>
			        </div>
	     	 	</div>

	     	 	<div class="col-md-3">
			        <div class="dress-card">
			          <div class="dress-card-head">
			            <img class="dress-card-img-top" src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/7578935/2018/10/23/d7b740bc-e00e-4bec-97aa-65016f8ff2e71540289479612-Harpa-Women-Dresses-2331540289479465-1.jpg" alt="">
			            <div class="surprise-bubble"><span class="dress-card-heart">
			                <i class="fas fa-heart"></i>
			              </span><a href="#"> <span>More</span></a></div>
			          </div>
			          <div class="dress-card-body">
			            <h4 class="dress-card-title">Harpa</h4>
			            <p class="dress-card-para">Womans printed clothing</p>
			            <p class="dress-card-para"><span class="dress-card-price">Rs.839 &ensp;</span><span class="dress-card-crossed">Rs.2099</span><span class="dress-card-off">&ensp;(60% OFF)</span></p>
			            <div class="row">
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner bag-button">Add to Bag</div></a></div>
			              <div class="col-md-6 card-button"><a href=""><div class="card-button-inner wish-button">Whishlist</div></a></div>
			            </div>
			          </div>
			        </div>
	     	 	</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>