<!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Komentar</h3>
						<br/>
						<!-- Trigger the modal with a button -->
						
						<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-plus"></i> Tambah Komentar</button>
						<div class="clearfix"></div>
						<br/>
						
						<!-- view barang -->	
						<div class="modal-view">
            <div class="row mb-5">

        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <h5 class="card-header w-100 ml-3">vita sariani</h5>
                <div class="card-body ">
                    <h5 class="card-title">Panadol</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur consequatur dolores architecto quia? Ratione, fuga ea reiciendis maxime dolores totam provident iste optio quae voluptatum a dolorum voluptatibus dicta cum.</p>
                    <div class="w-100 mt-2">
                        <br>
                    </div>
                    <a onclick="confirm('Apakah anda yakin ingin menghapus record ini ?')" href="#" class="btn btn-danger text-white float-right mx-1" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
						</div>
						<div class="clearfix" style="margin-top:7pc;"></div>
					<!-- end view barang -->
					<!-- tambah barang MODALS-->
						<!-- Modal -->
					
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content" style=" border-radius:0px;">
								<div class="modal-header" style="background:#285c64;color:#fff;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Komentar</h4>
								</div>										
								<form action="fungsi/tambah/tambah.php?review=review" method="POST">
									<div class="modal-body">
								
										<table class="table table-striped bordered">
											
											<?php
												$format = $lihat -> barang_id();
											?>
											<tr>
												<td>Nama</td>
												<td><input type="text" placeholder="Nama Anda" required class="form-control" name="nama"></td>
											</tr>
											<tr>
												<td>Nama Barang</td>
												<td><input type="text" placeholder="Nama Barang" required class="form-control" name="nm_product"></td>
											</tr>
											<tr>
												<td>Komentar</td>
												<td> <textarea class="form-control" id="keterangan" name="keterangan" placeholder="silahkan tambahkan keterangan" required oninvalid="this.setCustomValidity(' Silahkan Isi Email Anda')" oninput="setCustomValidity('')"></textarea></td>
											</tr>
										</table>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Save</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
						
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
          	</section>
      	</section>
	
