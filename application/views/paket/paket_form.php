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
                         <label for="nama_paket" class="col-sm-3
                         col-form-label">Nama Paket
                              <?php echo form_error('nama_paket') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama_paket" id="nama_paket"
                                   placeholder="Nama Paket" value="<?php echo $nama_paket; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="keterangan" class="col-sm-3
                         col-form-label">Keterangan
                              <?php echo form_error('keterangan') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="keterangan" id="keterangan" rows="3"
                                   placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                         </div>
                    </div>
                    <input type="hidden" name="id_paket" value="<?php echo $id_paket; ?>" />
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                         <?php echo $button ?></button>
                    <a href="<?php echo site_url('paket') ?>" class="btn btn-outline-info"><i class="bx bx-exit"></i>
                         Cancel</a>

               </div>
          </div>
     </div>
</form>

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace('keterangan');
</script>