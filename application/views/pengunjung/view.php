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
                              <th>IP Address</th>
                              <th>Browser</th>
                              <th>Waktu Berkunjung</th>
                         </tr>
                    <tbody><?php
                        $no = 1;
                        $this->db->order_by('id_pengunjung', 'desc');
                        $data = $this->db->get('pengunjung')->result();
                        foreach ($data as $row)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td><?php echo $row->ip_address ?></td>
                              <td><?php echo $row->browser ?></td>
                              <td><?php echo $row->tanggal_kunjung ?></td>
                              
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