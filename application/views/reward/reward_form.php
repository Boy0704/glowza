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
                         <label for="judul" class="col-sm-3
                         col-form-label">Judul
                              <?php echo form_error('judul') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul"
                                   value="<?php echo $judul; ?>" />
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
                         <label for="poin_target" class="col-sm-3
                         col-form-label">Poin Target
                              <?php echo form_error('poin_target') ?></label>
                         <div class="col-sm-9">
                              <input type="number" class="form-control" name="poin_target" id="poin_target"
                                   placeholder="Poin Target" value="<?php echo $poin_target; ?>" />
                         </div>
                    </div>
                    <input type="hidden" name="id_reward" value="<?php echo $id_reward; ?>" />
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                         <?php echo $button ?></button>
                    <a href="<?php echo site_url('reward') ?>" class="btn btn-outline-info"><i class="bx bx-exit"></i>
                         Cancel</a>

               </div>
          </div>
     </div>
</form>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace('deskripsi');
</script>