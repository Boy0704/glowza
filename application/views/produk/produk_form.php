<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
     <div class="card border-top border-0 border-4 border-info">
          <div class="card-body">
               <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                         <div><i class="bx bx-edit-alt me-1 font-22 text-info"></i>
                         </div>
                         <h5 class="mb-0 text-info"><?php echo $judul_form ?></h5>
                    </div>
                    <hr />

                    <div class="row mb-3">
                         <label for="kode_produk" class="col-sm-3
                         col-form-label">Foto Produk</label>
                         <div class="col-sm-9">
                              <input type="file" class="form-control" name="foto" required />
                              <input type="hidden" name="foto_old" value="<?php echo $foto ?>">
                              <div>
                                   <?php if ($foto != ''): ?>
                                        <b>*) Foto Sebelumnya : </b><br>
                                        <img src="image/produk/<?php echo $foto ?>" style="width: 100px;">
                                   <?php endif ?>
                              </div>
                         </div>
                    </div>

                    <div class="row mb-3">
                         <label for="kode_produk" class="col-sm-3
                         col-form-label">Kode Produk
                              <?php echo form_error('kode_produk') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="kode_produk" id="kode_produk"
                                   placeholder="Kode Produk" value="<?php echo $kode_produk; ?>" />
                         </div>
                    </div>

                    <div class="row mb-3">
                         <label for="nama_produk" class="col-sm-3
                         col-form-label">Nama Produk
                              <?php echo form_error('nama_produk') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                                   placeholder="Nama Produk" value="<?php echo $nama_produk; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="deskripsi" class="col-sm-3
                         col-form-label">Deskripsi
                              <?php echo form_error('deskripsi') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" rows="3"
                                   placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="harga_beli" class="col-sm-3
                         col-form-label">Harga Beli
                              <?php echo form_error('harga_beli') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="harga_beli" id="harga_beli"
                                   placeholder="Harga Beli" value="<?php echo $harga_beli; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="harga_jual" class="col-sm-3
                         col-form-label">Harga Jual
                              <?php echo form_error('harga_jual') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="harga_jual" id="harga_jual"
                                   placeholder="Harga Jual" value="<?php echo $harga_jual; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="qty" class="col-sm-3
                         col-form-label">Qty
                              <?php echo form_error('qty') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty"
                                   value="<?php echo $qty; ?>" />
                         </div>
                    </div>
                    <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>" />
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                         <?php echo $button ?></button>
                    <a href="<?php echo site_url('produk') ?>" class="btn btn-outline-info"><i class="bx bx-exit"></i>
                         Cancel</a>

               </div>
          </div>
     </div>
</form>