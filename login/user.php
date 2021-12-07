<?php

include('../include/koneksi.php');

if( $_GET['action'] == 'masuk' ){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = mysqli_query($conn , "SELECT * FROM user WHERE email='$email' and password='$password'");
    $cek = mysqli_num_rows($login);
    
    session_start();

    if($cek > 0){

    while($log = $login->fetch_array(MYSQLI_ASSOC)) {

        $_SESSION['id'] = $log['id'];
        $_SESSION['nama'] = $log['nama'];
        $_SESSION['email'] = $log['email'];
        $_SESSION['level'] = $log['level'];
    
    }
    $_SESSION['sukses'] = 'Selamat Datang!'.$nama;
    
    if ($_SESSION['level'] == 'admin') {
        header("Location: ../admin/index.php");
    }else{
        header("Location: ./index.php");
    }

    } else {
        session_unset();
        $_SESSION['gagal'] = 'email atau Kata Sandi Salah!';
        header("Location: login.php");
    }
}


// Menambah Komentar
if ($_GET['aksi'] == 'tambah') {

    $id_user = $_SESSION['id'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $product = $_POST['nm_product'];

    $sql = "INSERT INTO `review` (`id`,  `nama`, `keterangan`, `nm_product`) VALUES (NULL, '".$nama."', '".$keterangan."', '".$product."');";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        unset($_SESSION['suksesList']);
        $_SESSION['suksesList'] = 'list berhasil dibuat!';
        header("Location: review.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}


// Menghapus data komentar
if ($_GET['aksi'] == 'hapus') {

    $id = $_GET['id'];

    $sql = "DELETE FROM review WHERE id = $id";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        unset($_SESSION['suksesList']);
        $_SESSION['suksesList'] = 'list berhasil dihapus!';
        header("Location: ../admin/coment.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}


?>