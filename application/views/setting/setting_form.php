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
                    <label for="brand" class="col-sm-3
                         col-form-label">Brand
                         <?php echo form_error('brand') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="brand"
                              id="brand" placeholder="Brand"
                              value="<?php echo $brand; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="foto" class="col-sm-3
                         col-form-label">Foto About</label>
                    <div class="col-sm-9">
                         <input type="file" class="form-control" name="foto" />
                              <input type="hidden" name="foto_old" value="<?php echo $foto ?>">
                              <div>
                                   <?php if ($foto != ''): ?>
                                        <b>*) Foto Sebelumnya : </b><br>
                                        <img src="image/<?php echo $foto ?>" style="width: 100px;">
                                   <?php endif ?>
                              </div>
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-3
                         col-form-label">Deskripsi About
                         <?php echo form_error('deskripsi') ?></label>
                    <div class="col-sm-9">
                         <textarea class="form-control" rows="3" name="deskripsi"
                              id="deskripsi" rows="3"
                              placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="alamat" class="col-sm-3
                         col-form-label">Alamat
                         <?php echo form_error('alamat') ?></label>
                    <div class="col-sm-9">
                         <textarea class="form-control" rows="3" name="alamat"
                              id="alamat" rows="3"
                              placeholder="Alamat"><?php echo $alamat; ?></textarea>
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="email" class="col-sm-3
                         col-form-label">Email
                         <?php echo form_error('email') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="email"
                              id="email" placeholder="Email"
                              value="<?php echo $email; ?>" />
                    </div>
               </div>
     <div class="row mb-3">
                    <label for="jam_kerja" class="col-sm-3
                         col-form-label">No Telp
                         <?php echo form_error('no_telp') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="no_telp"
                              id="no_telp" placeholder="No Telp"
                              value="<?php echo $no_telp; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="jam_kerja" class="col-sm-3
                         col-form-label">Jam Kerja
                         <?php echo form_error('jam_kerja') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="jam_kerja"
                              id="jam_kerja" placeholder="Jam Kerja"
                              value="<?php echo $jam_kerja; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="fb" class="col-sm-3
                         col-form-label">Fb
                         <?php echo form_error('fb') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="fb"
                              id="fb" placeholder="Fb"
                              value="<?php echo $fb; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="ig" class="col-sm-3
                         col-form-label">Ig
                         <?php echo form_error('ig') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="ig"
                              id="ig" placeholder="Ig"
                              value="<?php echo $ig; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="youtube" class="col-sm-3
                         col-form-label">Youtube
                         <?php echo form_error('youtube') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="youtube"
                              id="youtube" placeholder="Youtube"
                              value="<?php echo $youtube; ?>" />
                    </div>
               </div>
	 <input type="hidden" name="id_setting" value="<?php echo $id_setting; ?>" /> 
	 <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                    <?php echo $button ?></button> 
	 <a href="<?php echo site_url('setting') ?>" class="btn btn-outline-info"><i
                         class="bx bx-exit"></i> Cancel</a>
	
               </div>
               </div>
               </div>
               </form>

<script src="https://cdn.ckeditor.com/4.19.0/standard-all/ckeditor.js"></script>
<script>
     CKEDITOR.replace('deskripsi');
</script>
               