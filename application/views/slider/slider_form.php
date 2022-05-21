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
                    <label for="foto" class="col-sm-3
                         col-form-label">Foto
                         <?php echo form_error('foto') ?></label>
                    <div class="col-sm-9">
                         <input type="file" class="form-control" name="foto" />
                         <input type="hidden" name="foto_old" value="<?php echo $foto ?>">
                              <div>
                                   <?php if ($foto != ''): ?>
                                        <b>*) Foto Sebelumnya : </b><br>
                                        <img src="front/assets/css/img/slider/<?php echo $foto ?>" style="width: 100px;">
                                   <?php endif ?>
                              </div>
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="link" class="col-sm-3
                         col-form-label">Link
                         <?php echo form_error('link') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="link"
                              id="link" placeholder="Link"
                              value="<?php echo $link; ?>" />
                    </div>
               </div>
	 <input type="hidden" name="id_slider" value="<?php echo $id_slider; ?>" /> 
	 <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                    <?php echo $button ?></button> 
	 <a href="<?php echo site_url('slider') ?>" class="btn btn-outline-info"><i
                         class="bx bx-exit"></i> Cancel</a>
	
               </div>
               </div>
               </div>
               </form>
               