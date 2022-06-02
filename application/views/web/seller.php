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
                    <li class="breadcrumb-item active">Seller Kami</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- About Us Area Start -->
        <div class="skill-area white-bg ptb-90">
            <div class="container">
                    <!-- Row End -->
                    <div class="row">

                         <!-- Sidebar Shopping Option End -->
                         <!-- Product Categorie List Start -->
                         <div class="col-lg-12 order-1 order-lg-2">
                              <!-- Grid & List View Start -->
                              <div class="row">
                                   <div class="col-sm-6">
                                        <div
                                             class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                                             <form method="GET"
                                                  action=""
                                                  style="width:100% !important">
                                                  <div class="main-toolbar-sorter clearfix"
                                                       style="width:100% !important">
                                                       <div class="toolbar-sorter d-md-flex align-items-center"
                                                            style="width:100% !important">
                                                            <label style="width:60% !important">PILIH KOTA : </label>
                                                            <select class="comboBox form-control" name="kabupaten"
                                                                 style="width:180%">
                                                                 <option value="">PILIH KOTA</option>
                                                                 <?php foreach ($this->db->get('regencies')->result() as $kota): ?>
                                                                <option value="<?php echo $kota->id ?>"><?php echo $kota->name ?></option>
                                                                 <?php endforeach ?>
                                                                 
                                                                 
                                                            </select> &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="submit" class="btn" style="color:  white;background-color:#CC9C27; border-radius: 20px;">Cari
                                                                 Seller</button>

                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div
                                             class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                                             <form method="GET"
                                                  action=""
                                                  style="width:100% !important">
                                                  <div class="main-toolbar-sorter clearfix"
                                                       style="width:100% !important;">
                                                       <div class="toolbar-sorter d-md-flex align-items-center"
                                                            style="width:100% !important">
                                                            <label style="width:60% !important">CARI SELLER : </label>
                                                            <input type="text" name="id_seller" class="form-control"
                                                                 placeholder="ID Seller Atau Nama">&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="submit" class="btn" style="color:  white;background-color:#CC9C27; border-radius: 20px;">Cari
                                                                 Seller</button>

                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                              <?php 
                              $kota = "";
                              $id_seller = "";
                              if (isset($_GET['kabupaten'])) {
                                   $kota = $_GET['kabupaten'];
                              } 
                              if (isset($_GET['id_seller'])) {
                                   $id_seller = $_GET['id_seller'];
                              } 
                               ?>
                              <div
                                   class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                                   <h2><?php echo ($kota != '') ? get_data('regencies','id',$kota,'name') : $id_seller ?></h2>
                              </div>

                              <div class="shop-area mb-all-40">
                                   <!-- Grid & List Main Area End -->
                                   <div class="tab-content">

                                        <div id="grid-view" class="tab-pane fade show active">

                                             <div class="row ">
                                                  <br>
                                                  <?php
                                                  if ($kota != '') {
                                                      $this->db->where('id_kabupaten', $kota);
                                                  } elseif($id_seller !='') {
                                                    $this->db->where('kode_member', $id_seller);
                                                  } else {
                                                       $this->db->order_by('id_member', 'desc');
                                                       $this->db->limit(10);
                                                  }
                                                  $cari = $this->db->get('member');
                                                   foreach ($cari->result() as $row): ?>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                                       <!-- Single Product Start Here -->
                                                       <div class=""
                                                            style="border: 1px solid #d8d8d8;border-radius: 2%;margin-top: 10px;">
                                                            <br>
                                                            <div class="pro-content" align="center">
                                                                 <h6 class="pro-title">
                                                                      <?php echo $row->nama_lengkap ?>
                                                                 </h6>
                                                                 <p>
                                                                 <table>
                                                                      <span class="sticker-new"
                                                                           style="top: -9px;"><?php echo strtoupper($row->level) ?> </span>
                                                                 </table>
                                                                 <table>
                                                                      <tr>
                                                                           <td><i class="fa fa-barcode"></i></td>
                                                                           <td>&nbsp;&nbsp;</td>
                                                                           <td><?php echo $row->kode_member ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                           <td><i class="fa fa-facebook"></i></td>
                                                                           <td>&nbsp;&nbsp;</td>
                                                                           <td>
                                                                                <a href="<?php echo $row->facebook ?>"><?php echo $row->facebook ?></a>
                                                                           </td>
                                                                      </tr>
                                                                      <tr>
                                                                           <td><i class="fa fa-whatsapp"></i></td>
                                                                           <td>&nbsp;&nbsp;</td>
                                                                           <td>
                                                                                <?php if ($row->no_telp != ''): ?>
                                                                                <a
                                                                                     href="https://api.whatsapp.com/send?phone=+<?php echo $row->no_telp ?>&text=Hai Saya tertarik untuk membeli produk GLOWZA" target="_blank">Hubungi
                                                                                     Saya</a>
                                                                                <?php endif ?>

                                                                           </td>
                                                                      </tr>
                                                                      <tr>
                                                                           <td><i class="fa fa-instagram"></i></td>
                                                                           <td>&nbsp;&nbsp;</td>
                                                                           <td>
                                                                                <a
                                                                                     href="<?php echo $row->instagram ?>"><?php echo $row->instagram ?></a>
                                                                                <!-- <a href="https://www.instagram.com/ms.glow_beautycare05/">ms.glow_beautycare05</a> -->
                                                                           </td>
                                                                      </tr>
                                                                 </table>
                                                                 
                                                                 </span>
                                                                 </p>
                                                                 <br>
                                                            </div>
                                                       </div>
                                                       <!-- Single Product End Here -->
                                                  </div>
                                                  <?php endforeach ?>


                                             </div>
                                        </div>
                                        <!-- Grid & List Main Area End -->
                                   </div>
                                   <!-- Shop Breadcrumb Area Start -->
                                   <br>
                                   <!-- Shop Breadcrumb Area End -->
                              </div>
                              <!-- product Categorie List End -->
                         </div>
                         <!-- Row End -->
                    </div>
                    <!-- Container End -->
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