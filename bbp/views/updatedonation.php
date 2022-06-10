<?php
require_once './views/includes/navbar.php';

?>

<?php 
	if (isset($_POST['id'])) {
		# code...
	
	$existDonation= new DonationsController() ; 
		$donation = $existDonation->getOneDonation();
	} 
	if (isset($_POST['submit'])) {
		# code...
	
	$donation= new DonationsController() ; 
		$donation->updateDonation();
	}
?>
 <div class="container">
	<div class= "row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">UPDATE DONATION</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
							        <label for="" class="control-label">Blood Group</label>
									<select name="blood_group" id="" class="custom-select select2" required>
										<option value="A+" <?php echo $donation->blood_group ? 'selected' : '';?>>A+</option>
										<option value="B+" <?php echo $donation->blood_group ? 'selected' : '';?>>B+</option>
										<option value="O+" <?php echo $donation->blood_group ? 'selected' : '';?>>O+</option>
										<option value="AB+" <?php echo $donation->blood_group ? 'selected' : '';?>>AB+</option>
										<option value="A-" <?php echo $donation->blood_group ? 'selected' : '';?>>A-</option>
										<option value="B-" <?php echo $donation->blood_group ? 'selected' : '';?>>B-</option>
										<option value="O-" <?php echo $donation->blood_group ? 'selected' : '';?>>O-</option>
										<option value="AB-" <?php echo $donation->blood_group ? 'selected' : '';?>>AB-</option>
									</select>
								</div>
									<input type="hidden"name="id"  value="<?php echo $donation->id ;?>"> 
								</div>
								<div class="form-group">
									<label for="" class="control-label">volume</label>
									<textarea  name="volume" class="form-control" value="<?php echo  $donation->volume;  ?>"></textarea>
								</div>
								<div class="form-group">
							        <label for="" class="control-label">Status</label>
									<select name="status" id="" class="custom-select select2" required>
										<option value="A+" <?php echo $donation->status ? 'selected' : '';?>>IN</option>
										<option value="B+" <?php echo $donation->status ? 'selected' : '';?>>OUT</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="control-label">donor_id</label>
									<input type="text" class="form-control" name="donor_id"  value="<?php echo $donation->donor_id ;?>">
								</div>
								<div class="form-group">
									<label for="" class="control-label">request_id</label>
									<input type="text" class="form-control" name="request_id"  value="<?php echo $donation->donor_id ;?>">
								</div>

								<div class="form-group">
									<label for="" class="control-label">Date Creation</label>
									<input type="date" class="form-control" name="date_created" placeholder="" value="<?php 
									echo $donation->date_created ; ?>">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>