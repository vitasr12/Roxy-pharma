<?php
  require_once './include/koneksi.php';
  require_once 'header.php';
  
  if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'admin') {
        header("Location: ../admin/index.php");
    }else if ($_SESSION['level'] == 'user'){
        header("Location: index.php");
    }
}
?>

<!--Css-->
<link rel="stylesheet" type="text/css" href="css/css1.css">

<!--Main Content-->
    <div class="site-blocks-cover" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Your everyday healthcare</h2>
              <h1>Welcome To Roxy Pharma</h1>
              <p>
                <a href="./login/login.php" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="banner-wrap bg-primary h-100"> 
              <a href="#" class="h-100">
                <h5> BLACK <br> FRIDAY</h5>
                <p>
                    25% Off Sitewide
                  <strong>Regular price items with code TAKE25</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>GIFT <br> CARDS </h5>
                <p>
                  Up to 60% Off 
                  <strong>60% Off purchases with gift cards</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>DONATION <br> BOX</h5>
                <p>
                  Help your local community
                  <strong> Donate your Roxygift Cash rewards</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>JOIN <br> OUR COMMUNITY</h5>
                <p>
                  Join RoxyGift today
                  <strong>RoxyGift is an easier way to save, shop and stay well. Get weekly deals and valuable health information</strong>
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase" id="popular">Popular Products</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">Bioderma</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">Chanca Piedra</a></h3>
            <p class="price">$70.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
            <p class="price">$120.00</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="shop-single.php"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">Cetyl Pure</a></h3>
            <p class="price"><del>45.00</del> &mdash; $20.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.php"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">CLA Core</a></h3>
            <p class="price">$38.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Sale</span>
            <a href="shop-single.php"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.php">Poo Pourri</a></h3>
            <p class="price"><del>$89</del> &mdash; $38.00</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase" id="new">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_02.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single.php"> <img src="images/product_04.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single.php">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">OUR FOUNDERS</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                </blockquote>

                <p>&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Rebecca Morando</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Andrew Neel</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Andrew Neel</p>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>We, at Roxy Pharma, provide the best products for our loyal customers and deliver our products with care to your doorstep.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>We have reached out to experts around the globe to test our products and have received a 95% satisfaction rate.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

<?php
include('footer.php');
?>