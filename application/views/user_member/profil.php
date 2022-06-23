<?php 
$id_member = $this->session->userdata('id_user');
$this->db->where('id_member', $id_member);
$member = $this->db->get('member')->row();

 ?>
<div class="card">
     <div class="card-body">
          <ul class="nav nav-tabs nav-success" role="tablist">
               <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#successhome" role="tab" aria-selected="true">
                         <div class="d-flex align-items-center">
                              <div class="tab-icon"><i class="bx bx-image font-18 me-1"></i>
                              </div>
                              <div class="tab-title">Update Foto</div>
                         </div>
                    </a>
               </li>
               <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#successprofile" role="tab" aria-selected="false">
                         <div class="d-flex align-items-center">
                              <div class="tab-icon"><i class="bx bx-import font-18 me-1"></i>
                              </div>
                              <div class="tab-title">Profil</div>
                         </div>
                    </a>
               </li>
               
          </ul>
          <div class="tab-content py-3">
               <div class="tab-pane fade active show" id="successhome" role="tabpanel">
                    <form action="app/update_foto/<?php echo $id_member ?>" method="POST" enctype="multipart/form-data">
                         <div class="row mb-3">
                              <label class="col-sm-3 col-form-label">Foto Profil *</label>
                              <div class="col-sm-9">
                                   <div>
                                        <?php if ($member->foto != ''): ?>
                                             <b>*) Foto Sebelumnya : </b><br>
                                             <img src="image/user/<?php echo $member->foto ?>" style="width: 100px;">
                                        <?php endif ?>
                                   </div>
                                   <input type="file" class="form-control" name="foto" required />
                                   <p style="color:red;">*) ukuran foto harus 4x4</p>
                              </div>
                         </div>

                         <div class="row mb-3">
                              <label class="col-sm-3 col-form-label">Foto Identitas *</label>
                              <div class="col-sm-9">
                                   <div>
                                        <?php if ($member->foto_identitas != ''): ?>
                                             <b>*) Foto Identitas Sebelumnya : </b><br>
                                             <img src="image/ktp/<?php echo $member->foto_identitas ?>" style="width: 100px;">
                                        <?php endif ?>
                                   </div>
                                   <input type="file" class="form-control" name="foto_identitas" required />
                              </div>
                         </div>
                         <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i>Update</button>
                    </form>
               </div>
               <div class="tab-pane fade" id="successprofile" role="tabpanel">
                    <form action="app/update_profil/<?php echo $id_member ?>" method="POST">
                         <div class="row mb-3">
                              <label for="kode_member" class="col-sm-3
                              col-form-label">Kode Member *
                                   <?php echo form_error('kode_member') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="kode_member" id="kode_member"
                                        placeholder="Kode Member" value="<?php echo $member->kode_member; ?>" readonly/>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="nama_lengkap" class="col-sm-3
                              col-form-label">Nama Lengkap *
                                   <?php echo form_error('nama_lengkap') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                        placeholder="Nama Lengkap" value="<?php echo $member->nama_lengkap; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="email" class="col-sm-3
                              col-form-label">Email *
                                   <?php echo form_error('email') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                                        value="<?php echo $member->email; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="no_telp" class="col-sm-3
                              col-form-label">No Telp *
                                   <?php echo form_error('no_telp') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp"
                                        value="<?php echo $member->no_telp; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="instagram" class="col-sm-3
                              col-form-label">Instagram
                                   <?php echo form_error('instagram') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="instagram" id="instagram" rows="3"
                                        placeholder="Instagram"><?php echo $member->instagram; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="facebook" class="col-sm-3
                              col-form-label">Facebook
                                   <?php echo form_error('facebook') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="facebook" id="facebook" rows="3"
                                        placeholder="Facebook"><?php echo $member->facebook; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="shopee" class="col-sm-3
                              col-form-label">Shopee
                                   <?php echo form_error('shopee') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="shopee" id="shopee" rows="3"
                                        placeholder="Shopee"><?php echo $member->shopee; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="tokopedia" class="col-sm-3
                              col-form-label">Tokopedia
                                   <?php echo form_error('tokopedia') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="tokopedia" id="tokopedia" rows="3"
                                        placeholder="Tokopedia"><?php echo $member->tokopedia; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="bukalapak" class="col-sm-3
                              col-form-label">Bukalapak
                                   <?php echo form_error('bukalapak') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="bukalapak" id="bukalapak" rows="3"
                                        placeholder="Bukalapak"><?php echo $member->bukalapak; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="lazada" class="col-sm-3
                              col-form-label">Lazada
                                   <?php echo form_error('lazada') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="lazada" id="lazada" rows="3"
                                        placeholder="Lazada"><?php echo $member->lazada; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="jenis_identitas" class="col-sm-3
                              col-form-label">Jenis Identitas *
                                   <?php echo form_error('jenis_identitas') ?></label>
                              <div class="col-sm-9">
                              <select name="jenis_identitas" id="jenis_identitas" class="single-select">
                                        <option value="<?php echo $member->jenis_identitas ?>"><?php echo $member->jenis_identitas ?></option>
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
                                        placeholder="No Identitas" value="<?php echo $member->no_identitas; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="nama_bank" class="col-sm-3
                              col-form-label">Nama Bank *
                                   <?php echo form_error('nama_bank') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="nama_bank" id="nama_bank"
                                        placeholder="Nama Bank" value="<?php echo $member->nama_bank; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="no_rekening" class="col-sm-3
                              col-form-label">No Rekening *
                                   <?php echo form_error('no_rekening') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="no_rekening" id="no_rekening"
                                        placeholder="No Rekening" value="<?php echo $member->no_rekening; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="atas_nama" class="col-sm-3
                              col-form-label">Atas Nama *
                                   <?php echo form_error('atas_nama') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="atas_nama" id="atas_nama"
                                        placeholder="Atas Nama" value="<?php echo $member->atas_nama; ?>" />
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="alamat" class="col-sm-3
                              col-form-label">Alamat *
                                   <?php echo form_error('alamat') ?></label>
                              <div class="col-sm-9">
                                   <textarea class="form-control" rows="3" name="alamat" id="alamat" rows="3"
                                        placeholder="Alamat"><?php echo $member->alamat; ?></textarea>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="id_kabupaten" class="col-sm-3
                              col-form-label">Provinsi *</label>
                              <div class="col-sm-9">
                                   <select id="provinsi" class="single-select" onchange="getKabupaten()" required>
                                        <option value="">Pilih Provinsi</option>
                                        <?php 
                                        $selected = "";
                                        $id_provinsi = get_data('regencies','id',$member->id_kabupaten,'province_id'); 
                                        foreach ($this->db->get('provinces')->result() as $rw) :
                                             if ($id_provinsi == $rw->id) {
                                                  $selected = "selected";
                                             }
                                         ?>
                                        <option value="<?php echo $rw->id ?>" <?php echo $selected ?>><?php echo $rw->name ?></option>
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
                                        <option value="<?php echo $member->id_kabupaten ?>"><?php echo get_data('regencies','id',$member->id_kabupaten,'name') ?></option>
                                   </select>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="username" class="col-sm-3
                              col-form-label">Username *
                                   <?php echo form_error('username') ?></label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Username" value="<?php echo $member->username; ?>" readonly/>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="password" class="col-sm-3
                              col-form-label">Password 
                                   <?php echo form_error('password') ?></label>
                              <div class="col-sm-9">
                                   <div class="input-group" id="show_hide_password">

                                   <input type="password" class="form-control" name="password" id="password" value="<?php echo $member->password; ?>"
                                        placeholder="Kosongkan Password jika tidak diubah" />
                                   <a href="javascript:;" onclick="showPassword()" 
                                        class="input-group-text bg-transparent"><i
                                             class='bx bx-hide'></i></a>
                                   </div>
                              </div>
                         </div>
                         <div class="row mb-3">
                              <label for="level" class="col-sm-3
                              col-form-label">Level *</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" name="level" id="level"
                                        placeholder="Level" value="<?php echo $member->level; ?>" readonly/>
                              </div>
                         </div>
                         
                         <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Update</button>
                    </form>
               </div>
               
          </div>
     </div>
</div>

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

     function showPassword(){
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
               $('#show_hide_password input').attr('type', 'password');
               $('#show_hide_password i').addClass("bx-hide");
               $('#show_hide_password i').removeClass("bx-show");
          } else if ($('#show_hide_password input').attr("type") == "password") {
               $('#show_hide_password input').attr('type', 'text');
               $('#show_hide_password i').removeClass("bx-hide");
               $('#show_hide_password i').addClass("bx-show");
          }
     }
</script>