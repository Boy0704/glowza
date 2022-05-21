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
                    <label for="email" class="col-sm-3
                         col-form-label">Email
                         <?php echo form_error('email') ?></label>
                    <div class="col-sm-9">
                         <textarea class="form-control" rows="3" name="email"
                              id="email" rows="3"
                              placeholder="Email"><?php echo $email; ?></textarea>
                    </div>
               </div>
	 <div class="row mb-3">
                    <label for="created_at" class="col-sm-3
                         col-form-label">Created At
                         <?php echo form_error('created_at') ?></label>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="created_at"
                              id="created_at" placeholder="Created At"
                              value="<?php echo $created_at; ?>" />
                    </div>
               </div>
	 <input type="hidden" name="id_subscribe" value="<?php echo $id_subscribe; ?>" /> 
	 <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                    <?php echo $button ?></button> 
	 <a href="<?php echo site_url('subscribe') ?>" class="btn btn-outline-info"><i
                         class="bx bx-exit"></i> Cancel</a>
	
               </div>
               </div>
               </div>
               </form>
               