<?php
include "layout/header.php";

      // $nama = NULL;
      // $product = NULL;
      // $email = NULL;
      // $keterangan = NULL;


      // if ($_GET['tambah'] == 'edit') {
      // $id = $_GET['id'];
      // $id_user = $_SESSION['id'];
      // // sql
      // $data = $conn->query("SELECT * FROM review");

      // while ($list = $data->fetch_array(MYSQLI_ASSOC)) :
      // $nama = $list['nama'];
      // $product = $list['nm_product'];
      // $email = $list['email'];
      // $keterangan = $list['keterangan'];
      // endwhile;
      // // }

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Review  Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Review </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Review
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form class="needs-validation" novalidate method="POST" action="">
                    <form class="needs-validation" novalidate method="POST" action="../login/user.php">
                    <h5 class="modal-title">Review Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="form-row">
                    
                        <div class="col-md-12 mb-3">
                            <label for="nama">Nama </label>
                            <input type="text" class="form-control" id="nama" value="" name="nama" placeholder="Masukkan Nama Anda" required>
                            <div class="invalid-feedback">
                                Silahkan Isi Nama Anda
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nm_product">Nama Product</label>
                            <input type="text" class="form-control" value="" name="nm_product" id="nm_product" placeholder="Nama product" required>
                            <div class="invalid-feedback">
                                Silahkan Isi Nama Product
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                        <label for="email">Email</label>
                            <input type="text" class="form-control" value="" name="email" id="email" placeholder="example@gmail.com" required>
                            <div class="invalid-feedback">
                                Silahkan Isi Email Anda
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Komentar</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                        <div class="invalid-feedback">
                            silahkan tambahkan keterangan
                        </div>
                    </div>
       
                    <button name="btnUbah" type="submit" class="btn btn-primary mt-3">Save</button>
                    <a href="index.php" class="btn btn-secondary mt-3">Close</a>
                </form>
                <?php 
                     if(isset($_POST['btnUbah'])) {      
                        //$no = $_POST['id'];
                        $nama = $_POST['nama'];
                        $product = $_POST['nm_product'];
                        $email = $_POST['email'];
                        $keterangan = $_POST['keterangan'];
                        if($conn)
                        {
                            $sql = "INSERT INTO `review` (`id`,  `nama`, `keterangan`, `nm_product`) VALUES (NULL, '".$nama."', '".$keterangan."', '".$product."');";
                            mysqli_query($conn, $sql);
                            echo "<p class='alert alert-success text-center mt-2'><b>Perubahahn data berhasil. <a href='coment.php' class='btn btn-primary'> Lihat</a></b></p>";
                        } elseif ($conn->connect_error){
                            echo "<p clas='alert alert-danger text-center'><b>Terjadi kesalahan: $error</b></p>";
                        }
                     }
                ?>
        <!-- /.card-body -->
 
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();



    tinymce.init({
        selector: '#keterangan'
    });
</script>

<?php
include "layout/footer.php";
?>