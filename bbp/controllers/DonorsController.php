<?php
	/**
	 * 
	 */
	class DonorsController 
	{
		
		public function getAllDonors()
		{
			$donors  = Donors::getAll();
			return $donors ; 

		}
		public function getOneDonor()
		{
			if(isset($_POST['id']))
			{
				$data = array(
					'id' => $_POST['id'] );
				$donor = Donors::getDonor($data);
				return $donor;
			}
		}
		public function addDonor()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'name' => $_POST['name'],
					'address' => $_POST['address'],
					'email' => $_POST['email'],
					'contact' => $_POST['contact'],
					'blood_group' => $_POST['blood_group'],
					'date_created' => $_POST['date_created'],
				);
				$result=Donors::add($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/donors');

				}else{
					echo $result ;
				}
			}
		}
		public function updateDonor()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'id' => $_POST['id'],
					'name' => $_POST['name'],
					'address' => $_POST['address'],
					'email' => $_POST['email'],
					'contact' => $_POST['contact'],
					'blood_group' => $_POST['blood_group'],
					'date_created' => $_POST['date_created'],
				);
				$result=Donors::update($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/donors');

				}else{
					echo $result ;
				}
			}
		}
		public function deleteDonor()
		{
			if (isset($_POST['id'])) 
			{
				# code...
				$data['id'] = $_POST['id'];
				$result =Donors::delete($data);
				if($result === 'ok')
				{
					header('location:'.BASE_URL.'/donors');

				}
				else 
				{
					echo $result ; 
				}
			}
		}



			
	}