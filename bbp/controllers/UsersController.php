<?php
	/**
	 * 
	 */
	class UsersController 
	{
		
		public function getAllUsers()
		{
			$users  = Users::getAll();
			return $users ; 

		}
		public function getOneUser()
		{
			if(isset($_POST['id']))
			{
				$data = array(
					'id' => $_POST['id'] );
				$user = Users::getUser($data);
				return $user;
			}
		}
		public function addUser()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'name' => $_POST['name'],
					'username' => $_POST['username'],
					'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
				);
				$result=Users::add($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/users');

				}else{
					echo $result ;
				}
			}
		}
		public function updateUser()
		{
			if(isset($_POST['submit'])){
				$data = array(
					'id' => $_POST['id'],
					'name' => $_POST['name'],
					'username' => $_POST['username'],
					'password' => $_POST['password'],
				);
				$result=Users::update($data);
				if($result === 'ok'){
					header('location:'.BASE_URL.'/users');

				}else{
					echo $result ;
				}
			}
		}
		public function deleteUser()
		{
			if (isset($_POST['id'])) 
			{
				# code...
				$data['id'] = $_POST['id'];
				$result =Users::delete($data);
				if($result === 'ok')
				{
					header('location:'.BASE_URL.'/users');

				}
				else 
				{
					echo $result ; 
				}
			}
		}



			
	}


			
	