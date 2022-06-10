<?php
require_once './views/includes/navbar.php';
?>
<?php 
	if (isset($_POST['id'])) {
		$exitDonor = new DonorsController();
		$exitDonor->deleteDonor();

	}