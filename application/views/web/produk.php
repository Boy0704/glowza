<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glowza - Official Website GLOWZA BEAUTY | GLOWZA PRODUK ORI | GLOWZA DISTRIBUTOR RESMI | PUSAT PENJUALAN GLOWZA</title>
    <base href="<?php echo base_url() ?>">

    <meta name="description" content=" GLOWZA OFFICIAL WEBSITE – Brand Skincare ternama di Indonesia yang dapat memenuhi kebutuhan kulitmu dari perawatan wajah hingga tubuh mu." />
    <meta name="keywords" content="glowza, glowing, healthy, skincare, bodycare" />

    <meta property="fb:app_id"          content="261910274147201" /> 
    <meta property="og:url"             content="index.html">
    <meta property="og:type"            content="article" />
    <meta property="og:title"           content="GLOWZA OFFICIAL WEBSITE" />
    <meta property="og:description"     content="GLOWZA OFFICIAL WEBSITE – Brand Skincare ternama di Indonesia yang dapat memenuhi kebutuhan kulitmu mulai dari perawata wajah hingga tubuhmu." />
    <meta property="og:image"           content="assets/img/logo/logo.png" /> 
    <meta name="facebook-domain-verification" content="c763mnwndxid07oynvu3hm90meuf9y" />
    <meta name="twitter:card"           content="summary_large_image">
    <meta name="twitter:site"           content="index.html">
    <meta name="twitter:creator"        content="">
    <meta name="twitter:title"          content="GLOWZA">
    <meta name="twitter:description"    content=" GLOWZA OFFICIAL WEBSITE – Brand Skincare ternama di Indonesia yang dapat memenuhi kebutuhan kulitmu mulai dari perawata wajah hingga tubuhmu.">
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
        

        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- About Us Area Start -->
        <div class="skill-area white-bg ptb-90">
            <div class="container">
                <div class="section-title text-center">
                         <h2 style="color:#CC9C27">Produk Terbaru</h2>
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
                                             <a href="web/detail_produk/<?php echo $produk->id_produk ?>" class="btn btn-outline-dark" style="text-align: center;">
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
        </div>
        <!-- About Us Area End -->
        
        
        <!-- Footer Area Start Here -->
         <footer class="pb-35">
            <?php $this->load->view('web/footer'); ?>
        </footer>
        <!-- Footer Area End Here -->
        <!-- Quick View Content Start -->
        
        <!-- Quick View Content End -->
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