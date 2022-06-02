<!-- Header Top Start Here -->
            <div class="header-top">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="row justify-content-lg-between justify-content-center">
                            <!-- Header Top Left Start -->
                            <div class="header-top-left order-2 order-lg-1">
                                <ul>
                                    
                                    <li>
                                        <a href="mailto:<?php echo get_data('setting','id_setting',1,'email') ?>"><i class="fa fa-envelope"></i> <span><?php echo get_data('setting','id_setting',1,'email') ?></span></a>
                                    </li>
                                    <li>
                                        <ul class="social-icon">
                                            <li>
                                                <a href="<?php echo get_data('setting','id_setting',1,'fb') ?>">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_data('setting','id_setting',1,'ig') ?>" >
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_data('setting','id_setting',1,'youtube') ?>">
                                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Top Left End -->
                            <!-- Header Top Right Start -->
                            <div class="header-top-right order-1 order-lg-1">
                                <ul>
                                    <li>
                                        <a href="login">
                                           Login Member 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Top Right End -->
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            <div class="header-middle stick header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo Start -->
                        <div class="col-xl-3 col-lg-2 col-6">
                            <div class="logo">
                                <a href="">
                                    <img src="front/assets/logo.png" alt="logo-image" style="width: 230px; ">
                                </a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Menu Area Start Here -->
                        <?php $this->load->view('web/menu'); ?>
                        <!-- Menu Area End Here -->
                        <!-- Cart Box Start Here -->
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="cart-box">
                                <ul>
                                    <!-- <li>
                                        <a href="#">
                                            <span class="pe-7s-search"></span>
                                        </a>
                                        <div class="categorie-search-box ht-dropdown">
                                            
                                        </div>
                                    </li> -->
                                 
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                    <!-- Mobile Menu Start Here -->
                    <?php $this->load->view('web/mobile_menu'); ?>
                    
                </div>
               
            </div>
            <!-- Header Middle End Here -->