<?php
require_once './views/includes/navbar.php';
?>

<?php 
	$data = new UsersController() ; 
	$users = $data->getAllUsers();  
?>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->
			<p></p>
			<p></p>
			<p></p>
			<p></p>

			<!-- Table Panel -->
			<div >
				<div class="card">
					<div class="card-header">
						<p></p>
						<p></p>
						<p></p>
						<p></p>
						<b>List of users</b>
						<a href="<?php echo BASE_URL;?>adduser" class = "btn btn-sm btn-primary mr-2 right ">
							<i class="fas fa-plus"></i>
						</a>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Name</th>
									<th class="">Username</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1 ;  
								foreach($users as $user):?>
										    <tr>
										      <tr>
											<td class="text-center"><?php echo $i++ ?></td>
											<td class="">
												 <p> <b><?php echo ucwords($user['name']) ?></b></p>
											</td>
											<td class="">
												 <p> <b><?php echo $user['username'];?></b></p>
											</td>

											
											<td class = "d-flex flex-row ">
														<form method="post"class="mr-1"
															action="updateuser">
															    <input type="hidden"name="id"
															    value="<?php echo$user['id']
															         ;?>">
															    <button class="btn btn-sm
															    btn-primary"><i class="fa
															    fa-edit"></i></button>
															</form>
															<form method="post"class="mr-1"
															action="deleteuser">
															    <input type="hidden"name="id"
															    value="<?php echo $user['id']
															         ;?>">
															    <button class="btn btn-sm
															    btn-danger"><i class="fa
															    fa-trash"></i></button>
															</form>
											</td>
										    </tr>
								<?php endforeach;?>
									</tbody>
						</table>
					</div>
				</div>
			</div>

								