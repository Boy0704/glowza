<header>
     <div class="topbar d-flex align-items-center">
          <nav class="navbar navbar-expand">
               <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
               </div>
               <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                         <?php 
                         $level = $this->session->userdata('level');
                         $id_user = $this->session->userdata('id_user');
                         if ($level == 'admin' OR $level == 'superadmin' ) {
                              $sql = "SELECT * FROM notifikasi WHERE level_to='admin' and dibaca='t'";
                         } else {
                              $sql = "SELECT * FROM notifikasi WHERE level_to='user' and user_to='$id_user' and dibaca='t' ";
                         }
                         $total_notifikasi = $this->db->query($sql)->num_rows();

                          ?>
                         <li class="nav-item dropdown dropdown-large">
                              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                        class="alert-count"><?php echo $total_notifikasi ?></span>
                                   <i class='bx bx-bell'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end">
                                   <a href="javascript:;">
                                        <div class="msg-header">
                                             <p class="msg-header-title">Notifications</p>
                                             <p class="msg-header-clear ms-auto"></p>
                                        </div>
                                   </a>
                                   <div class="header-notifications-list">

                                   <?php 
                                   foreach ($this->db->query($sql)->result() as $rw): ?>
                                        
                                        <a class="dropdown-item" href="app/baca_notifikasi/<?php echo $rw->id_notifikasi ?>?link=<?php echo $rw->link ?>">
                                             <div class="d-flex align-items-center">
                                                  <div class="notify bg-light-primary text-primary">
                                                       <i class="bx bx-message-square-detail"></i>
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name"><?php echo $rw->judul ?><span
                                                                 class="msg-time float-end"><?php echo $rw->created_at ?></span></h6>
                                                       <p class="msg-info"><?php echo $rw->keterangan ?></p>
                                                  </div>
                                             </div>
                                        </a>

                                   <?php endforeach ?>
                                        
                                        
                                   </div>
                                   <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                   </a>
                              </div>
                         </li>
                         <li class="nav-item dropdown dropdown-large" style="display: none;">
                              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                        class="alert-count">8</span>
                                   <i class='bx bx-comment'></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end">
                                   <a href="javascript:;">
                                        <div class="msg-header">
                                             <p class="msg-header-title">Messages</p>
                                             <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                   </a>
                                   <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Daisy Anderson <span
                                                                 class="msg-time float-end">5 sec
                                                                 ago</span></h6>
                                                       <p class="msg-info">The standard chunk of lorem</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-2.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Althea Cabardo <span
                                                                 class="msg-time float-end">14
                                                                 sec ago</span></h6>
                                                       <p class="msg-info">Many desktop publishing packages</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-3.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Oscar Garner <span
                                                                 class="msg-time float-end">8 min
                                                                 ago</span></h6>
                                                       <p class="msg-info">Various versions have evolved over</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-4.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Katherine Pechon <span
                                                                 class="msg-time float-end">15
                                                                 min ago</span></h6>
                                                       <p class="msg-info">Making this the first true generator</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-5.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Amelia Doe <span
                                                                 class="msg-time float-end">22 min
                                                                 ago</span></h6>
                                                       <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-6.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Cristina Jhons <span
                                                                 class="msg-time float-end">2 hrs
                                                                 ago</span></h6>
                                                       <p class="msg-info">The passage is attributed to an unknown</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-7.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">James Caviness <span
                                                                 class="msg-time float-end">4 hrs
                                                                 ago</span></h6>
                                                       <p class="msg-info">The point of using Lorem</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-8.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Peter Costanzo <span
                                                                 class="msg-time float-end">6 hrs
                                                                 ago</span></h6>
                                                       <p class="msg-info">It was popularised in the 1960s</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-9.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">David Buckley <span
                                                                 class="msg-time float-end">2 hrs
                                                                 ago</span></h6>
                                                       <p class="msg-info">Various versions have evolved over</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-10.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Thomas Wheeler <span
                                                                 class="msg-time float-end">2 days
                                                                 ago</span></h6>
                                                       <p class="msg-info">If you are going to use a passage</p>
                                                  </div>
                                             </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                             <div class="d-flex align-items-center">
                                                  <div class="user-online">
                                                       <img src="assets/images/avatars/avatar-11.png" class="msg-avatar"
                                                            alt="user avatar">
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h6 class="msg-name">Johnny Seitz <span
                                                                 class="msg-time float-end">5 days
                                                                 ago</span></h6>
                                                       <p class="msg-info">All the Lorem Ipsum generators</p>
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                                   <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Messages</div>
                                   </a>
                              </div>
                         </li>
                    </ul>
               </div>
               <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                         role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <?php 
                         $img = $this->session->userdata('foto');
                         if ($img == '' or $img == '<p>You did not select a file to upload.</p>') {
                              $img = 'default.png';
                         }
                          ?>
                         <img src="image/user/<?php echo $img; ?>" class="user-img" alt="user avatar">
                         <div class="user-info ps-3">
                              <p class="user-name mb-0"><?php echo $this->session->userdata('nama'); ?></p>
                              <p class="designattion mb-0"><?php echo $this->session->userdata('level'); ?></p>
                         </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                         <?php if ( $this->session->userdata('level') == 'superadmin' or $this->session->userdata('level') == 'admin'): ?>
                              <li><a class="dropdown-item" href="app/profil_admin/<?php echo $this->session->userdata('id_user'); ?>"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                         <?php else: ?>
                              <li><a class="dropdown-item" href="app/profil"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                         <?php endif ?>
                         
                         </li>
                         
                         <li>
                              <div class="dropdown-divider mb-0"></div>
                         </li>
                         <li><a class="dropdown-item" href="login/logout"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                         </li>
                    </ul>
               </div>
          </nav>
     </div>
</header>