<?php
require_once './views/includes/navbar.php';
?>
<?php 
	if (isset($_POST['submit'])) {
		# code...
	
	$newDonation= new DonationsController() ; 
	$newDonation->addDonation(); 
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
				<div class="card-header">ADD A NEW DONATION</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
						 	<div class="form-group">
							        <label class="control-label">Blood Group</label>
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
									<label class="control-label">Volume IN (ml)</label>
									<input type="text" class="form-control" name="volume"  placeholder="volume en ml">
								</div>
								<div class="form-group">
							        <label class="control-label">Status</label>
									<select name="status"  class="custom-select select2" required>
										<option value="1">IN</option>
										<option value="2">OUT</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label">ID DONOR</label>
									<input name="donor_id" class="form-control" placeholder="id of donor must ALREADY exist " >
								</div>
								<div class="form-group">
									<label class="control-label">ID request</label>
									<input name="request_id" class="form-control" placeholder="id of request ">
								</div>
								<div class="form-group">
									<label class="control-label">Creation Date</label>
									<input type="date" class="form-control" name="date_created" >
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>