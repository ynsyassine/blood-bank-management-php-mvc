<?php 
	/**
	 * 
	 */
	class HomeController
	{
		
		public function index($page)
		{
			include('views/'.$page . '.php');
		}
		public function getAllblood()
		{
			$typeblood  = Home::getAll();
			return $typeblood ; 

		}
	}