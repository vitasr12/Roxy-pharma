<?php
include "layout/header.php"
?>



<body id="page-top">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Akun</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">


                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Akun</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                <form
                  method="POST"
                  class="my-login-validation"
                  novalidate="true"
                >
                <?php
                    $id = $_POST['id'];
                    $query = "SELECT * FROM akun WHERE id=$id";
                    $hasil = mysqli_query($koneksi, $query);

                    foreach($hasil as $data){
                ?>
                  <div class="form-group">
                      <input type="number" hidden name="id" value="<?php echo $_POST['id'];?>">
                    <label for="username">Username</label>
                    <input
                      value="<?php echo $data['username'];?>"
                      id="username"
                      type="text"
                      class="form-control"
                      name="username"
                      required
                      autofocus
                    />
                    <div class="invalid-feedback">Username belum diisi</div>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input
                    value="<?php echo $dat['password'];?>"
                      id="password"
                      type="password"
                      class="form-control"
                      name="password"
                      required
                      data-eye
                    />
                    <div class="invalid-feedback">Password is required</div>
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input
                    value="<?php echo $data['nama'];?>"
                      id="nama"
                      type="text"
                      class="form-control"
                      name="nama"
                      required
                      autofocus
                    />
                    <div class="invalid-feedback">What's your name?</div>
                  </div>

                  <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input
                    value="<?php echo $data['email'];?>"
                      id="email"
                      type="email"
                      class="form-control"
                      name="email"
                      required
                    />
                    <div class="invalid-feedback">Your email is invalid</div>
                  </div>

                  <?php } ?>

                  <div class="form-group m-0">
                    <button name="btnUbah" type="submit" class="btn btn-primary btn-block">
                      Update
                    </button>
                  </div>
                </form>

                <?php
                    if(isset($_POST['btnUbah'])){
                        $no = $_POST['id'];
                        $user = $_POST['username'];
                        $pass = $_POST['password'];
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];

                        if ($koneksi){
                            $sql = "UPDATE akun SET username='$user',password='$pass',nama='$nama',email='$email' WHERE id=$no";
                            mysqli_query($koneksi,$sql);
                            echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='akun.php' class='btn btn-primary'>Kembali</a></b></p>";
                          } elseif ($koneksi->connect_error) {
                                echo "<p class='alert alert-danger text-center><b>Terjadi kesalahan: $error</b></p>";
                            }       
                        
                  
                    }
                ?>


                                </div>
                            </div>
                        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php
include "layout/footer.php"
?>
