<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/assets-img/bumdes.png" />

    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/lib/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owlcarousel/css/owl.theme.default.min.css">

    <!-- Lightbox CSS -->
    <link href="assets/lib/lightbox/css/lightbox.css" rel="stylesheet" />

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <title>Sembakonline - Situs Jual Beli Sembako | Halaman Utama</title>
  </head>
  <body>

    <?php include 'components/navbar.php' ?>

    <!-- Content -->

    <!-- Home Page -->
    
    <section class="hero" id="beranda">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/product-img/bumdes.png" class="d-block w-100" alt="Bakcground Image" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="assets/img/assets-img/2738.jpg" class="d-block w-100" alt="Bakcground Image" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="assets/img/product-img/bumdes.png" class="d-block w-100" alt="Bakcground Image" loading="lazy">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- End Home Page -->

    <!-- Service Page -->

    <section class="content" id="layanan">
      <div class="container">
        <h3 class="content-title">Apa Itu BUMDES</h3>
        <img src="assets/img/assets-img/bumdes.png" alt="" class="about-img" loading="lazy">
        <p class="content-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sapiente quaerat eaque architecto ut fuga, odio beatae necessitatibus et animi sint tempore optio dicta. Iste totam incidunt laborum nesciunt delectus, mollitia repellendus a numquam aperiam nulla quibusdam ad commodi tempora tempore voluptatum! Necessitatibus repellendus ratione maxime impedit dolorem quam voluptate nobis officia facere doloribus molestias quod in quibusdam ipsa fugit deserunt blanditiis magnam enim qui, architecto nesciunt, nulla reiciendis ipsum. Beatae saepe, nihil laborum doloremque ut dolor illo vel unde sunt praesentium rerum voluptatum fugiat voluptates adipisci fugit totam consectetur eligendi repellendus obcaecati nisi reiciendis? Ab dolores nostrum beatae commodi.</p>
        
        <h3 class="content-title title-layanan">Layanan Kami</h3>
        <div class="row justify-content-center mx-2">
          <div class="shadow col-layanan col-lg-3 col-md-12">
            <div class="layanan-card">
              <div class="layanan-card-icon">
                <i class='bx bx-dollar' ></i>
              </div>
              <h5 class="layanan-card-title">
                Harga Murah
              </h5>
              <p class="layanan-card-description">
                Toko Sembako Termurah, Terlengkap, Aman, dan Terpercaya.
              </p>
            </div>
          </div>
          <div class="shadow col-layanan col-lg-3 col-md-12">
            <div class="layanan-card">
              <div class="layanan-card-icon">
                <i class='bx bxs-package' ></i>
              </div>
              <h5 class="layanan-card-title">
                Produk Berkualitas
              </h5>
              <p class="layanan-card-description">
                Sembakonline Menjual Berbagai Produk Sembako yang Berkualitas
              </p>
            </div>
          </div>
          <div class="shadow col-layanan col-lg-3 col-md-12">
            <div class="layanan-card">
              <div class="layanan-card-icon">
                <i class='bx bxs-devices' ></i>
              </div>
              <h5 class="layanan-card-title">
                Order Mudah
              </h5>
              <p class="layanan-card-description">
                Sembakonline Melayani Pesanan via Online.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Service Page -->

    <!-- Product Page -->


    <section class="content" id="produk">
      <div class="container">
        <h3 class="content-title">Produk yang Di Rekomendasikan</h3>
        <div class="owl-carousel owl-theme px-2">

          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/bimoli.jpg" class="card-img-top" alt="" loading="lazy">
                <div class="card-body">
                  <h5 class="card-title">Minyak Goreng Bimoli 2 Liter</h5>
                  <p class="card-price">Rp. 26.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/beras-pandan-wangi.jpg" class="card-img-top" alt="" loading="lazy">
                <div class="card-body">
                  <h5 class="card-title">Beras Pandan Wangi Asli</h5>
                  <p class="card-price">Rp. 120.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/gula-pasir.jpg" class="card-img-top" alt="" loading="lazy">
                <div class="card-body">
                  <h5 class="card-title">Gulaku Gula Pasir Kemasan</h5>
                  <p class="card-price">Rp. 35.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/kopi-kapal-api.jpg" class="card-img-top" alt="" loading="lazy">
                <div class="card-body">
                  <h5 class="card-title">Kopi Kapal Api Special Mix Box</h5>
                  <p class="card-price">Rp. 20.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/telur-ayam.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Telur Ayam 30pcs / 1 Peti</h5>
                  <p class="card-price">Rp. 40.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/sariwangi.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Teh Sariwangi Kemasan Box Isi 25 Sachet</h5>
                  <p class="card-price">Rp. 10.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/terigu-segitiga.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Terigu Segitiga Berat 1 Kilogram</h5>
                  <p class="card-price">Rp. 25.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/susu-kental-manis.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Susu Kental Manis Frisian Flag Kemasan Pouch</h5>
                  <p class="card-price">Rp. 27.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/indomie-goreng.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Indomie Goreng Rasa Ayam Goreng 1 Dus</h5>
                  <p class="card-price">Rp. 37.000,00</p>
                </div>
              </div>
            </a>
          </div>
          <div class="item p-2 my-2">
            <a href="detail-product.php" class="card-item">
              <div class="shadow card">
                <img src="assets/img/product-img/kopi-luwak.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Luwak White Coffee Kemasan Box Berat 200gr</h5>
                  <p class="card-price">Rp. 14.000,00</p>
                </div>
              </div>
            </a>
          </div>

        </div>

        <center>
          <a href="product.php" class="btn mt-3 more-button">Lihat Produk Lainnya</a>
        </center>
      </div>
    </section>


    <!-- End Product Page -->

    <!-- Testimoni Page -->


    <section class="content" id="testimoni">
      <div class="container">
        <h3 class="content-title">Testimoni</h3>
        <div class="row justify-content-center">

          <div class="col-6 col-lg-3 col-testimoni">
            <a href="assets/img/testimoni-img/testimoni-1.jpg" class="testimoni-link" data-lightbox="image-1" data-title="My caption">
              <img src="assets/img/testimoni-img/testimoni-1.jpg" alt="" class="shadow testimoni-img" loading="lazy">
              <p class="testimoni-text"></p>
            </a>
          </div>
          <div class="col-6 col-lg-3 col-testimoni">
            <a href="assets/img/testimoni-img/testimoni-2.jpg" class="testimoni-link" data-lightbox="image-1" data-title="My caption">
              <img src="assets/img/testimoni-img/testimoni-2.jpg" alt="" class="shadow testimoni-img" loading="lazy">
            </a>
          </div>
          <div class="col-6 col-lg-3 col-testimoni">
            <a href="assets/img/testimoni-img/testimoni-3.jpg" class="testimoni-link" data-lightbox="image-1" data-title="My caption">
              <img src="assets/img/testimoni-img/testimoni-3.jpg" alt="" class="shadow testimoni-img" loading="lazy">
            </a>
          </div>
          <div class="col-6 col-lg-3 col-testimoni">
            <a href="assets/img/testimoni-img/testimoni-4.jpg" class="testimoni-link" data-lightbox="image-1" data-title="My caption">
              <img src="assets/img/testimoni-img/testimoni-4.jpg" alt="" class="shadow testimoni-img" loading="lazy">
            </a>
          </div>

        </div>

        <center>
          <a href="testimoni.php" class="btn mt-3 more-button">Lihat Testimoni Lainnya</a>
        </center>
      </div>
    </section>


    <!-- End Testimoni Page -->

    <!-- Contact Page -->


    <section class="content mb-5" id="kontak">
      <div class="container">
        <h3 class="content-title">Kontak Kami</h3>
        <div class="row justify-content-center">
          <div class="shadow col-lg-6 col-sm-12 col-contact">
            <form action="">
              <div class="mb-3">
                <label for="input-name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="input-name" placeholder="Masukkan Nama Lengkap Anda...">
              </div>
              <div class="mb-3">
                <label for="input-email" class="form-label">Email</label>
                <input type="email" class="form-control" id="input-email" placeholder="Masukkan Alamat Email Anda...">
              </div>
              <div class="mb-3">
                <label for="input-reason" class="form-label">Pesan</label>
                <textarea class="form-control" id="input-reason" rows="3" placeholder="Masukkan Pesan Anda..." ></textarea>
              </div>
              <div class="mb-3">
                <button class="btn form-button w-100">Kirim Pesan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    
    <!-- End Contact Page -->

    <!-- End Content -->

    <?php include 'components/footer.php' ?>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src="assets/js/main.js"></script>

    <!-- OwlCarousel JS -->
    <script src="assets/lib/owlcarousel/js/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
      });

      $('.owl-carousel').owlCarousel({
          loop:false,
          // margin:10,
          // nav:true,
          responsiveClass:true,
          responsive:{
              0:{
                  items:2,
                  nav:false
              },
              600:{
                  items:3,
                  nav:true
              },
              1000:{
                  items:5,
                  nav:true
              }
          }
      })
    </script>

    <!-- Lightbox JS -->
    <script src="assets/lib/lightbox/js/lightbox.js"></script>

  </body>
</html>