<?php
require_once './views/includes/navbar.php';
?>

<?php 
	if (isset($_POST['id'])) {
		$exitDonation = new DonationsController();
		$exitDonation->deleteDonation();

	}