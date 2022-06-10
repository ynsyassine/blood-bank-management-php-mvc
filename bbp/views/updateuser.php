<?php
require_once './views/includes/navbar.php';

?>
<?php 
	if (isset($_POST['id'])) {
		# code...
	
	$existUser= new UsersController() ; 
		$user = $existUser->getOneUser();
	} 
	if (isset($_POST['submit'])) {
		# code...
	
	$user= new UsersController() ; 
		$user->updateUser();
	}
?>
 <div class="container">
	<div class= "row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">UPDATE USER</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
						 <form action="" method="post">
								<div class="form-group">
									<label for="" class="control-label">Name</label>
									<input type="text" class="form-control" name="name"  placeholder="Name" value="<?php echo $user->name ;?>">
									<input type="hidden"name="id"  value="<?php echo $user->id ;?>"> 
								</div>
								<div class="form-group">
									<label for="" class="control-label">Username</label>
									<input  name="username" class="form-control" placeholder="Username" value="<?php echo  $user->username;  ?>">
								</div>
								<div class="form-group">
									<label for="" class="control-label">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Email" value="<?php echo $user->password ;?>">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" name="submit">submit</button>
								</div>
							</form>
						</div>
			</div>
		</div>
</div>