<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "b19b15268564db", "884308b1", "heroku_ad357842d03c6ca");
		return $this->con;
	}
}

?>
