<div class="card">
     <div class="card-body">
          <div class="row mb-4">
               <div class="col">
                    <?php if ($this->session->userdata('level') == 'superadmin'): ?>
                         <a href="produk/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
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
                              <th>Foto</th>
                              <th>Kode Produk</th>
                              <th>Nama Produk</th>
                              <th>Deskripsi</th>
                              <?php if ($this->session->userdata('level') == 'superadmin'): ?>
                                   <th>Harga Beli</th>
                              <?php endif ?>
                              
                              <th>Harga Jual</th>
                              <th>Qty</th>
                              <?php if ($this->session->userdata('level') == 'superadmin'): ?>
                                   <th>Action</th>
                              <?php endif ?>
                         </tr>
                         </thead>
                    <tbody><?php
                        $no = 1;
                        foreach ($produk_data as $produk)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td>
                                   <img src="image/produk/<?php echo $produk->foto ?>"
                                        alt="<?php echo $produk->foto ?>" style="width:100px">
                              </td>
                              <td><?php echo $produk->kode_produk ?></td>
                              <td><?php echo $produk->nama_produk ?></td>
                              <td><?php echo $produk->deskripsi ?></td>
                              <?php if ($this->session->userdata('level') == 'superadmin'): ?>
                                   <td><?php echo $produk->harga_beli ?></td>
                              <?php endif ?>
                              <td><?php echo $produk->harga_jual ?></td>
                              <td><?php echo $produk->qty ?></td>
                              <?php if ($this->session->userdata('level') == 'superadmin'): ?>
                                   <td style="text-align:center" width="200px">

                                        <a href="produk/update/<?php echo $produk->id_produk ?>" title="Update Data"
                                             class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                                        </a>
                                        <a href="produk/delete/<?php echo $produk->id_produk ?>" title="Hapus Data"
                                             onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')"
                                             class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
                                        </a>

                                   </td>
                              <?php endif ?>
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