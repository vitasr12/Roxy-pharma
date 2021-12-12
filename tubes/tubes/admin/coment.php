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
            <h1 class="m-0">Review  Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Review </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
    
        $data = $conn->query("SELECT * FROM review");
        $jumlah = mysqli_num_rows($data);
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Review
              </h3>

            </div>
            <?php
                while($list = $data->fetch_array(MYSQLI_ASSOC)):
            ?>
        <div class="row mx-3 my-3">

            <div class="col">
                <div class="card">
                    <h5 class="card-header w-100">Komentar   
                    <span class="badge badge-primary ml-auto"><?=$list['nama']?></span>
                    </h5>

                    <div class="card-body">
                        <h5 class="card-title"><b><?=$list['nm_product']?></b></h5>
                        <p class="card-text"><?=$list['keterangan']?></p>
                    </div>
                    <div class="card-footer">
                    <a href="form-list.php?aksi=edit&id=<?=$list['id']?>" class="btn btn-info float-right mx-1" width="50">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="../login/user.php?aksi=hapus&id=<?=$list['id']?>" class="btn btn-danger text-white float-right mx-1 confirmation" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                        <i class="fas fa-trash"></i>
                    </a>
                    </div>
                </div>
            </div>

              </div>
              <?php
              endwhile;
              ?>
        </div>
        </div>
        <!-- /.card-body -->
 
        <!-- /.card-footer-->
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>

var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Apakah anda ingin menghapus komentar?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }


     // tooltip
     $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })


</script>

<?php
include "layout/footer.php";
?>