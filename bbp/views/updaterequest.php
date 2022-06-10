<?php
require_once './views/includes/navbar.php';

?>
<?php 
	if (isset($_POST['id'])) {
		# code...
	
	$existRequest= new RequestsController() ; 
		$request = $existRequest->getOneRequest();
	} 
	if (isset($_POST['submit'])) {
		# code...
	
	$request= new RequestsController() ; 
		$request->updateRequest();
	}
?>
 <div class="container">
	<div class= "row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">UPDATE REQUEST</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
									<label for="" class="control-label">Patient</label>
									<input type="text" class="form-control" name="patient"  placeholder="Patient" value="<?php echo $request->patient ;?>">
									<input type="hidden"name="id"  value="<?php echo $request->id ;?>"> 
								</div>
								<div class="form-group">
							        <label for="" class="control-label">Blood Group</label>
									<select name="blood_group" id="" class="custom-select select2" required>
										<option value="A+" <?php echo $request->blood_group ? 'selected' : '';?>>A+</option>
										<option value="B+" <?php echo $request->blood_group ? 'selected' : '';?>>B+</option>
										<option value="O+" <?php echo $request->blood_group ? 'selected' : '';?>>O+</option>
										<option value="AB+" <?php echo $request->blood_group ? 'selected' : '';?>>AB+</option>
										<option value="A-" <?php echo $request->blood_group ? 'selected' : '';?>>A-</option>
										<option value="B-" <?php echo $request->blood_group ? 'selected' : '';?>>B-</option>
										<option value="O-" <?php echo $request->blood_group ? 'selected' : '';?>>O-</option>
										<option value="AB-" <?php echo $request->blood_group ? 'selected' : '';?>>AB-</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Volume</label>
									<input type="text" class="form-control" name="volume" placeholder="Volume" value="<?php echo $request->volume ;?>">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Physician name</label>
									<input type="text" class="form-control" name="physician_name" placeholder="" value="<?php echo $request->physician_name ;?>" >
								</div>
								<div class="form-group">
							        <label for="" class="control-label">Status</label>
									<select name="status" id="" class="custom-select select2" required>
										<option value="0" <?php echo $request->status ? 'selected' : '';?>>Pending</option>
										<option value="1" <?php echo $request->status ? : '';?>>Approved</option>
									</select>
								</div>

								<div class="form-group">
									<label for="" class="control-label">Creation date</label>
									<input type="date" class="form-control" name="date_created" placeholder="" value="<?php 
									echo $request->date_created ; ?>">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>