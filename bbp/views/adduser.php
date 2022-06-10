<?php
require_once './views/includes/navbar.php';
?>
<?php 
	if (isset($_POST['submit'])) {
		# code...
	
	$newUser= new UsersController() ; 
	$newUser->addUser(); 
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

				<div class="card-header">ADD A NEW USER</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
									<label for="" class="control-label">Name</label>
									<input type="text" class="form-control" name="name">
								</div>
                                <div class="form-group">
									<label for="" class="control-label">Username</label>
									<input type="text" class="form-control" name="username" >
								</div>

								<div class="form-group">
									<label for="" class="control-label">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Ex: B@oi8Op">
								</div>


								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>