<!-- ****************************************************
      MAIN SIDEBAR MENU
      ***************************************************** -->
      <!--sidebar start-->
      <?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="100" height="110"></a></p>
              	  <h5 class="centered"><?php echo $hasil_profil['nm_member'];?></h5>

                  <li class="sub-menu">
                      <a href="index.php?page=about">
                      <i class="fa fa-users"></i>
                          <span>About Us</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="index.php?page=beli" >
                        <i class="fa fa-flask"></i>
                          <span>Barang <span style="padding-left:2px;"></span></span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href=>Barang</a></li>
                      </ul> -->
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=jual">Transaksi Jual</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a href="index.php?page=review">
                      <i class="fa fa-thumbs-up"></i>
                          <span>Review</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->