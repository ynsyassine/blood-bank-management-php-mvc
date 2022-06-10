<?php
	/**
	 * 
	 */
	class DonationsController 
	{
		
		public function getAllDonations()
		{
			$donations  = Donations::getAll();
			return $donations ; 

		}
		public function getOneDonation()
		{
			if(isset($_POST['id']))
			{
				$data = array(
					'id' => $_POST['id'] );
				$donation = Donations::getDonation($data);
				return $donation;
			}
		}
		public function addDonation()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'blood_group' => $_POST['blood_group'],
					'volume' => $_POST['volume'],
					'status' => $_POST['status'],
					'donor_id' => $_POST['donor_id'],
					'request_id' => $_POST['request_id'],
					'date_created' => $_POST['date_created']
				);
				$result=Donations::add($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/donations');

				}else{
					echo $result ;
				}
			}
		}

		public function updateDonation()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'id' => $_POST['id'],
					'blood_group' => $_POST['blood_group'],
					'volume' => $_POST['volume'],
					'status' => $_POST['status'],
					'donor_id' => $_POST['donor_id'],
					'request_id' => $_POST['request_id'],
					'date_created' => $_POST['date_created']
				);
				$result=Donations::update($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'donations');

				}else{
					echo $result ;
				}
			}
		}
		public function deleteDonation()
		{
			if (isset($_POST['id'])) 
			{
				# code...
				$data['id'] = $_POST['id'];
				$result =Donations::delete($data);
				if($result === 'ok')
				{
					header('location:'.BASE_URL.'/donations');

				}
				else 
				{
					echo $result ; 
				}
			}
		}
	}