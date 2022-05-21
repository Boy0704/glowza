<div class="col-xl-7 col-lg-8 d-none d-lg-block">
    <nav>
        <ul class="header-bottom-list d-flex">
            <li <?php echo ($this->uri->segment(2) == 'index' OR $this->uri->segment(2) == '') ? 'class="active"' : '' ?>>
                <a href="web/index">Beranda</a>
            </li>
            <li <?php echo ($this->uri->segment(2) == 'detail_produk') ? 'class="active"' : '' ?>>
                <a class="drop-icon" href="#">Produk Kami</a>
                <!--  Mega-Menu Start -->
                <ul class="ht-dropdown megamenu megamenu-three ">
                    <!-- Single Column Start -->
                    <?php foreach ($this->db->get('paket')->result() as $rw): ?>
                    <li>
                        <ul>
                            <li class="menu-tile"><?php echo $rw->nama_paket ?></li>
                            <?php foreach ($this->db->get_where('produk',['id_paket'=>$rw->id_paket])->result() as $br): ?>
                            
                            <li>
                                <a href="web/detail_produk/<?php echo $br->id_produk ?>"><?php echo $br->nama_produk ?></a>
                            </li>

                            <?php endforeach ?>
                           
                        </ul>
                    </li>
                    <!-- Single Column End -->
                    <?php endforeach ?>
                </ul>
                <!-- Mega-Menu End -->
            </li>
            <li <?php echo ($this->uri->segment(2) == 'about') ? 'class="active"' : '' ?>>
                <a href="web/about">Tentang Kami</a>
            </li>
            <li <?php echo ($this->uri->segment(2) == 'klinik') ? 'class="active"' : '' ?>>
                <a href="web/klinik">Klinik Kami</a>
            </li>
           <!--  <li>
                <a href="our-seller.php">Our Seller</a>
            </li>
            <li>
                <a href="testimonial.php">Testimonial</a>
            </li> -->
            <li <?php echo ($this->uri->segment(2) == 'seller') ? 'class="active"' : '' ?>>
                <a href="web/seller">Seller Kami</a>
            </li>
            <!-- <li>
                <a href="https://www.msglowid.com/Website/Halaman/skin_analyzer">Skin Analyzer</a>
            </li> -->
            <!-- <li>
                <a href="#">Contact Us</a>
            </li> -->
            
            
        </ul>
    </nav>
</div>