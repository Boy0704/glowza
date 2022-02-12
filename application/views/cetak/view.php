<div class="card">
     <div class="card-body">
          <div class="row mb-4">
               <div class="col">
                    <form action="cetak/aksi_cetak/<?php echo $jenis ?>" method="get">
                         <div class="row mb-3">
                              <label class="col-sm-3
                                   col-form-label">Dari Tanggal</label>
                              <div class="col-sm-9">
                                   <input type="date" class="form-control" name="tgl1" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label class="col-sm-3
                                   col-form-label">Sampai Tanggal</label>
                              <div class="col-sm-9">
                                   <input type="date" class="form-control" name="tgl2" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-sm-3"></div>
                              <div class="col-sm-9">
                                   <button type="submit" class="btn btn-primary"><i class="bx bx-printer"></i></button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>