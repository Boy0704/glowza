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
                    <label for="kode_point" class="col-sm-3
                         col-form-label">Kode Point
                         <?php echo form_error('kode_point') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" onkeyup="inputKode()" name="kode_point"
                              id="kode_point" placeholder="Kode Point"
                              value="<?php echo $kode_point; ?>" />
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="point" class="col-sm-3
                         col-form-label">Point
                         <?php echo form_error('point') ?></label>
                    <div class="col-sm-9">
                         <input type="number" class="form-control" name="point"
                              id="point" placeholder="Point"
                              value="<?php echo $point; ?>" />
                    </div>
               </div>
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
	 <input type="hidden" name="id_set_point" value="<?php echo $id_set_point; ?>" /> 
	 <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                    <?php echo $button ?></button> 
	 <a href="<?php echo site_url('point_bonus') ?>" class="btn btn-outline-info"><i
                         class="bx bx-exit"></i> Cancel</a>
	
               </div>
               </div>
               </div>
               </form>
<script type="text/javascript">
     function inputKode() {
          var test= $('input[name="kode_point"]').val();
          test = test.toUpperCase().replace(/ /g, '');
          $('input[name="kode_point"]').val(test);
     }
</script>