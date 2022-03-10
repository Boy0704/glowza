
<?php 
$id_member = $this->uri->segment(3);
$point_saya = point_saya($id_member);
 ?>

<div class="card">
     <div class="card-body">
          <ul class="nav nav-tabs nav-success" role="tablist">
               <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#successprofile" role="tab" aria-selected="false">
                         <div class="d-flex align-items-center">
                              <div class="tab-icon"><i class="bx bx-import font-18 me-1"></i>
                              </div>
                              <div class="tab-title">History Poin IN/OUT</div>
                         </div>
                    </a>
               </li>
               <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#successhome" role="tab" aria-selected="true">
                         <div class="d-flex align-items-center">
                              <div class="tab-icon"><i class="bx bx-cart-alt font-18 me-1"></i>
                              </div>
                              <div class="tab-title">History Pembelian</div>
                         </div>
                    </a>
               </li>
               <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#successcontact" role="tab" aria-selected="false">
                         <div class="d-flex align-items-center">
                              <div class="tab-icon"><i class="bx bx-folder-open font-18 me-1"></i>
                              </div>
                              <div class="tab-title">History Claim Reward</div>
                         </div>
                    </a>
               </li>
          </ul>
          <div class="tab-content py-3">
               
               <div class="tab-pane fade active show" id="successprofile" role="tabpanel">
                    

                    <div class="card">
                         <div class="card-body">
                              <div class="row mb-4">
                                   <div class="col">
                                        
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col">
                                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        
                                   </div>
                              </div>
                              <div class="table-responsive">
                                   <table id="exampleDataTable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                             <tr>
                                                  <th>No</th>
                                                  <th>Point IN</th>
                                                  <th>Point OUT</th>
                                                  <th>Created at</th>
                                                  <th>Ket</th>
                                             </tr>
                                        <tbody><?php
                                            $no = 1;
                                            $this->db->order_by('id_log_point', 'desc');
                                            $this->db->where('id_member', $id_member);
                                            $data = $this->db->get('log_point')->result();
                                            foreach ($data as $row)
                                            {
                                                ?>
                                             <tr>
                                                  <td width="80px"><?php echo $no ?></td>
                                                  <td><?php echo $row->point_in ?> Point</td>
                                                  <td><?php echo $row->point_out ?> Point</td>
                                                  <td><?php echo $row->created_at ?></td>
                                                  <td><?php echo $row->ket ?></td>
                                                  
                                             </tr>
                                             <?php
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="tab-pane fade" id="successhome" role="tabpanel">
                    <p>Tahap pengembangan.</p>
               </div>
               <div class="tab-pane fade" id="successcontact" role="tabpanel">
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
</div>
<div class="card">
     <div class="card-body">
          <div class="row mb-4">
               <div class="col">
                    
               </div>
          </div>
          <div class="row mb-3">
               <div class="col">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    
               </div>
          </div>
          <div class="table-responsive">
               <table id="exampleDataTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Reward</th>
                              <th>Syarat Point</th>
                              <th>Status</th>
                              <th>Option</th>
                         </tr>
                    <tbody><?php
                        $no = 1;
                        $this->db->order_by('id_reward', 'desc');
                        $data = $this->db->get('reward')->result();
                        foreach ($data as $row)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td>
                                   <b><?php echo $row->judul ?></b><br>
                                   <hr>
                                   <?php echo $row->deskripsi ?>

                              </td>
                              <td><?php echo $row->poin_target ?> Point</td>
                              <td>
                                   <?php 
                                   if ($point_saya < $row->poin_target) {
                                        echo '<span class="badge bg-danger">Point belum cukup</span>';
                                   } else {
                                        $this->db->where('id_member', $id_member);
                                        $this->db->where('id_reward', $row->id_reward);
                                        $cek = $this->db->get('klaim_reward');
                                        if ($cek->num_rows() > 0) {
                                             $klaim = $cek->row();
                                             echo '<span class="badge bg-info">'.$klaim->status.'</span>'; 
                                        } else {
                                             echo '<span class="badge bg-info">Point Cukup, silahkan ambil</span>';
                                        }
                                   }

                                    ?>
                              </td>
                              <td>
                                   <?php
                                   $this->db->where('id_member', $id_member);
                                   $this->db->where('id_reward', $row->id_reward);
                                   $cek = $this->db->get('klaim_reward');
                                   if ($cek->num_rows() == 0) {
                                        if ($point_saya >= $row->poin_target){ ?>
                                             <a href="app/ajukan_klaim/<?php echo $id_member ?>/<?php echo $row->id_reward ?>" class="btn btn-outline-info px-1">Pilih</a>


                                   <?php 
                              } 

                              } ?>
                              </td>
                              
                         </tr>
                         <?php
                            $no++;
                        }
                        ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>
               </div>
          </div>
     </div>
</div>