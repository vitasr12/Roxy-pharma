<?php
include('../../config.php');
?>
<!--sidebar end-->
      
      <!-- ****************************************************
      MAIN CONTENT
      ***************************************************** -->
      <!--main content start-->
      
      <section id="main-content">
          <section class="wrapper">

             
          <div class="card-body">
                  <div class="col-lg-12 main-chart">
						<h3>Review Product</h3>
						<br>
            <div class="form-row">
            <form role="form" class="form-horizontal" action="fungsi/tambah/tambah.php?review=tambah" method="post">
                        <div class="col-md-12 mb-3">
                            <label class="col-md-12 mb-3" for="nama">Nama</label>
                            <input type="text" name="username" class="form-control" id="nama" value="" name="nama" placeholder="Masukkan Nama Anda" required oninvalid="this.setCustomValidity('Silahkan Isi Nama Anda')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="col-md-12 mb-3" for="nm_product">Nama Product</label>
                            <input type="text" name="password" class="form-control" name="nm_product" id="nm_product" placeholder="Nama product" required oninvalid="this.setCustomValidity('Silahkan Isi Nama Product')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="col-md-12 mb-3" for="email">Email</label>
                            <input type="email" name="nama_lengkap" class="form-control"  name="email" id="email" placeholder="example@gmail.com" required oninvalid="this.setCustomValidity(' Silahkan Isi Email Anda')" oninput="setCustomValidity('')">
                        </div>
                    <div class="col-md-12 mb-3">
                        <label class="col-md-12 mb-3" for="keterangan">Komentar</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="silahkan tambahkan keterangan" required oninvalid="this.setCustomValidity(' Silahkan Isi Email Anda')" oninput="setCustomValidity('')"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="btnUbah">Save</button>
                            <button class="btn btn-secondary" type="reset">Close </button>
                            </div>
                        </div>
              </form>
              <?php 
                     if(isset($_POST['btnUbah'])) {      
                        $no = $_POST['id'];
                        $nama = $_POST['nama'];
                        $product = $_POST['nm_product'];
                        $email = $_POST['email'];
                        $keterangan = $_POST['keterangan'];
                        if($conn)
                        {
                            $sql = "INSERT INTO `review` (`id`,  `nama`, `keterangan`, `nm_product`) VALUES (NULL, '".$nama."', '".$keterangan."', '".$product."');";
                            mysqli_query($confiq, $sql);
                            echo "<p class='alert alert-success text-center mt-2'><b>Perubahahn data berhasil. <a href='coment.php' class='btn btn-primary'> Lihat</a></b></p>";
                        } elseif ($confiq->connect_error){
                            echo "<p clas='alert alert-danger text-center'><b>Terjadi kesalahan: $error</b></p>";
                        }
                     }
                ?>
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
        selector: 'textarea',        
        height: 400, 
        document_base_url: 'localhost/bootstrap/upload',       
        file_browser_callback_types: 'file image media',        
        file_picker_types: 'file image media',        
        forced_root_block : "",        
        force_br_newlines : true,        
        force_p_newlines : false,
        plugins: ['autolink lists link image charmap print preview hr anchor pagebreak', 'searchreplace wordcount visualblocks visualchars code fullscreen','insertdatetime media nonbreaking save table contextmenu directionality','emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'],
        toolbar1: 
        'undo redo | insert | styleselect table | bold italic | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media ',        
        toolbar2: 'print preview | forecolor backcolor emoticons | fontselect | fontsizeselect | codesample code fullscreen',
        templates: [          
        { title: 'Test template 1', content: '' },          
        { title: 'Test template 2', content: '' }        
        ],
        content_css: [          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',          '//www.tinymce.com/css/codepen.min.css'        
        ],        

        images_upload_handler: function (blobInfo, success, failure) {           
        var xhr, formData;
        
        xhr = new XMLHttpRequest();            
        xhr.withCredentials = false;            
        xhr.open('POST', 'upload.php');
        xhr.onload = function() {              
        var json;              

        if (xhr.status != 200) {                
        failure('HTTP Error: ' + xhr.status);                
        return;              
        }              

        console.log(xhr.response);
        success(xhr.response);            
        };
        formData = new FormData();            
        formData.append('file', blobInfo.blob(), blobInfo.filename());            
        xhr.send(formData);       
        }      

    });

</script>
</div>
          </section>
      </section>