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
            <h1 class="m-0">KATEGORI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-lg-12 main-chart mt-3">
          <form method="POST" action="fungsi/tambah/tambah.php?kategori=tambah">
				<table>
					<tr>
						<td style="width:15pc;"><input type="text" class="form-control" required name="kategori" placeholder="Masukan Kategori Barang Baru"></td>
						<td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button></td>
					</tr>
				</table>
			</form>
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
                <h3 class="card-title">Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered" id="example2">
				<thead>
					<tr style="background:#DFF0D8;color:#333;">
						<th>No.</th>
						<th>Kategori</th>
						<th>Tanggal Input</th>
						<th>Aksi</th>
					</tr>
				</thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM barang";
                        $hasil = mysqli_query($conn, $query);

                        $no=1;
                        foreach($hasil as $data){
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['kategori'] ?></td>
                        <td><?php echo $data['tgl_msk'] ?></td>
                        <td>
                        <a href="index.php?page=kategori&uid=1"><button class="btn btn-warning">Edit</button></a>
						<a href="fungsi/hapus/hapus.php?kategori=hapus&id=1" onclick="javascript:return confirm('Hapus Data Kategori ?');"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    } 
                    ?>
                </tbody>
                </table>
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
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>	
  <?php
include "layout/footer.php";

?>

