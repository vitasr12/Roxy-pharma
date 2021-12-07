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
            <h1 class="m-0">ITEM</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Barang</li>
              <li class="breadcrumb-item active">Item</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-lg-12 main-chart mt-3">
            <button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal">
			        	<i class="fa fa-plus"></i> Insert Data</button>
			        <a href="index.php?page=barang&stok=yes" style="margin-right :0.5pc;" 
			        	class="btn btn-warning btn-md pull-right">
			        	<i class="fa fa-list"></i> Sortir Stok Kurang</a>
			        <a href="index.php?page=barang" style="margin-right :0.5pc;" 
			        	class="btn btn-success btn-md pull-right">
			        	<i class="fa fa-refresh"></i> Refresh Data</a>
			        <div class="clearfix"></div>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background:#DFF0D8;color:#333;">
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stock</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
									    $totalBeli = 0;
									    $totalJual = 0;
									    $totalStok = 0;

                      $query = "SELECT * FROM barang";
                      $hasil = mysqli_query($conn, $query);

                      $no=1;
                      foreach($hasil as $data){
                      ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['id_barang'] ?></td>
                        <td><?php echo $data['nm_barang'] ?></td>
                        <td><?php echo $data['kategori'] ?></td>
                        <td><?php echo $data['stock'] ?></td>
                        <td><?php echo $data['harga_jl'] ?></td>
                        <td><?php echo $data['harga_bl'] ?></td>
                        <td>	
                          <a href="index.php?page=barang/details&barang=<?php echo $isi['id_barang'];?>"><button class="btn btn-primary btn-xs">Details</button></a>
                          <a href="index.php?page=barang/edit&barang=<?php echo $isi['id_barang'];?>"><button class="btn btn-warning btn-xs">Edit</button></a>
                          <a href="fungsi/hapus/hapus.php?barang=hapus&id=<?php echo $isi['id_barang'];?>" onclick="javascript:return confirm('Hapus Data barang ?');"><button class="btn btn-danger btn-xs">Hapus</button></a></td>
                        </tr>
                    <?php 
										$no++; 
										$totalBeli += $data['harga_bl'] * $data['stock']; 
										$totalJual += $data['harga_jl'] * $data['stock'];
										$totalStok += $data['stock'];
								    	}
								    ?>
                  </tbody>
                  <tfoot>
                  <tr>
										<th colspan="4">Total </td>
										<th><?php echo $totalStok;?></td>
										<th>Rp.<?php echo number_format($totalBeli);?>,-</td>
										<th>Rp.<?php echo number_format($totalJual);?>,-</td>
                    <th colspan="2" style="background:#ddd"></th>
									</tr>
                  </tfoot>
                </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]    
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>	
<?php
include "layout/footer.php";

?>

