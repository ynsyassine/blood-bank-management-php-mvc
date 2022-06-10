<?php
	/**
	 * 
	 */
	class RequestsController 
	{
		
		public function getAllRequests()
		{
			$requests  = Requests::getAll();
			return $requests ; 

		}

		public function getOneRequest()
		{
			if(isset($_POST['id']))
			{
				$data = array(
					'id' => $_POST['id'] );
				$request = Requests::getRequest($data);
				return $request;
			}
		}
		public function addRequest()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'patient' => $_POST['patient'],
					'blood_group' => $_POST['blood_group'],
					'volume' => $_POST['volume'],
					'physician_name' => $_POST['physician_name'],
					'status' => $_POST['status'],
					'date_created' => $_POST['date_created'],
				);
				$result=Requests::add($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/requests');

				}else{
					echo $result ;
				}
			}
		}
		public function updateRequest()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'id' => $_POST['id'],
					'patient' => $_POST['patient'],
					'blood_group' => $_POST['blood_group'],
					'volume' => $_POST['volume'],
					'physician_name' => $_POST['physician_name'],
					'status' => $_POST['status'],
					'date_created' => $_POST['date_created'],
				);
				$result=Requests::update($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/requests');

				}else{
					echo $result ;
				}
			}
		}
		public function deleteRequest()
		{
			if (isset($_POST['id'])) 
			{
				# code...
				$data['id'] = $_POST['id'];
				$result =Requests::delete($data);
				if($result === 'ok')
				{
					header('location:'.BASE_URL.'/requests');

				}
				else 
				{
					echo $result ; 
				}
			}
		}



			
	}