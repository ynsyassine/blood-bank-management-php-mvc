<?php

	class LoginController{

	public function auth()
		{
			if(isset($_POST['submit']))
			{
				$data['username'] = $_POST['username'];
				$result = Login::login($data);
				
				if ($result){
					if(password_verify($_POST['password'],$result['password'])){
						session_start();
						$_SESSION['user'] = $result['username'];
						header('location: '.BASE_URL.'home');
					} else {
						header("location: ".BASE_URL."loginview");
					}
				} else {
					header("location: ".BASE_URL."loginview");
				}
			}

		}


	}