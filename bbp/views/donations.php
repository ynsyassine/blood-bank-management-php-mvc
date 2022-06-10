<?php 
	$data = new DonationsController() ; 
	$donations = $data->getAllDonations();  
	require_once './views/includes/navbar.php';
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
					<div class="card-header">
						<b>List of Donations</b>
						<a href="<?php echo BASE_URL;?>adddonation" class = "btn btn-sm btn-primary mr-2 right ">
							<i class="fas fa-plus"></i>
						</a>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Blood Group</th>
									<th class="">Information</th>
									<th class="">date created</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1 ;  
								foreach($donations as $donation):?>
										    <tr>
										      <tr>
											<td class="text-center"><?php echo $i++ ?></td>
											<td class="">
												 <p> <b><?php echo $donation['blood_group'] ?></b></p>
											</td>
											<td class="">
												 <p>Volume: <b><?php echo $donation['volume']; ?></b></p>
												 <p>status: <b><?php echo $donation['status']; ?></b></p>
												 <p>Donor ID: <b><?php echo $donation['donor_id']; ?></b></p>
												 <p>Request ID: <b><?php echo $donation['request_id']; ?></b></p>
											</td>
											<td>
												<p> <b><?php echo $donation['date_created'] ?></b></p>

												
											</td>
											<td class = "d-flex flex-row ">
														<form method="post"class="mr-1"
															action="updatedonation">
															    <input type="hidden"name="id"
															    value="<?php echo$donation['id']
															         ;?>">
															    <button class="btn btn-sm
															    btn-primary"><i class="fa
															    fa-edit"></i></button>
															</form>
															<form method="post"class="mr-1"
															action="deletedonation">
															    <input type="hidden"name="id"
															    value="<?php echo $donation['id']
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

								