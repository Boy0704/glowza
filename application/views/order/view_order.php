<?php 
$id_member = $this->session->userdata('id_user');
 ?>

<div class="card">
     <div class="card-body">
          <div class="row mb-4">
               <div class="col">
                    <?php if ($this->session->userdata('level') != 'admin' && $this->session->userdata('level') != 'superadmin'): ?>
                         <a href="order/add_order" onclick="javasciprt: return confirm('Yakin akan menambahkan order baru ?')" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah Order</a>
                    <?php endif ?>
                    
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
                              <th>No Transaksi</th>
                              <th>Nama</th>
                              <th>Konfirmasi</th>
                              <th>Point</th>
                              <th>Created at</th>
                              <th>Pilihan</th>
                         </tr>
                    <tbody><?php
                        $no = 1;
                         $this->db->order_by('id_order', 'desc');
                         if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'superadmin') {
                              $data = $this->db->get('order');
                         } else {
                              $this->db->where('id_member', $id_member);
                              $data = $this->db->get('order');
                         }
                        foreach ($data->result() as $row)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td><?php echo $row->no_transaksi ?></td>
                              <td><?php echo get_data('member','id_member',$row->id_member,'nama_lengkap') ?></td>
                              <td>
                                   <?php if ($row->konfirmasi =='y' ): ?>
                                        <span class="badge bg-success">sudah dikonfirmasi</span>
                                   <?php else: ?>
                                        <span class="badge bg-danger">belum dikonfirmasi</span>
                                   <?php endif ?>
                              </td>
                              <td><?php echo $row->point ?></td>
                              <td><?php echo $row->created_at ?></td>
                              <td>
                                   <a href="order/detail_order/<?php echo $row->id_order ?>" class="btn btn-outline-info px-1">Detail Order</a>
                                   <?php if ($this->session->userdata('level') != 'admin' && $this->session->userdata('level') != 'superadmin'): ?>
                                        <?php if ($row->konfirmasi == 't'): ?>
                                        <a href="order/delete/<?php echo $row->id_order ?>" class="btn btn-outline-danger px-1" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')">Hapus</a>
                                        <?php endif ?>
                                   <?php else: ?>
                                        <?php if ($row->konfirmasi == 't'): ?>
                                             <a onclick="konfirmasi('<?php echo $row->id_order ?>')" class="btn btn-outline-success px-1">Konfirmasi</a>
                                        <?php endif ?>
                                        
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
<script type="text/javascript">
     function konfirmasi(id_order) {
          if (confirm("Yakin akan konfirmasi order pembelian ini ?")) {
               let point = prompt("Masukkan Point untuk member:", "0");
               if (point == null || point == "0") {
                    alert("point tidak di berikan");
                    window.location = "<?php echo base_url() ?>order/konfirmasi?id_order="+id_order+"&point="+point;
               } else {
                    alert("point yang di berikan = "+point);
                    window.location = "<?php echo base_url() ?>order/konfirmasi?id_order="+id_order+"&point="+point;
               }
          } else {
               alert("Konfirmasi di batalkan");
          }
          
          
     }
</script>