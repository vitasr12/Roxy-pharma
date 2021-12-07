<?php
include "layout/header.php";

?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Keranjang Penjualan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Supplier </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="col-lg-12 main-chart">
			<br>
			    <?php if(isset($_GET['success'])){?>
				<div class="alert alert-success">
					<p>Edit Data Berhasil !</p>
				</div>
				<?php }?>
				<?php if(isset($_GET['remove'])){?>
				<div class="alert alert-danger">
					<p>Hapus Data Berhasil !</p>
				</div>
				<?php }?>
				<div class="col-sm-4">
				    <div class="panel panel-primary">
						<div class="panel-heading">
							<h4><i class="fa fa-search"></i> Cari Barang</h4>
						</div>
						<div class="panel-body">
							<input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan : Kode / Nama Barang  [ENTER]">
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4><i class="fa fa-list"></i> Hasil Pencarian</h4>
						</div>
						<div class="panel-body">
							<div id="hasil_cari"></div>
							<div id="tunggu"></div>
						</div>
					</div>
                </div>
            </div>
            <div class="card ml-auto">
              <div class="card-header">
                <table class="table table-stripped">
										<tr>
											<td><h4><i class="fa fa-shopping-cart"></i> KASIR</td>
											<td align="right"><a class="btn btn-danger pull-right" href="fungsi/hapus/hapus.php?penjualan=jual">
										<b>RESET KERANJANG</b></a></h4></td>
										</tr>
									</table>
									
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered">
				<tr>
					<td><b>Tanggal</b></td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i");?>" name="tgl"></td>
				</tr>
			  </table>
              <table class="table table-bordered" id="example1">
				<thead>
				    <tr>
					    <td> No</td>
						<td> Nama Barang</td>
						<td style="width:10%;"> Jumlah</td>
						<td style="width:20%;"> Total</td>
						<td> Kasir</td>
						<td> Aksi</td>
					</tr>
				</thead>
        <tbody>
        <!-- aksi ke table penjualan -->
          <td><button type="submit" class="btn btn-warning">Update</button>
          <!-- aksi ke table penjualan -->
           <a href="" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
              </table>
              <table class="table table-stripped">
                  <!-- aksi ke table nota -->
                  <tr>
                      <td>Total Semua</td>
                      <td><input type="text" class="form-control" name="total" value="<?php ?>"></td>
					  <td>Bayar  </td>
					  <td><input type="text" class="form-control" name="bayar" value="<?php ?>"></td>
					  <td><button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</button>
					  <!-- <?php  if(!empty($_GET['nota'] == 'yes')) {?> -->
					  <a class="btn btn-danger" href="fungsi/hapus/hapus.php?penjualan=jual">
					  <b>RESET</b></a></td><?php }?></td>
                  </tr>
              	<!-- aksi ke table nota -->
				<tr>
					<td>Kembali</td>
					<td><input type="text" class="form-control" value="<?php ?>"></td>
					<td></td>
					<td>
					<a href="print.php?nm_member=<?php?>
					&bayar=<?php ?>" target="_blank">
					<button class="btn btn-default">
					<i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
					</button></a>
					</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </section> 
        <!-- /.card-body -->
 
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(document).ready(function() {
    $('#example2').DataTable();
    } );
  </script>
</body>
</html>

<?php
include "layout/footer.php";
?>