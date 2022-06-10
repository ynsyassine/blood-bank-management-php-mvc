<?php 
	if (isset($_POST['id'])) {
		$exitRequest = new RequestsController();
		$exitRequest->deleteRequest();

	}