<?php 
	require_once './views/includes/header.php';
	

	require_once './autoload.php' ;
	require_once './controllers/HomeController.php';
	$home = new HomeController();

	// $home->index($_GET['page']);
	$pages = ['home','donors','adddonor','updatedonor','deletedonor'
	,'requests', 'addrequest', 'updaterequest', 'deleterequest', 'donations','adddonation','updatedonation', 'deletedonation', 'users', 'adduser','updateuser','deleteuser','loginview'];//we give it here all the pages that already existe//we give it here all the pages that already existe
	if(isset($_GET['page'])){
		if(in_array($_GET['page'], $pages)){
			$page = $_GET['page'] ;
			$home->index($page);

		}else {
			include('views/includes/404.php');
		}
	}
		else {
			$home->index('loginview');
		}
?>
<?php require_once './views/includes/footer.php'; ?>



