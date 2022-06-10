<?php
require_once './views/includes/navbar.php';
?>
<?php 
	$data = new RequestsController() ; 
	$requests = $data->getAllRequests();  
?>

<div class="container-fluid">
	
	<div class="col-lg-12 ">
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
			<div class=" mt-12">
				<div class="card">
					<div class="card-header">
						<b>List of Requests</b>
						<a href="<?php echo BASE_URL;?>addrequest" class = "btn btn-sm btn-primary mr-2 right ">
							<i class="fas fa-plus"></i>
						</a>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Request</th>
									<th class="">Blood Group</th>
									<th class="">Information</th>
									<th class="">Date Created</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1 ;  
								foreach($requests as $request):?>
										    <tr>
										      <tr>
											<td class="text-center"><?php echo $i++ ?></td>
											<td class="">
												 <p> <b><?php echo ucwords($request['patient']) ?></b></p>
											</td>
											<td class="">
												 <p> <b><?php echo $request['blood_group'];?></b></p>
											</td>
											<td class="">
												 <p>Volume: <b><?php echo $request['volume']; ?></b></p>
												 <p>Physician name: <b><?php echo $request['physician_name']; ?></b></p>
												 <p>status: <b><?php echo $request['status']; ?></b></p>
											</td>
											<td>
												<p> <b><?php echo $request['date_created'] ?></b></p>

												
											</td>
											<td class = "d-flex flex-row ">
														<form method="post"class="mr-1"
															action="updaterequest">
															    <input type="hidden"name="id"
															    value="<?php echo$request['id']
															         ;?>">
															    <button class="btn btn-sm
															    btn-primary"><i class="fa
															    fa-edit"></i></button>
															</form>
															<form method="post"class="mr-1"
															action="deleterequest">
															    <input type="hidden"name="id"
															    value="<?php echo $request['id']
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

								