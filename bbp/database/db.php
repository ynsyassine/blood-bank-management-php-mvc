<?php 
/**
 * 
 */
class DB
{
	
	static public function connect()
	{
		$db= new PDO("mysql:host=localhost;dbname=bloodbank_db","root","");
		//$db=exec("set names utf8");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		RETURN $db ; 
	}
}