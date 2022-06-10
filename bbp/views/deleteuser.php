<?php 

	if (isset($_POST['id'])) {
		$exitUser = new UsersController();
		$exitUser->deleteUser();

	}