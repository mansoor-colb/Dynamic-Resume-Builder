<?php
class database
{
	
	function __construct()
	{
		$this->connection();
	}

	function connection(){

		$this->link = new mysqli('localhost','root','','cv');

	}

	function query($q)
	{
		$result = $this->link->query($q);
		if(!$result)
			{	echo $this->link->error;		}
		
	}

	function get_query($q){
		
		return $this->link->query($q);
		
		 }

	function fetch_query($q){
		$res = $this->getdata($q);
		return $res->fetch_assoc();
	}
	function userdata($id){

		$result = $this->getdata("select * from users where id = '$id'");
		return $result->fetch_assoc();
	}
	
}

$database = new database();
?>

