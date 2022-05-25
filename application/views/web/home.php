<html class="no-js">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Glowza - Official Website GLOWZA BEAUTY | GLOWZA PRODUK ORI | GLOWZA DISTRIBUTOR RESMI | PUSAT PENJUALAN
          GLOWZA</title>
     <base href="<?php echo base_url() ?>">

     <meta name="description"
          content=" GLOWZA OFFICIAL WEBSITE – Brand Skincare ternama di Indonesia yang dapat memenuhi kebutuhan kulitmu dari perawatan wajah hingga tubuh mu." />
     <meta name="keywords" content="glowza, glowing, healthy, skincare, bodycare" />

     <meta property="fb:app_id" content="261910274147201" />
     <meta property="og:url" content="index.html">
     <meta property="og:type" content="article" />
     <meta property="og:title" content="GLOWZA OFFICIAL WEBSITE" />
     <meta property="og:description"
          content="GLOWZA OFFICIAL WEBSITE – Brand Skincare ternama di Indonesia yang dapat memenuhi kebutuhan kulitmu mulai dari perawata wajah hingga tubuhmu." />
     <meta property="og:image" content="assets/img/logo/logo.png" />
     <meta name="facebook-domain-verification" content="c763mnwndxid07oynvu3hm90meuf9y" />
     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:site" content="index.html">
     <meta name="twitter:creator" content="">
     <meta name="twitter:title" content="GLOWZA">
     <meta name="twitter:description"
          content=" GLOWZA OFFICIAL WEBSITE – Brand Skincare ternama di Indonesia yang dapat memenuhi kebutuhan kulitmu mulai dari perawata wajah hingga tubuhmu.">
     <!-- <meta name="facebook-domain-verification" content="6bygvrt6qxy7x0tdt1wy1ia6jwpn8w" /> -->
     <!-- <meta name="detectify-verification" content="9b518c57ca1dffc43379deb60c869a5b" /> -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Favicons -->
     <link rel="shortcut icon" href="assets/logo.png">
     <!-- Fontawesome css -->
     <link rel="stylesheet" href="front/assets/css/font-awesome.min.css">
     <!-- Animate css -->
     <link rel="stylesheet" href="front/assets/css/animate.css">
     <!-- 7-stroke fonts css -->
     <link rel="stylesheet" href="front/assets/css/pe-icon-7-stroke.min.css">
     <!-- Nice select css -->
     <link rel="stylesheet" href="front/assets/css/nice-select.css">
     <!-- Jquery fancybox css -->
     <link rel="stylesheet" href="front/assets/css/jquery.fancybox.css">
     <!-- Jquery ui price slider css -->
     <link rel="stylesheet" href="front/assets/css/jquery-ui.min.css">
     <!-- Meanmenu css -->
     <link rel="stylesheet" href="front/assets/css/meanmenu.min.css">
     <!-- Owl carousel css -->
     <link rel="stylesheet" href="front/assets/css/owl.carousel.min.css">
     <!-- Bootstrap css -->
     <link rel="stylesheet" href="front/assets/css/bootstrap.min.css">
     <!-- Custom css -->
     <link rel="stylesheet" href="front/assets/css/default.css">
     <!-- Main css -->
     <link rel="stylesheet" href="front/assets/css/style.css">
     <!-- Responsive css -->
     <link rel="stylesheet" href="front/assets/css/responsive.css">
     <!-- Modernizer js -->
     <link rel="stylesheet" href="front/assets/css/default/icofont.min.css">
     <script src="front/assets/js/vendor/modernizr-3.5.0.min.js"></script>

</head>

