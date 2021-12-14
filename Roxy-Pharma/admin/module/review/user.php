<?php
    include('../../config.php');

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

?>