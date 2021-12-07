<?php

// if(!isset($_SESSION)){
//     session_start();
// }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'tubes';   

    //proseduri
    $conn = mysqli_connect($host,$user,$pass,$database);

    if($conn->connect_error){
        die("Koneksi Gagal:".$conn->connect_error);

    }

?>