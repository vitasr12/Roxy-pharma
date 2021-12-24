 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
					  	<a href="index.php?page=beli"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
						<h3>Details Barang</h3>
						<table class="table table-striped">
								<tr>
									<td>ID Barang</td>
									<td><?php echo $hasil['id_barang'];?></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td><?php echo $hasil['nama_kategori'];?></td>
								</tr>
								<tr>
									<td>Nama Barang</td>
									<td><?php echo $hasil['nama_barang'];?></td>
								</tr>
								<tr>
									<td>Harga Jual</td>
									<td><?php echo $hasil['harga_jual'];?></td>
								</tr>
								<tr>
									<td>Satuan Barang</td>
									<td><?php echo $hasil['satuan_barang'];?></td>
								</tr>
								<tr>
									<td>Stok</td>
									<td><?php echo $hasil['stok'];?></td>
								</tr>
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
