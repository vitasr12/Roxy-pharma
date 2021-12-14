<!--sidebar end-->
      
      <!-- ******************
      MAIN CONTENT
      ******************* -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

             
          <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Review Product</h3>
						<br>
            <div class="card-body">
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
                    <div class="form-group ml-3">
                        <label for="keterangan">Komentar</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                        <div class="invalid-feedback">
                            silahkan tambahkan keterangan
                        </div>
                    </div>
       
                    <button name="btnUbah" type="submit" class="btn btn-primary mt-3">Save</button>
                    <a href="index.php" class="btn btn-secondary mt-3">Close</a>
              </form>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
            </div>
              </section>
      </section>
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
</div>
          </section>
      </section>