<?php 
$id_member = $this->session->userdata('id_user');
$point_saya = point_saya($id_member);
 ?>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-danger">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Point saat ini</p>
                              <h4 class="my-1 text-danger"><?php echo $point_saya ?></h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                              <i class="bx bxs-wallet"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-info">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Total Pembelian</p>
                              <h4 class="my-1 text-info">
                                   <?php 
                                   $this->db->where('upline', $id_member);
                                   echo $this->db->get('member')->num_rows();
                                    ?>
                              </h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                              <i class="bx bxs-cart"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-warning">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Total Pendaftaran</p>
                              <h4 class="my-1 text-warning">0</h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                              <i class="bx bxs-group"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!--end row-->
<div class="row">
     <div class="col-12 col-lg-12">
                      <div class="card radius-10">
                                <div class="card-body">
                                   <div class="d-flex align-items-center">
                                        <div>
                                             <h6 class="mb-0">Kartu Anggota</h6>
                                        </div>
                                        <div class="dropdown ms-auto">
                                             <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                             </a>
                                             <ul class="dropdown-menu" style="">
                                                  <li><a class="dropdown-item" target="_blank" href="app/card/y">Download PDF</a>
                                                  </li>
                                                  <li><a class="dropdown-item" target="_blank" href="app/card_png/y">Download PNG</a>
                                                  </li>
                                             </ul>
                                        </div>
                                   </div>
                                   
                                </div>
                                <div class="row row-cols-1 g-0 row-group text-center border-top">
                                   <div class="col" style="background-color: #D3D3D3;">
                                     <div class="p-3">
                                        <iframe width="100%" height="450px" src="<?php echo base_url() ?>app/card"></iframe>
                                     </div>
                                   </div>
                                   
                                </div>
                           </div>
                       </div>
</div>
<div class="row">
     <div class="col-12 col-lg-12">
          <input type="text" value="<?php echo base_url() ?>app/referal/<?php echo get_data('member','id_member',$id_member,'kode_member') ?>" id="myInput" class="form-control">
     </div>
     <script>
      var clipboard = new ClipboardJS('.btn');

      clipboard.on('success', function (e) {
        console.log(e);
      });

      clipboard.on('error', function (e) {
        console.log(e);
      });
    </script>
</div>