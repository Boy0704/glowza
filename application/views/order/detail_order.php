<?php 
$id_member = $this->session->userdata('id_user');
$id_order = $this->uri->segment(3);
 ?>

<div class="card">
     <div class="card-body">
          <div class="row mb-4">
               <div class="col">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
                    <a href="order" class="btn btn-danger"><i class="bx bx-chevron-left-circle mr-1"></i>Kembali</a>
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
                              <th>Nama Produk</th>
                              <th>Harga</th>
                              <th>Qty</th>
                              <th>Subtotal</th>
                              <th>Pilihan</th>
                         </tr>
                    <tbody><?php
                        $no = 1;
                        $total = 0;
                        $this->db->where('id_order', $id_order);
                        $data = $this->db->get('order_detail');
                        foreach ($data->result() as $row)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td><?php echo get_data('produk','id_produk',$row->id_produk,'nama_produk') ?></td>
                              <td><?php echo number_format($row->harga) ?></td>
                              <td><?php echo $row->qty ?></td>
                              <td>
                                   <?php 
                                   echo number_format($row->subtotal);
                                   $total = $total + $row->subtotal; 
                                   ?>
                                   
                              </td>
                              <td>
                                   <a href="order/delete_detail_order/<?php echo $row->id_order.'/'.$row->id_detail_order ?>" class="btn btn-outline-danger px-1" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')">Hapus</a>
                              </td>
                              
                         </tr>
                         <?php
                            $no++;
                        }
                        ?>
                        <tr>
                             <td colspan="4">Total Harga</td>
                             <td><b><?php echo number_format($total) ?></b></td>
                             <td></td>
                        </tr>
                    </tbody>
               </table>
          </div>
     </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <form action="order/simpan_detail_order/<?php echo $id_order ?>">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <div class="row mb-3">
                         <label for="produk" class="col-sm-3
                         col-form-label">Produk *</label>
                         <div class="col-sm-9">
                              <select id="produk" class="form-control" name="produk" required>
                                   <option value="">Pilih Produk</option>
                                   <?php foreach ($this->db->get('produk')->result() as $rw) : ?>
                                   <option value="<?php echo $rw->id_produk ?>"><?php echo $rw->nama_produk ?></option>
                                   <?php endforeach ?>
                              </select>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="qty" class="col-sm-3
                         col-form-label">Qty *</label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="qty" id="qty" />
                         </div>
                    </div>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
               </form>
          </div>
     </div>
</div>