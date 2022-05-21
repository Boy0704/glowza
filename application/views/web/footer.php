<div class="container">
                <!-- Footer Middle Start -->
                <div class="footer-middle ptb-90">
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-4 col-md-6 mb-all-30">
                            <div class="single-footer">
                                <div class="footer-logo mb-20">
                                    <a href="#"><img class="img" src="front/assets/logo.png" alt="logo-img"></a>
                                </div>
                                <div class="footer-content">
                                    <ul class="footer-list first-content">
                                        <li><b><?php echo get_data('setting','id_setting',1,'brand') ?></b></li>
                                        <li><i class="pe-7s-map-marker"></i><?php echo get_data('setting','id_setting',1,'alamat') ?></li>
                                        <li><i class="pe-7s-mail"></i><?php echo get_data('setting','id_setting',1,'email') ?></li>
                                        <li><i class="pe-7s-clock"></i><?php echo get_data('setting','id_setting',1,'jam_kerja') ?></li>
                                        <li class="mt-20">
                                            <ul class="social-icon">
                                                <li><a href="<?php echo get_data('setting','id_setting',1,'fb') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="<?php echo get_data('setting','id_setting',1,'ig') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="<?php echo get_data('setting','id_setting',1,'youtube') ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-4 col-md-6 mb-all-30">
                            <!-- <div class="single-footer">
                                <div class="single-footer">
                                    <h4 class="footer-title">Our Produk</h4>
                                    <div class="footer-content">
                                        <ul class="footer-list">
                                            <li><a href="Website/Halaman/our_product/skincare.html">Skin Care</a></li>
                                            <li><a href="Website/Halaman/our_product/Bodycare.html">Body Care</a></li>
                                            <li><a href="Website/Halaman/our_product/MsCosmetic.html">Cosmetic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <!-- <div class="col-lg-2 col-md-6 mb-sm-30">
                            <div class="single-footer">
                                <div class="single-footer">
                                    <h4 class="footer-title">Our Profile</h4>
                                    <div class="footer-content">
                                        <ul class="footer-list">
                                            <li><a href="#">F&Q</a></li>
                                            <li><a href="Website/Halaman/about_us.html">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="Website/Halaman/our_seller.html">Our Seller</a></li>
                                            <li><a href="Website/Halaman/our_clinic.html">Our Clinic</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer">
                                <div class="single-footer">
                                    <h4 class="footer-title">Daftarkan Email Anda Sekarang</h4>
                                    <div class="footer-content subscribe-form">
                                        <div class="subscribe-box">
                                            <form action="web/subs" method="POST">
                                                <input type="text" name="email" id="subscribe_email" placeholder="Your email address">
                                                <button type="submit" class="pe-7s-mail-open"></button>
                                            </form>
                                        </div>
                                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                        <script type="text/javascript"><?php echo $this->session->userdata('pesan') ?></script>
                                        <p class="mt-10">Dapatkan Penawaran Menarik Melalui Email</p>
                                    </div>
                                    <br>
                                    <address>
                                       <!--  <p style="color: black;">
                                            <p style="color:black">
                                              <img src="https://www.green-nitrogen.com/web/image/counter/hariini.png"> 
                                              Penunjung Hari Ini : 103 <br/>
                                              <img src="https://www.green-nitrogen.com/web/image/counter/online.png"> 
                                              Pengunjung Hari Kemarin : 137<br/>
                                              <img src="https://www.green-nitrogen.com/web/image/counter/total.png"> 
                                              Total Pengunjung Website : 575                        </p>
                                        </p> -->
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Footer Middle End -->
                <!-- Footer Bottom Start -->
                <hr>
                <div class="footer-copyright">
                    <p style="text-align: center;">Copyright <a href="#"><?php echo get_data('setting','id_setting',1,'brand') ?></a> All Rights Reserved</p>
                </div>
                <!-- Footer Bottom End -->
            </div>