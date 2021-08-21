<?php include('header.php'); ?>

<div class="container-fluid">
	<div class="row d-flex justify-content-center">
		<div class="col-6">
			<div class="card my-2">
				<div class="card-body">
					<h5>Banner Image Upload</h5>
					<form class="needs-validation" novalidate>
						<div class="form-row">
    						<div class="col-md-12 mb-3">
	      						<label for="validationTooltip01">Banner Image Upload</label>
	      						<div class="input-group mb-3">
	  								<div class="custom-file">
	    								<input type="file" class="custom-file-input" id="validationTooltip01" required>
	    								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	  								</div>
								</div>
								<div class="valid-tooltip">
	        						Looks good!
	      						</div>
	    					</div>
	  						<button class="btn btn-primary" type="submit">Upload</button>
	  					</div>
					</form>
				</div>
			</div>
			<div class="card my-2">
				<div class="card-body">
					<h5>Fechared Image Upload</h5>
					<form class="needs-validation" novalidate>
						<div class="form-row">
    						<div class="col-md-12 mb-3">
    							<label for="validationTooltip01">Banner Image Upload</label>
	      						<div class="input-group mb-3">
	  								<div class="custom-file">
	    								<input type="file" class="custom-file-input" id="validationTooltip01" required>
	    								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	  								</div>
								</div>
								<div class="valid-tooltip">
	        						Looks good!
	      						</div>
	    					</div>
	  
	  						<button class="btn btn-primary" type="submit">Upload</button>
	  					</div>
					</form>
				</div>
			</div>

			<div class="card my-2">
				<div class="card-body">
					<h5>Latest Collection Image Upload</h5>
					<form class="needs-validation" novalidate>
						<div class="form-row">
    						<div class="col-md-12 mb-3">
    							<label for="validationTooltip01">Banner Image Upload</label>
	      						<div class="input-group mb-3">
	  								<div class="custom-file">
	    								<input type="file" class="custom-file-input" id="validationTooltip01" required>
	    								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	  								</div>
								</div>
								<div class="valid-tooltip">
	        						Looks good!
	      						</div>
	    					</div>
	  
	  						<button class="btn btn-primary" type="submit">Upload</button>
	  					</div>
					</form>
				</div>
			</div>

			<div class="card my-2">
				<div class="card-body">
					<h5>Product Image Upload</h5>
					<form class="needs-validation" novalidate>
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<label for="validationTooltip01">Category</label>
								<div class="input-group mb-3">
	    							<select class="form-control">
	    								<option>Select Category</option>
	    							</select>
								</div>
								<div class="valid-tooltip">
	        						Looks good!
	      						</div>
							</div>
    						<div class="col-md-12 mb-3">
    							<label for="validationTooltip01">Banner Image Upload</label>
	      						<div class="input-group mb-3">
	  								<div class="custom-file">
	    								<input type="file" class="custom-file-input" id="validationTooltip01" required>
	    								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	  								</div>
								</div>
								<div class="valid-tooltip">
	        						Looks good!
	      						</div>
	    					</div>
	  						<div class="col-md-12 mb-3">
	  							<label>Product Details</label>
	  							<div class="row">
	  								<div class="col-md-6 form-group">
	  									<label>Product name</label>
	  									<input type="text" name="product-name" class="form-control" placeholder="Product name">
	  								</div>
	  								<div class="col-md-6 form-group">
	  									<label>Product caption sort details</label>
	  									<input type="text" name="product-caption-name" class="form-control"  placeholder="Product caption name">
	  								</div>
	  								<div class="col-md-12 form-group">
	  									<label>Product Details</label>
	  									<textarea class="form-control" rows="3" placeholder="Product details"></textarea>
	  								</div>
	  								<div class="col-md-4 form-group">
	  									<label>Product old price</label>
	  									<input type="number" name="product-old-price" class="form-control" placeholder="Product old price">
	  								</div>
	  								<div class="col-md-4 form-group">
	  									<label>Product new price</label>
	  									<input type="text" name="product-new-price" class="form-control"  placeholder="Product new price">
	  								</div>
	  								<div class="col-md-4 form-group">
	  									<label>Product discount</label>
	  									<input type="text" name="product-discount-persentage" class="form-control"  placeholder="Product discount persentage">
	  								</div>
	  								<div class="col-md-12 form-group">
	  									<label>Offers</label>
	  									<br>
	  									<div class="form-check form-check-inline">
  											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  											<label class="form-check-label" for="exampleRadios1">
    											Yes
  											</label>
										</div>
										<div class="form-check form-check-inline">
  											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  											<label class="form-check-label" for="exampleRadios2">
    											No
  											</label>
										</div>
	  								</div>
	  							</div>
	  						</div>
	  						<button class="btn btn-primary" type="submit">Upload</button>
	  					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php');?>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>