<?php 
	require_once('ActiveUser.php');

	class Guest implements ActiveUser{
		const ROLE = "guest";

		public function getFullName(){
		return self::ROLE;
		}	

		public function getStatus(){
		return self::ROLE;
		}
	}
?>
