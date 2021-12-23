<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "test";
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

	// function login($username,$password,$remember)
	// {
	// 	$query = mysqli_query($this->koneksi,"select * from login where user='$username'");
	// 	$data_user = $query->fetch_array();
	// 	if(password_verify($password,$data_user['pass']))
	// 	{
			
	// 		if($remember)
	// 		{
	// 			setcookie('user', $username, time() + (60 * 60 * 24 * 5), '/');
	// 			setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
	// 		}
	// 		$_SESSION['user'] = $username;
	// 		$_SESSION['nama'] = $data_user['nama'];
	// 		$_SESSION['is_login'] = TRUE;
	// 		return TRUE;
	// 	}
	// }

// 	function relogin($username)
// 	{
// 		$query = mysqli_query($this->koneksi,"select * from login where user='$username'");
// 		$data_user = $query->fetch_array();
// 		$_SESSION['username'] = $username;
// 		$_SESSION['nama'] = $data_user['nama'];
// 		$_SESSION['is_login'] = TRUE;
// 	}
// } 


?>