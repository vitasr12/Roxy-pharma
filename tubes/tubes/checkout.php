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
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="bg-light rounded p-3">
              <p class="mb-0">Sudah berlangganan? <a href="./login/login.php" class="d-inline-block">Click here</a> to login</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Details Pembeli <i class="fas fa-info"></i></h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Provinsi <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                    <option disabled="disabled" selected="selected">Provinsi</option>
                    <option>Aceh</option>
                    <option>Sumatera Utara</option>
                    <option>Sumatera Selatan</option>
                    <option>Sumatera Barat</option>
                    <option>Bengkulu</option>
                    <option>Riau</option>
                    <option>Kepulauan Riau</option>
                    <option>Jambi</option>
                    <option>Lampung</option>
                    <option>Kalimantan Barat</option>
                    <option>Kalimantan Timur</option>
                    <option>Kalimantan Selatan</option>
                    <option>Kalimantan Tengah</option>
                    <option>Kalimantan Utara</option>
                    <option>Banten</option>
                    <option>DKI Jakarta</option>
                    <option>Jawa Barat</option>
                    <option>Jawa Tengah</option>
                    <option>DI Yogyakarta</option>
                    <option>Jawa Timur</option>
                    <option>Bali</option>
                    <option>NTT</option>
                    <option>NTB</option>
                    <option>Gorontalo</option>
                    <option>Sulawesi Barat</option>
                    <option>Sulawesi Tengah</option>
                    <option>Sulawesi Utara</option>
                    <option>Sulawesi Tenggara</option>
                    <option>Sulawesi Selatan</option>
                    <option>Maluku Utara</option>
                    <option>Maluku</option>
                    <option>Papua Barat</option>
                    <option>Papua</option>
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="fname" class="text-black">Nama Depan<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Nama Belakang<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="address" class="text-black">Alamat <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Nama jalan">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="">
                </div>
              </div>
    
              <div class="form-group row">
              <div class="col-md-6">
                  <label for="c_phone" class="text-black">No. Telp <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Kode Pos <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
                <div class="form-group mt-4 ml-3">
                <label for="c_order_notes" class="text-black">Catatan pesanan</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="50" rows="5" class="form-control"
                  placeholder="Silahkan tulis disini..."></textarea>
              </div>
              </div>

              </div>
    
              <div class="form-group row mb-5">

    
              <div class="form-group">
              </div>
    

    
            </div>
          </div>
          <div class="col-md-6">
    
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
    
                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code"
                      aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Apply</button>
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Bioderma <strong class="mx-2">x</strong> 1</td>
                        <td>$55.00</td>
                      </tr>
                      <tr>
                        <td>Ibuprofeen <strong class="mx-2">x</strong> 1</td>
                        <td>$45.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">$350.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                      </tr>
                    </tbody>
                  </table>    
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.html'">Place
                      Order</button>
                  </div>
    
                </div>
              </div>
            </div>
    
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
    

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
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