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
                              <th>Nama Member</th>
                              <th>Point Member Saat ini</th>
                              <th>Reward yang diklaim</th>
                              <th>Status</th>
                              <th>Action</th>
                         </tr>
                    <tbody><?php
                        $no = 1;
                        $data = $this->db->get('klaim_reward')->result();
                        foreach ($data as $row)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td><?php echo get_data('member','id_member',$row->id_member,'nama_lengkap') ?></td>
                              <td>1000</td>
                              <td><?php echo get_data('reward','id_reward',$row->id_reward,'deskripsi') ?></td>
                              <td>
                                   <?php 
                                   if ($row->status == 'menunggu') {
                                        echo '<span class="badge bg-info">MENUNGGU</span>';
                                   } else {
                                        echo '<span class="badge bg-success">APPROVED</span>';
                                   }
                                   
                                   ?>
                              </td>
                              <td style="text-align:center" width="200px">
                                   
                                   <?php if( $row->status == 'menunggu' ) : ?>
                                   <a href="reward/approved/y/<?php echo $row->id_klaim ?>" title="approved"
                                        onclick="javasciprt: return confirm('Yakin akan setujui klaim reward ini ?')"
                                        class="btn btn-sm btn-primary"><i class="bx bx-check-double me-0"></i> Setuju
                                   </a>

                                   <?php endif ?>

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