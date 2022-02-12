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
                    <label for="keterangan" class="col-sm-3
                         col-form-label">Keterangan
                         <?php echo form_error('keterangan') ?></label>
                    <div class="col-sm-9">
                         <textarea class="form-control" rows="3" name="keterangan"
                              id="keterangan" rows="3"
                              placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="jumlah" class="col-sm-3
                         col-form-label">Jumlah
                         <?php echo form_error('jumlah') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="jumlah"
                              id="jumlah" placeholder="Jumlah"
                              value="<?php echo $jumlah; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="tanggal" class="col-sm-3
                         col-form-label">Tanggal
                         <?php echo form_error('tanggal') ?></label>
                    <div class="col-sm-9">
                         <input type="date" class="form-control" name="tanggal"
                              id="tanggal" placeholder="Tanggal"
                              value="<?php echo $tanggal; ?>" />
                    </div>
               </div>
	 <input type="hidden" name="id_kas_keluar" value="<?php echo $id_kas_keluar; ?>" /> 
	 <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                    <?php echo $button ?></button> 
	 <a href="<?php echo site_url('kas_keluar') ?>" class="btn btn-outline-info"><i
                         class="bx bx-exit"></i> Cancel</a>
	
               </div>
               </div>
               </div>
               </form>
               