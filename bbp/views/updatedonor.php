<?php
require_once './views/includes/navbar.php';

?>
<?php 
	if (isset($_POST['id'])) {
		# code...
	
	$existDonor= new DonorsController() ; 
		$donor = $existDonor->getOneDonor();
	} 
	if (isset($_POST['submit'])) {
		# code...
	
	$donor= new DonorsController() ; 
		$donor->updateDonor();
	}
?>
 <div class="container">
	<div class= "row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">UPDATE DONOR</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
									<label for="" class="control-label">Full Name</label>
									<input type="text" class="form-control" name="name"  placeholder="full name" value="<?php echo $donor->name ;?>">
									<input type="hidden"name="id"  value="<?php echo $donor->id ;?>"> 
								</div>
								<div class="form-group">
									<label for="" class="control-label">Address</label>
									<textarea  name="address" class="form-control" placeholder="Address" value="<?php echo  $donor->address;  ?>"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $donor->email ;?>">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Contact #</label>
									<input type="text" class="form-control" name="contact" placeholder="Conntact" value="<?php echo $donor->contact ;?>" >
								</div>
								<div class="form-group">
							        <label for="" class="control-label">Blood Group</label>
									<select name="blood_group" id="" class="custom-select select2" required>
										<option value="A+" <?php echo $donor->name ? 'selected' : '';?>>A+</option>
										<option value="B+" <?php echo $donor->name ? 'selected' : '';?>>B+</option>
										<option value="O+" <?php echo $donor->name ? 'selected' : '';?>>O+</option>
										<option value="AB+" <?php echo $donor->name ? 'selected' : '';?>>AB+</option>
										<option value="A-" <?php echo $donor->name ? 'selected' : '';?>>A-</option>
										<option value="B-" <?php echo $donor->name ? 'selected' : '';?>>B-</option>
										<option value="O-" <?php echo $donor->name ? 'selected' : '';?>>O-</option>
										<option value="AB-" <?php echo $donor->name ? 'selected' : '';?>>AB-</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Date Creation</label>
									<input type="date" class="form-control" name="date_created" placeholder="" value="<?php 
									echo $donor->date_created ; ?>">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>