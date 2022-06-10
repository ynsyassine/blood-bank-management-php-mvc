<?php
require_once './views/includes/navbar.php';
?>

<?php 
	$data = new DonorsController() ; 
	$donors = $data->getAllDonors();  
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
			<div class="col-md-12">

				<div class="card">
					<div class="card-header" >
						<b>List of Donors</b>
						<a href="<?php echo BASE_URL;?>adddonor" class = "btn btn-sm btn-primary mr-2 right ">
							<i class="fas fa-plus"></i>
						</a>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover ">
							<thead >
								<tr>
									<th class="text-center">#</th>
									<th class="">Donor</th>
									<th class="">Blood Group</th>
									<th class="">Information</th>
									<th class="">date created</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1 ;  
								foreach($donors as $donor):?>
										    <tr>
										      <tr>
											<td class="text-center"><?php echo $i++ ?></td>
											<td class="">
												 <p> <b><?php echo ucwords($donor['name']) ?></b></p>
											</td>
											<td class="">
												 <p> <b><?php echo $donor['blood_group'] ?></b></p>
											</td>
											<td class="">
												 <p>Email: <b><?php echo $donor['email']; ?></b></p>
												 <p>Contact #: <b><?php echo $donor['contact']; ?></b></p>
												 <p>Address: <b><?php echo $donor['address']; ?></b></p>
											</td>
											<td>
												<p> <b><?php echo $donor['date_created'] ?></b></p>

												
											</td>
											<td class = "d-flex flex-row ">
														<form method="post"class="mr-1"
															action="updatedonor">
															    <input type="hidden"name="id"
															    value="<?php echo$donor['id']
															         ;?>">
															    <button class="btn btn-sm
															    btn-primary"><i class="fa
															    fa-edit"></i></button>
															</form>
															<form method="post"class="mr-1"
															action="deletedonor">
															    <input type="hidden"name="id"
															    value="<?php echo $donor['id']
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

								