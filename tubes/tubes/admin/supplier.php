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
            <h1 class="m-0">Supplier </h1>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id Supplier </th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>Telp</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  require_once '../include/koneksi.php';
                  $sql = "SELECT * FROM supplier";
                  $supplier = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($supplier))
                  {
                    echo "<tr>
                    <td>".$row['id_supplier']."</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['kota']."</td>
                    <td>".$row['kode_pos']."</td>
                    <td>".$row['telp']."</td>
                    </tr>";
                  }
                  ?>
                  </tbody>
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