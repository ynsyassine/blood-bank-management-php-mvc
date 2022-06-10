<?php 
	/**
	 * this is ithe home controller 
	 */
	class Home
	{
		static public function  getAll()
		{
			$stmt = DB::connect()->prepare('SELECT * FROM blood_inventory');
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
			$stmt = null ; 
		}







	}