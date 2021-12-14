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