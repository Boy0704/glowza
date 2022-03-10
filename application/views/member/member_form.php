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
                         <label class="col-sm-3 col-form-label">Foto Profil *</label>
                         <div class="col-sm-9">
                              <div>
                                   <?php if ($foto != ''): ?>
                                        <b>*) Foto Sebelumnya : </b><br>
                                        <img src="image/user/<?php echo $foto ?>" style="width: 100px;">
                                   <?php endif ?>
                              </div>
                              <input type="hidden" name="foto_old" value="<?php echo $foto ?>">
                              <input type="file" class="form-control" name="foto" required />
                              <p style="color:red;">*) ukuran foto harus 4x4</p>
                         </div>
                    </div>

                    <div class="row mb-3">
                         <label class="col-sm-3 col-form-label">Foto Identitas *</label>
                         <div class="col-sm-9">
                              <div>
                                   <?php if ($foto_identitas != ''): ?>
                                        <b>*) Foto Identitas Sebelumnya : </b><br>
                                        <img src="image/ktp/<?php echo $foto_identitas ?>" style="width: 100px;">
                                   <?php endif ?>
                              </div>
                              <input type="hidden" name="foto_identitas_old" value="<?php echo $foto_identitas ?>">
                              <input type="file" class="form-control" name="foto_identitas" required />
                         </div>
                    </div>

                    <div class="row mb-3">
                         <label for="kode_member" class="col-sm-3
                         col-form-label">Kode Member *
                              <?php echo form_error('kode_member') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="kode_member" id="kode_member"
                                   placeholder="Kode Member" value="<?php echo $kode_member; ?>" readonly/>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="nama_lengkap" class="col-sm-3
                         col-form-label">Nama Lengkap *
                              <?php echo form_error('nama_lengkap') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                   placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="email" class="col-sm-3
                         col-form-label">Email *
                              <?php echo form_error('email') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                   value="<?php echo $email; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="no_telp" class="col-sm-3
                         col-form-label">No Telp *
                              <?php echo form_error('no_telp') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp"
                                   value="<?php echo $no_telp; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="instagram" class="col-sm-3
                         col-form-label">Instagram
                              <?php echo form_error('instagram') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="instagram" id="instagram" rows="3"
                                   placeholder="Instagram"><?php echo $instagram; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="facebook" class="col-sm-3
                         col-form-label">Facebook
                              <?php echo form_error('facebook') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="facebook" id="facebook" rows="3"
                                   placeholder="Facebook"><?php echo $facebook; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="shopee" class="col-sm-3
                         col-form-label">Shopee
                              <?php echo form_error('shopee') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="shopee" id="shopee" rows="3"
                                   placeholder="Shopee"><?php echo $shopee; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="tokopedia" class="col-sm-3
                         col-form-label">Tokopedia
                              <?php echo form_error('tokopedia') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="tokopedia" id="tokopedia" rows="3"
                                   placeholder="Tokopedia"><?php echo $tokopedia; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="bukalapak" class="col-sm-3
                         col-form-label">Bukalapak
                              <?php echo form_error('bukalapak') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="bukalapak" id="bukalapak" rows="3"
                                   placeholder="Bukalapak"><?php echo $bukalapak; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="lazada" class="col-sm-3
                         col-form-label">Lazada
                              <?php echo form_error('lazada') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="lazada" id="lazada" rows="3"
                                   placeholder="Lazada"><?php echo $lazada; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="jenis_identitas" class="col-sm-3
                         col-form-label">Jenis Identitas *
                              <?php echo form_error('jenis_identitas') ?></label>
                         <div class="col-sm-9">
                         <select name="jenis_identitas" id="jenis_identitas" class="single-select">
                                   <option value="<?php echo $jenis_identitas ?>"><?php echo $jenis_identitas ?></option>
                                   <option value="KTP">KTP</option>
                                   <option value="SIM">SIM</option>
                                   <option value="PASSPORT">PASSPORT</option>
                              </select>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="no_identitas" class="col-sm-3
                         col-form-label">No Identitas *
                              <?php echo form_error('no_identitas') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="no_identitas" id="no_identitas"
                                   placeholder="No Identitas" value="<?php echo $no_identitas; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="nama_bank" class="col-sm-3
                         col-form-label">Nama Bank *
                              <?php echo form_error('nama_bank') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama_bank" id="nama_bank"
                                   placeholder="Nama Bank" value="<?php echo $nama_bank; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="no_rekening" class="col-sm-3
                         col-form-label">No Rekening *
                              <?php echo form_error('no_rekening') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="no_rekening" id="no_rekening"
                                   placeholder="No Rekening" value="<?php echo $no_rekening; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="atas_nama" class="col-sm-3
                         col-form-label">Atas Nama *
                              <?php echo form_error('atas_nama') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="atas_nama" id="atas_nama"
                                   placeholder="Atas Nama" value="<?php echo $atas_nama; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="alamat" class="col-sm-3
                         col-form-label">Alamat *
                              <?php echo form_error('alamat') ?></label>
                         <div class="col-sm-9">
                              <textarea class="form-control" rows="3" name="alamat" id="alamat" rows="3"
                                   placeholder="Alamat"><?php echo $alamat; ?></textarea>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="id_kabupaten" class="col-sm-3
                         col-form-label">Provinsi *</label>
                         <div class="col-sm-9">
                              <select id="provinsi" class="single-select" onchange="getKabupaten()" required>
                                   <option value="">Pilih Provinsi</option>
                                   <?php foreach ($this->db->get('provinces')->result() as $rw) : ?>
                                   <option value="<?php echo $rw->id ?>"><?php echo $rw->name ?></option>
                                   <?php endforeach ?>
                              </select>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="id_kabupaten" class="col-sm-3
                         col-form-label">Kabupaten *
                              <?php echo form_error('id_kabupaten') ?></label>
                         <div class="col-sm-9">
                              <select id="kabupaten" name="id_kabupaten" class="single-select" required>
                                   <option value="">Pilih Kabupaten</option>
                              </select>
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="username" class="col-sm-3
                         col-form-label">Username *
                              <?php echo form_error('username') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="username" id="username"
                                   placeholder="Username" value="<?php echo $username; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="password" class="col-sm-3
                         col-form-label">Password *
                              <?php echo form_error('password') ?></label>
                         <div class="col-sm-9">
                              <input type="text" class="form-control" name="password" id="password"
                                   placeholder="Password" value="<?php echo $password; ?>" />
                         </div>
                    </div>
                    <div class="row mb-3">
                         <label for="level" class="col-sm-3
                         col-form-label">Level *</label>
                         <div class="col-sm-9">
                              <select name="level" id="level" class="single-select">
                                   <option value="<?php echo $level ?>"><?php echo $level ?></option>
                                   <option value="Reseller A">Reseller A</option>
                                   <option value="Reseller B">Reseller B</option>
                                   <option value="Member">Member</option>
                                   <option value="Agen">Agen</option>
                                   <option value="Distributor">Distributor</option>
                              </select>
                         </div>
                    </div>
                    <input type="hidden" name="id_member" value="<?php echo $id_member; ?>" />
                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>
                         <?php echo $button ?></button>
                    <a href="<?php echo site_url('member') ?>" class="btn btn-outline-info"><i class="bx bx-exit"></i>
                         Cancel</a>

               </div>
          </div>
     </div>
</form>

<script>
     function getKabupaten() {
          var id_prov = $("#provinsi").val();
          $.ajax({
               type: "POST",
               url: "member/get_kabupaten",
               data: {id: id_prov},
               dataType: "html",
               success: function (response) {
                    $("#kabupaten").html(response);
               }
          });
     }
</script>