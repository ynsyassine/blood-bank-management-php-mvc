<?php
require_once './views/includes/navbar.php';
?>
<?php 
	if (isset($_POST['submit'])) {
		# code...
	
	$newDonor= new DonorsController() ; 
	$newDonor->addDonor(); 
	} 
?>

 <div class="container">

	<div class= "row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
			<p></p>
			<p></p>
			<p></p>
			<p></p>

				<div class="card-header">ADD A NEW DONOR</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
									<label for="" class="control-label">Full Name</label>
									<input type="text" class="form-control" name="name"  placeholder="full name">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Address</label>
									<textarea  name="address" class="form-control" placeholder="Address"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Contact #</label>
									<input type="text" class="form-control" name="contact" placeholder="Contact" >
								</div>
								<div class="form-group">
							        <label for="" class="control-label">Blood Group</label>
									<select name="blood_group" id="" class="custom-select select2" required>
										<option value="A+">A+</option>
										<option value="B+">B+</option>
										<option value="O+">O+</option>
										<option value="AB+">AB+</option>
										<option value="A-">A-</option>
										<option value="B-">B-</option>
										<option value="O-">O-</option>
										<option value="AB-">AB-</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Date Creation</label>
									<input type="date" class="form-control" name="date_created" placeholder="">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>