<?php 
$id_member = $this->session->userdata('id_user');
$point_saya = point_saya($id_member);
 ?>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
     <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-danger">
               <div class="card-body">
                    <div class="d-flex align-items-center">
                         <div>
                              <p class="mb-0 text-secondary">Point saat ini</p>
                              <h4 class="my-1 text-danger"><?php echo $point_saya ?></h4>
                              <p class="mb-0 font-13"></p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                              <i class="bx bxs-wallet"></i>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<form action="" method="post" enctype="multipart/form-data">
     <div class="card border-top border-0 border-4 border-info">
          <div class="card-body">
               <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                         <div><i class="bx bx-edit-alt me-1 font-22 text-info"></i>
                         </div>
                         <h5 class="mb-0 text-info">Transfer Point</h5>
                    </div>
                    <hr />

                    <div class="row mb-3">
                         <label class="col-sm-3 col-form-label">Kode Member *</label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="kode_member" id="Kode Member" placeholder="Kode Member" value="" />
                         </div>
                    </div>

                    <div class="row mb-3">
                         <label class="col-sm-3 col-form-label">Jumlah Point akan di transfer *</label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="qty" id="qty" placeholder="Jumlah Point akan di transfer" value="" />
                         </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>Kirim</button>
                    

               </div>
          </div>
     </div>
</form>