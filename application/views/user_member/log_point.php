<?php 
$id_member = $this->session->userdata('id_user');
 ?>

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