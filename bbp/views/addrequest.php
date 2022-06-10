<?php
require_once './views/includes/navbar.php';
?>
<?php 
	if (isset($_POST['submit'])) {
		# code...
	
	$newRequest= new RequestsController() ; 
	$newRequest->addRequest(); 
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

				<div class="card-header">ADD A NEW REQUEST</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
									<label for="" class="control-label">Full Name</label>
									<input type="text" class="form-control" name="patient"  placeholder="full name">
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
									<label for="" class="control-label">Volume</label>
									<textarea  name="volume" class="form-control" placeholder="In ml"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Physician name</label>
									<input type="text" class="form-control" name="physician_name">
								</div>
								<div class="form-group">
							        <label for="" class="control-label">Status</label>
									<select name="status" id="" class="custom-select select2" required>
										<option value="0">Pending</option>
										<option value="1">Approved</option>
									</select>
								</div>

								<div class="form-group">
									<label for="" class="control-label">Date Creation</label>
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