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
                    <li class="breadcrumb-item active">Detail Produk</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <?php 
        $id_produk = $this->uri->segment(3);
        $produk = $this->db->get_where('produk', ['id_produk'=>$id_produk])->row();
         ?>
        <div class="main-product-thumbnail white-bg ptb-90">
            <div class="container">
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-4 col-md-6 mb-all-40">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <a data-fancybox="images" href="image/produk/<?php echo $produk->foto ?>"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-view"></a>
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <a data-fancybox="images" href="image/produk/<?php echo $produk->foto ?>"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-view"></a>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <a data-fancybox="images" href="image/produk/<?php echo $produk->foto ?>"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-view"></a>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <a data-fancybox="images" href="image/produk/<?php echo $produk->foto ?>"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-view"></a>
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                <a class="active" data-toggle="tab" href="#thumb1"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb2"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb3"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb4"><img src="image/produk/<?php echo $produk->foto ?>" alt="product-img" alt="product-thumbnail"></a>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header"><?php echo $produk->nama_produk ?></h3>
                            <ul class="rating-summary">
                                <li class="rating-pro">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="read-review"><a href="#">read reviews (0)</a></li>
                                
                            </ul>
                            <div class="pro-thumb-price mt-10">
                                <p class="d-flex align-items-center"><span class="price">Rp. <?php echo number_format($produk->harga_jual) ?></span></p>
                            </div>
                            <hr>
                            <h6 style="font-weight: 800">Deskirpsi Produk : </h6>
                            <br>
                            <p><?php echo $produk->deskripsi ?></p>
                            <hr>
                            <h6 style="font-weight: 800">Cara penggunaan</h6>
                            <br>
                            <p><?php echo $produk->cara_pakai ?></p>
                            <hr>
                            <h6 style="font-weight: 800">Kandungan Produk</h6>
                            <br>
                            <p><?php echo $produk->komposisi ?></p>
                            <br>
                            <br>
                            <a href="#" data-toggle="modal" data-target="#pilihan" class="btn btn-outline-dark"><i class="fa fa-shopping-cart"></i> Beli Produk</a>

                            <!-- Modal -->
                            <div class="modal fade" id="pilihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <a href="web/seller" target="_blank" class="btn btn-outline-dark btn-block"><i class="fa fa-shopping-cart"></i> Beli Produk Ke Member Kami</a>
                                    <a href="https://api.whatsapp.com/send?phone=<?php echo get_data('setting','id_setting',1,'no_telp') ?>&amp;text=hallo kak, saya mau tanya produk <?php echo $produk->nama_produk ?>" target="_blank" class="btn btn-outline-dark btn-block"><i class="fa fa-comment"></i> Tanya Produk Ke Customer Service</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        
        
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