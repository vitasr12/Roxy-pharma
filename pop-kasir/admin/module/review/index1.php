<!--sidebar end-->
      
      <!-- ****************************************************
      MAIN CONTENT
      ***************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Review Product</h3>
						<br>
                        <div class="card-wrapper">
					<div class="brand">
						<img src="../img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Review</h4>
							<form method="POST" class="my-login-validation" novalidate="" name="myForm" onsumbit="return validateForm()">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" type="text" class="form-control" name="nama" value="" required autofocus>
									<div class="invalid-feedback">
										Username tidak valid
									</div>
								</div>

								<div class="form-group">
									<label for="nm_product">Nama Product</label>
									<input id="nm_product" type="text" class="form-control" name="nm_product" required data-eye>
								    <div class="invalid-feedback">
								    	Password harus diisi!
							    	</div>
								</div>

                                <div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" required data-eye>
								    <div class="invalid-feedback">
								    	Password harus diisi!
							    	</div>
								</div>
                                
                                <div class="form-group">
									<label for="keterangan">Komentar</label>
									<textarea id="keterangan" class="form-control" name="keterangan" required data-eye>
								    <div class="invalid-feedback">
								    	Password harus diisi!
							    	</div>
								</div>


                                <button name="btnUbah" type="submit" class="btn btn-primary mt-3">Save</button>
                                <a href="index.php" class="btn btn-secondary mt-3">Close</a>
							</form>
						</div>
					</div>
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
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
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
    
    function validateForm() {
  let x = document.forms["myForm"]["nama"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
          </section>
      </section>