<body>

     <div class="wrapper">

          <header>
               <?php $this->load->view('web/header'); ?>
          </header>
          <!-- Main Header Area End Here -->
          <!-- Slider Area Start -->
          <div class="slider-area">
               <!-- Slider -->
               <section class="slider-section">
                    <div id="carousel-example-1z" class="carousel slide carousel-fade mb-5" data-ride="carousel">
                <!--Indicators-->
                     <ol class="carousel-indicators">
                         <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                         <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                         <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                         <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                     </ol>
                     <!--/.Indicators-->
                     <!--Slides-->
                     <div class="carousel-inner" role="listbox">
                         <?php foreach ($this->db->get('slider')->result() as $row): ?>
                         <!--First slide-->
                         <div class="carousel-item <?php echo ($row->id_slider==1) ? 'active' : '' ?>">
                             <img class="d-block w-100" src="front/assets/css/img/slider/<?php echo $row->foto ?>" alt="First slide">
                         </div>
                         <?php endforeach ?>
                         <!--/First slide-->
                     </div>
                     <!--/.Slides-->
                     <!--Controls-->
                     <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                     <!--/.Controls-->
                 </div>
               </section> <!-- End of Slider -->
          </div>

          
          <!-- Slider Area End -->
          <!-- New Product Banner End Here -->
          <div class="new-arrival no-border-style ptb-90">
               <div class="container">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                         <h2 style="color:#CC9C27"> Produk Terlaris </h2>
                         <p style="color:#CC9C27">Skincare terbaik buat wajahmu</p>
                    </div>
                    <!-- Section Title End -->
                    <div id="grid-view" class="tab-pane fade show active">
                         <div class="row border-hover-effect ">

                              <?php 
                            $this->db->where('id_paket', 1);
                            $skincare = $this->db->get('produk');
                            foreach ($skincare->result() as $skin): ?>
                              <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                   <div class="single-makal-product">
                                        <div class="pro-img">
                                             <a href="web/detail_produk/<?php echo $skin->id_produk ?>">
                                                  <img src="image/produk/<?php echo $skin->foto ?>" alt="product-img">
                                             </a>
                                             <span class="sticker-new">SKINCARE</span>

                                        </div>
                                        <div class="pro-content">
                                             <h4 class="pro-title">
                                                  <a
                                                       href="web/detail_produk/<?php echo $skin->id_produk ?>"><?php echo $skin->nama_produk ?></a>
                                             </h4>
                                             <a href="web/detail_produk/<?php echo $skin->id_produk ?>" class="btn btn-outline-dark" style="text-align: center;">
                                                  Selengkapnya
                                             </a>


                                        </div>
                                   </div>
                                   <!-- Single Product End Here -->
                              </div>
                              <?php endforeach ?>

                         </div>
                    </div>
               </div>


               <!-- New Product Banner Start Here -->
               <!-- <div class="product-bannner pro-border-style">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-sm-30">
                        <div class="single-banner">
                            <a href="Website/Halaman/our_product/Bodycare.html">
                                <img src="front/assets/img/banner-kecil/nov_1.jpg" alt="banner-img">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-banner">
                            <a href="Website/Halaman/our_product/skincare.html">
                                <img src="front/assets/img/banner-kecil/nov_2.jpg" alt="banner-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
          </div>

          <!-- New Arrival Products Start Here -->
          <div class="new-arrival no-border-style ptb-90">
               <div class="container">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                         <h2 style="color:#CC9C27">Produk Terbaru</h2>
                         <p style="color:#CC9C27">Produk terbaru kami ?</p>
                    </div>
                    <!-- Section Title End -->
                    <div id="grid-view" class="tab-pane fade show active">
                         <div class="row border-hover-effect ">

                              <?php 
                                   $this->db->order_by('id_produk', 'desc');
                                   $produk_new = $this->db->get('produk');
                                   foreach ($produk_new->result() as $produk): ?>
                              <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                   <div class="single-makal-product">
                                        <div class="pro-img">
                                             <a href="web/detail_produk/<?php echo $produk->id_produk ?>">
                                                  <img src="image/produk/<?php echo $produk->foto ?>" alt="product-img">
                                             </a>
                                             <!-- <span class="sticker-new">Best Seller</span> -->

                                        </div>
                                        <div class="pro-content">
                                             <h4 class="pro-title">
                                                  <a
                                                       href="web/detail_produk/<?php echo $produk->id_produk ?>"><?php echo $produk->nama_produk ?></a>
                                             </h4>
                                             <a href="web/detail_produk/<?php echo $skin->id_produk ?>" class="btn btn-outline-dark" style="text-align: center;">
                                                  Selengkapnya
                                             </a>
                                        </div>
                                   </div>
                                   <!-- Single Product End Here -->
                              </div>
                              <?php endforeach ?>

                         </div>
                    </div>
               </div>
               <!-- New Arrival Products End Here -->

               <!-- Our Best Seller Product Start Here -->
               <div class="our-product pt-90">
                    <div class="container">
                         <!-- Section Title Start -->
                         <div class="section-title text-center">
                              <h2 style="color:#CC9C27">TESTIMONIAL</h2>
                              <p>Our Testimonial& Review From Customer </p>
                         </div>
                         <div class="container-fluid">
                              <div class="row" style="margin-top: 2%;">

                                   <?php foreach ($this->db->get('testimoni')->result() as $moni): ?>

                                   <div class="col-md-4 mb-sm-30">
                                        <div class="single-banner">
                                             <a href="<?php echo $moni->link ?>">
                                                  <img src="image/testimoni/<?php echo $moni->foto ?>" alt="banner-img">
                                             </a>
                                        </div>
                                   </div>

                                   <?php endforeach ?>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- Our Best Seller Product End Here -->


               <!-- Blog Area Start Here -->
               <div class="blog-area ptb-90">
                    <div class="container">
                         <div class="main-blog-area">
                              <!-- Section Title Start -->
                              <div class="section-title text-center">
                                   <h2 style="color:#CC9C27">FEED</h2>
                                   <p>Our Feeds Instagram </p>
                              </div>
                              <!-- Section Title End -->
                              <!-- Blog Activation Start -->
                              <div class="col-sm-12">
                                   <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                   <div class="elfsight-app-93c857c9-9669-47f0-9cc4-3012d055a8c0"></div>
                              </div>
                              <!-- Blog Activation End -->
                         </div>
                    </div>
                    <!-- Container End -->
               </div>
               <!-- Blog Area End Here -->

               <!-- Testmonial Start Here -->
               <div class="blog-area ptb-90">
                    <section>
                         <div class="section-title text-center">
                              <h2 style="color:#CC9C27">Lokasi Kami</h2>
                              <p>di google maps </p>
                         </div>
                         <div class="goole-map">
                              <iframe
                                   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4959.109530986801!2d106.78786464251654!3d-6.264413151119323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d2544fa117%3A0x6375849bf50d070d!2sGLOWZA%20SKINCARE!5e0!3m2!1sid!2sid!4v1653036538056!5m2!1sid!2sid"
                                   width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                   referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                    </section>

               </div>
               <!-- Testmonial End Here -->


               <!-- Support Area End Here -->
               <!-- Footer Area Start Here -->

               <!-- Footer Area End Here -->
               <!-- Quick View Content Start -->

               <!-- Quick View Content End -->
          </div>
          <footer class="pb-35">
               <?php $this->load->view('web/footer'); ?>
          </footer>
     </div>
     <!-- Main Wrapper End Here -->

     <!-- jquery 3.3.1 -->
     <script src="front/assets/js/jquery-1.11.0.min.js"></script>
     <!-- Countdown js -->
     <script src="front/assets/js/jquery.countdown.min.js"></script>
     <!-- Mobile menu js -->
     <script src="front/assets/js/jquery.meanmenu.min.js"></script>
     <!-- ScrollUp js -->
     <script src="front/assets/js/jquery.scrollUp.js"></script>
     <!-- Fancybox js -->
     <script src="front/assets/js/jquery.fancybox.min.js"></script>
     <!-- Jquery nice select js -->
     <script src="front/assets/js/jquery.nice-select.min.js"></script>
     <!-- Jquery ui price slider js -->
     <script src="front/assets/js/jquery-ui.min.js"></script>
     <!-- Owl carousel -->
     <script src="front/assets/js/owl.carousel.min.js"></script>
     <!-- Bootstrap popper js -->
     <script src="front/assets/js/popper.min.js"></script>
     <!-- Bootstrap js -->
     <script src="front/assets/js/bootstrap.min.js"></script>
     <!-- Plugin js -->
     <script src="front/assets/js/plugins.js"></script>
     <script src="front/assets/skin/webcam.js"></script>
     <script src="front/assets/skin/skinanalyzer.min.js"></script>
     <link href="front/cdn.jsdelivr.net/npm/select2%404.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
     <script src="front/cdn.jsdelivr.net/npm/select2%404.1.0-beta.1/dist/js/select2.min.js"></script>
     <!-- Main activaion js -->
     <script type="text/javascript">
     $(".comboBox").select2({
          placeholder: "Select Data",
          allowClear: true
     });
     </script>
     <script src="front/assets/js/main.js"></script>
</body>

</html>