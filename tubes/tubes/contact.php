<?php
//require_once'../include/koneksi.php'
require_once 'header.php';
?>

  <!--Main Content-->
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contact</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="name" class="text-black">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="subject" class="text-black">Nama Barang </label>
                    <input type="text" class="form-control" id="c_subject" name="subject">
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="coment" class="text-black">Komentar </label>
                    <textarea name="coment" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Medan</span>
              <p class="mb-0">Jl. Gatot Subroto No.37, Sei Sikambing D, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20119</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Jakarta</span>
              <p class="mb-0">Jl. Garuda No.47, Gn. Sahari Sel., Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Surabaya</span>
              <p class="mb-0">Jl. Dharmawangsa No.24, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>


          </div>
        </div>


        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

<?php
include('footer.php');
?>