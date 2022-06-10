<div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
          <div>
               <img src="assets/logo.png" class="logo-icon" alt="logo icon">
          </div>
          <div>
               <h4 class="logo-text" style="color: #CC9C27">Glowza</h4>
          </div>
          <div class="toggle-icon ms-auto" style="color: #CC9C27"><i class='bx bx-arrow-to-left'></i>
          </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
          <li class="menu-label">Main Menu</li>
          <?php if ($this->session->userdata('level') == 'superadmin'): ?>
               <li>
                    <a href="app">
                         <div class="parent-icon"><i class='bx bx-home-circle'></i>
                         </div>
                         <div class="menu-title">Dashbord</div>
                    </a>
               </li>
               <li>
                    <a href="produk">
                         <div class="parent-icon"><i class='bx bx-box'></i>
                         </div>
                         <div class="menu-title">Data Produk</div>
                    </a>
               </li>
               <li>
                    <a href="paket">
                         <div class="parent-icon"><i class='bx bx-movie'></i>
                         </div>
                         <div class="menu-title">Data Paket</div>
                    </a>
               </li>
               <li>
                    <a class="has-arrow" href="javascript:;">
                         <div class="parent-icon"> <i class="bx bx-chevrons-right"></i>
                         </div>
                         <div class="menu-title">Manage Web</div>
                    </a>
                    <ul>
                         <li> <a href="slider"><i class="bx bx-right-arrow-alt"></i>Slide</a>
                         <li> <a href="testimoni"><i class="bx bx-right-arrow-alt"></i>Testimoni</a>
                         <li> <a href="subscribe"><i class="bx bx-right-arrow-alt"></i>Subscribe</a>
                         <li> <a href="setting"><i class="bx bx-right-arrow-alt"></i>Setting Web</a>
                         </li>
                        
                    </ul>
               </li>
               <li>
                    <a href="member">
                         <div class="parent-icon"><i class='bx bx-user-check'></i>
                         </div>
                         <div class="menu-title">Pendaftaran User</div>
                    </a>
               </li>
               <li>
                    <a href="reward">
                         <div class="parent-icon"><i class='bx bx-slider-alt'></i>
                         </div>
                         <div class="menu-title">Setting Reward</div>
                    </a>
               </li>
               <li>
                    <a href="reward/klaim_reward">
                         <div class="parent-icon"><i class='bx bx-cloud-download'></i>
                         </div>
                         <div class="menu-title">Klaim Reward</div>
                    </a>
               </li>
               <li>
                    <a href="app/statistik_pengunjung">
                         <div class="parent-icon"><i class='bx bx-line-chart-down'></i>
                         </div>
                         <div class="menu-title">Statistik Pengunjung</div>
                    </a>
               </li>
               <li>
                    <a href="point_bonus">
                         <div class="parent-icon"><i class='bx bx-wrench'></i>
                         </div>
                         <div class="menu-title">Setting Bonus Point</div>
                    </a>
               </li>
               <li>
                    <a href="kas_keluar">
                         <div class="parent-icon"><i class='bx bx-upvote'></i>
                         </div>
                         <div class="menu-title">Kas Keluar</div>
                    </a>
               </li>

               <li>
                    <a class="has-arrow" href="javascript:;">
                         <div class="parent-icon"> <i class="bx bx-printer"></i>
                         </div>
                         <div class="menu-title">Laporan</div>
                    </a>
                    <ul>
                         <li> <a href="cetak/stok" target="_blank"><i class="bx bx-right-arrow-alt"></i>Laporan Stok</a>
                         <li> <a href="cetak/jenis/penjualan"><i class="bx bx-right-arrow-alt"></i>Laporan Penjualan</a>
                         <li> <a href="cetak/jenis/pendapatan"><i class="bx bx-right-arrow-alt"></i>Laporan Pendapatan</a>
                         <li> <a href="cetak/jenis/pengeluaran"><i class="bx bx-right-arrow-alt"></i>Laporan Kas Keluar</a>
                         <li> <a href="cetak/jenis/pendaftaran"><i class="bx bx-right-arrow-alt"></i>Pendaftaran Member</a>
                         </li>
                        
                    </ul>
               </li>

               <li>
                    <a href="app_user">
                         <div class="parent-icon"><i class='bx bx-user-circle'></i>
                         </div>
                         <div class="menu-title">Master User</div>
                    </a>
               </li>
          <?php endif ?>

          <?php if ($this->session->userdata('level') == 'admin'): ?>
               <li>
                    <a href="app">
                         <div class="parent-icon"><i class='bx bx-home-circle'></i>
                         </div>
                         <div class="menu-title">Dashbord</div>
                    </a>
               </li>
               <li>
                    <a href="produk">
                         <div class="parent-icon"><i class='bx bx-box'></i>
                         </div>
                         <div class="menu-title">Data Produk</div>
                    </a>
               </li>
               <li>
                    <a href="paket">
                         <div class="parent-icon"><i class='bx bx-movie'></i>
                         </div>
                         <div class="menu-title">Data Paket</div>
                    </a>
               </li>
               <li>
                    <a href="member">
                         <div class="parent-icon"><i class='bx bx-user-check'></i>
                         </div>
                         <div class="menu-title">Pendaftaran User</div>
                    </a>
               </li>
               <li>
                    <a href="reward">
                         <div class="parent-icon"><i class='bx bx-slider-alt'></i>
                         </div>
                         <div class="menu-title">Setting Reward</div>
                    </a>
               </li>
               <li>
                    <a href="reward/klaim_reward">
                         <div class="parent-icon"><i class='bx bx-cloud-download'></i>
                         </div>
                         <div class="menu-title">Klaim Reward</div>
                    </a>
               </li>
               <li>
                    <a href="app/statistik_pengunjung">
                         <div class="parent-icon"><i class='bx bx-line-chart-down'></i>
                         </div>
                         <div class="menu-title">Statistik Pengunjung</div>
                    </a>
               </li>
               <li>
                    <a href="point_bonus">
                         <div class="parent-icon"><i class='bx bx-wrench'></i>
                         </div>
                         <div class="menu-title">Setting Bonus Point</div>
                    </a>
               </li>
               <li>
                    <a href="kas_keluar">
                         <div class="parent-icon"><i class='bx bx-upvote'></i>
                         </div>
                         <div class="menu-title">Kas Keluar</div>
                    </a>
               </li>
          <?php endif ?>

          <?php if ($this->session->userdata('level') != 'admin' and $this->session->userdata('level') != 'superadmin' ): ?>
               <li>
                    <a href="app">
                         <div class="parent-icon"><i class='bx bx-home-circle'></i>
                         </div>
                         <div class="menu-title">Dashbord</div>
                    </a>
               </li>
               <li>
                    <a href="app/pendaftaran">
                         <div class="parent-icon"><i class='bx bx-user-check'></i>
                         </div>
                         <div class="menu-title">Pendaftaran</div>
                    </a>
               </li>
               <li>
                    <a href="app/klaim_reward">
                         <div class="parent-icon"><i class='bx bx-cloud-download'></i>
                         </div>
                         <div class="menu-title">Klaim Reward</div>
                    </a>
               </li>
               
               <li>
                    <a href="app/transfer_point">
                         <div class="parent-icon"><i class='bx bx-slider-alt'></i>
                         </div>
                         <div class="menu-title">Transfer Point</div>
                    </a>
               </li>

               <li>
                    <a class="has-arrow" href="javascript:;">
                         <div class="parent-icon"> <i class="bx bx-printer"></i>
                         </div>
                         <div class="menu-title">Report</div>
                    </a>
                    <ul>
                         <li> <a href="app/log_point"><i class="bx bx-right-arrow-alt"></i>History Point</a>
                         <!-- <li> <a href="app/dev"><i class="bx bx-right-arrow-alt"></i>History Pembelian</a> -->
                        
                    </ul>
               </li>
               
          <?php endif ?>
     </ul>
     <!--end navigation-->
</div>