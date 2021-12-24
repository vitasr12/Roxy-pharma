<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "roxy";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

		function register($username,$nama,$email,$password)
		{	
			$insert = mysqli_query($this->koneksi,"insert into login values ('','$username','$nama','$email','$password','2','')");
			return $insert;
		}
	
	} 


?>