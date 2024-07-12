<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JKTmicroBiz UMKM Directory</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon-32x32.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('frontend/assets/img/logo.png')}}" alt=""> -->
        <h1 class="sitename">JKTmicroBiz</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda<br></a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#chefs">Pembina</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="{{route('login')}}">Login</a></li>
          <li><a href="{{route('register')}}">Register</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#book-a-table">Daftar UMKM</a>

    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">JKTmicroBiz<br>UMKM Directory</h1>
            <p data-aos="fade-up" data-aos-delay="100"></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Daftar UMKM</a>
              <a href="https://youtu.be/Opksxsx8Sjw" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{asset('frontend/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami<br></h2>
        <p><span>Keetahui lebih</span> <span class="description-title">Tentang kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('frontend/assets/img/Tentang.jpg')}}" class="img-fluid mb-4" alt="">
            
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                JKTMicroBiz adalah platform yang diperuntukkan untuk mempromosikan bisnis. Anda dapat membuat page bisnis lalu mempromosikan produk, layanan maupun pelatihan/kursus dengan mudah.              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Fasilitas Iklan Advertorial.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Dari anggota, oleh anggota, untuk semua.</span></li>
              </ul>
              <p>
                Direktori UMKM JKTmicroBiz didirikan dengan tujuan untuk membantu para pelaku usaha mikro, kecil, dan menengah seluruh Indonesia khususnya dalam mempromosikan produk dan layanannya secara online. Selain berisi Daftar Perusahaan, Mitra UKM  juga menyediakan fasilitas Iklan Advertorial.
              </p>

              
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->



     <!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="{{asset('frontend/assets/img/stats-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Klien</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mitra</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pekerja</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>UMKM Kami</h2>
        <p><span>Cek</span> <span class="description-title">UMKM Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Kuliner</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Jasa</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Kursus</h4>
            </a>
          </li><!-- End tab nav item -->

          <!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>UMKM</p>
              <h3>Kuliner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/Tahu gejrot.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/Tahu gejrot.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Tahu Gejrot</h4>
                <p class="ingredients">
                  Kebon Jeruk, Jakarta Barat.
                </p>
                <p class="price">
                  RP.10.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/siomay bandung.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/siomay bandung.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Siomay Bandung</h4>
                <p class="ingredients">
                  Tanah Kusir, Jakarta Selatan.
                </p>
                <p class="price">
                  RP.20.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/sate padang.jpeg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/sate padang.jpeg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Sate Padang</h4>
                <p class="ingredients">
                  Kebon Jeruk, Jakarta Barat
                </p>
                <p class="price">
                  RP.20.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/pempek palembang.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/pempek palembang.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Pempek Palembang</h4>
                <p class="ingredients">
                  Cakung, Jakarta Timur.
                </p>
                <p class="price">
                  RP.35.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/ayam geprek.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/ayam geprek.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Ayam Geprek</h4>
                <p class="ingredients">
                  Lenteng Agung, Jakarta Selatan
                </p>
                <p class="price">
                  RP.20.000 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/es pisang ijo.webp')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/es pisang ijo.webp')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Es Pisang Ijo</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  RP.22.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>UMKM</p>
              <h3>Jasa</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/servis ac.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/servis ac.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Service AC</h4>
                <p class="ingredients">
                  Jakarta
                </p>
                <p class="price">
                  089691432988
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/servis hp.jpeg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/servis hp.jpeg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Service HP</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  081285768473
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/servis pompa.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/servis pompa.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Service Pompa Air</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  082156764310
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/tukang air.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/tukang air.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Air Isi Ulang</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  08386788764
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/cuci karpet.jpeg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/cuci karpet.jpeg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Cuci Karpet</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  08123215646
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/cuci mobil.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/cuci mobil.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Cuci Mobil</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  08987898086
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>UMKM</p>
              <h3>Kursus</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/kursus batik.jpeg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/kursus batik.jpeg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Kursus Membatik</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  081267678787
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/kursus bunga.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/kursus bunga.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Kursus Merangkai Bunga</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  087854443212
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/kursus kue.jpeg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/kursus kue.jpeg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Kursus Baking</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  08123456789
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/kursus makeup.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/kursus makeup.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Kursus Make-up</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  089965431234
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/kursus salon.jpg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/kursus salon.jpg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Kursus Salon</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  081254210900
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/kursus setir.jpeg')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/kursus setir.jpeg')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Kursus Mengemudi</h4>
                <p class="ingredients">
                  Jakarta                </p>
                <p class="price">
                  098657897643
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/menu-item-1.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/menu-item-2.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/menu-item-4.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/menu-item-5.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('frontend/assets/img/menu/menu-item-6.png')}}" class="glightbox"><img src="{{asset('frontend/assets/img/menu/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONI</h2>
        <p>Yang mereka Katakan<span class="description-title">Tentang Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Sejak bergabung dengan JKTmicrobiz, usaha saya mendapatkan eksposur yang luar biasa. Banyak pelanggan baru yang mengetahui tentang produk saya. Terima kasih JKTmicrobiz!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Agus Cuguy</h3>
                      <h4>Pelaku UMKM</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/Agus cuguy.jpg')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Direktori UMKM JKTmicrobiz benar-benar membantu menghubungkan kami dengan pelanggan dan mitra bisnis baru. Platform yang mudah digunakan dan sangat informatif!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Brando Franco Batubara</h3>
                      <h4>Pelaku UMKM</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/windah batubara.webp')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Saya sangat terbantu dengan fitur promosi di JKTmicrobiz. Omzet saya meningkat signifikan setelah bergabung dengan direktori ini. Saya sangat merekomendasikannya!</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Raka</h3>
                      <h4>Pengusaha Mebel</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/pewdiepie.jpeg')}}  " class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>JKTmicrobiz telah menjadi jembatan bagi kami untuk menjangkau lebih banyak konsumen. Dengan platform ini, usaha kecil seperti kami dapat bersaing dengan usaha yang lebih besar</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Fariz Gamal</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/gamal.jpg')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pembina UMKM</h2>
        <p><span>Para</span> <span class="description-title">Pembina UMKM<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/chefs/sandi.png')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dr. H. Sandiaga Salahuddin Uno, B.B.A., M.B.A.</h4>
                <span></span>
                <p>Sandiaga Uno memulai karir bisnisnya sebagai seorang pengusaha sukses. Dia mendirikan Saratoga Investama Sedaya bersama dengan Edwin Soeryadjaya. Perusahaan ini fokus pada investasi di berbagai sektor, termasuk sumber daya alam, infrastruktur, dan konsumer.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/chefs/erik tohir.webp')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dr. (H.C.) H. Erick Thohir, B.A., M.B.A.</h4>
                <span></span>
                <p>Erick Thohir dikenal sebagai pengusaha sukses dengan berbagai bisnis di bidang media, olahraga, dan investasi.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/chefs/Nadiem_Makarim.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nadiem Anwar Makarim, B.A., M.B.A.</h4>
                <span></span>
                <p>Nadiem Anwar Makarim adalah seorang pengusaha dan politisi Indonesia yang terkenal sebagai pendiri Gojek dan saat ini menjabat sebagai Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia.</p>
              </div>
            </div>
          </div><!-- End Chef Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berminat Bergabung</h2>
        <p><span>Daftar</span> <span class="description-title">Menjadi UMKM<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 reservation-img" style="background-image: url('frontend/assets/img/reservation.jpg')"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama UMKM" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email UMKM" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="website" id="website" placeholder="Website UMKM" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori UMKM" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat UMKM" required="">
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="pemilik" id="pemilik" placeholder="Pemilik UMKM" required="">
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Deskripsi UMKM"></textarea>
              </div>

              <div class="text-center mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                <button type="submit">Daftar UMKM</button>
              </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri</h2>
        <p><span>Cek</span> <span class="description-title">Galeri Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/belanja umkm.webp')}}"><img src="{{asset('frontend/assets/img/gallery/belanja umkm.webp')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/cewe umkm.webp')}}"><img src="{{asset('frontend/assets/img/gallery/cewe umkm.webp')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/tenda umkm.webp')}}"><img src="{{asset('frontend/assets/img/gallery/tenda umkm.webp')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/tenda 2 umkm.webp')}}"><img src="{{asset('frontend/assets/img/gallery/tenda 2 umkm.webp')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/dimsum umkm.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/dimsum umkm.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/belanja.jpeg')}}"><img src="{{asset('frontend/assets/img/gallery/belanja.jpeg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/tenda 3.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/tenda 3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/belanja lagi.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/belanja lagi.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p><span>Butuh Bantuan?</span> <span class="description-title">Kontak Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.160133868941!2d106.73741057462657!3d-6.109130293877397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d5ac580a8c7%3A0x10c69e0c21904c4!2sPantai%20Indah%20Kapuk!5e0!3m2!1sen!2sid!4v1720509193648!5m2!1sen!2sid" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>P. Sherman, 42 Wallaby Way, Pantai Indah Kapuk.</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Narahubung</h3>
                <p>+62 0812121213</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p>jktmicrobiz@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Jam Kerja<br></h3>
                <p><strong>Sen-Sab:</strong> 11.00 - 23.00; <strong>Minggu:</strong> Libur</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>P. Sherman, 42 Wallaby Way, Pantai Indah Kapuk.</p>
            <p>Jakarta, JKT Utara 14470</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Telepon:</strong> <span>+62 0812121213</span><br>
              <strong>Email:</strong> <span>jktmicrobiz@gmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Kerja</h4>
            <p>
              <strong>Sen-Sab:</strong> <span>11.00 - 23.00</span><br>
              <strong>Minggu</strong>: <span>Tunggu</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">JKTMicroBiz</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->

<script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


  <!-- Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>