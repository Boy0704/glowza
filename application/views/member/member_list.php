<div class="card">
     <div class="card-body">
          <div class="row mb-4">
               <div class="col">
                    <a href="member/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
               </div>
          </div>
          <div class="row mb-3">
               <div class="col">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
               </div>
          </div>
          <div class="table-responsive">
               <table id="exampleDataTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Kode Member</th>
                              <th>Nama Lengkap</th>
                              <th>KTP</th>
                              <th>Email</th>
                              <th>No Telp</th>
                              <th>Instagram</th>
                              <th>Facebook</th>
                              <th>Shopee</th>
                              <th>Tokopedia</th>
                              <th>Bukalapak</th>
                              <th>Lazada</th>
                              <th>Jenis Identitas</th>
                              <th>No Identitas</th>
                              <th>Nama Bank</th>
                              <th>No Rekening</th>
                              <th>Atas Nama</th>
                              <th>Alamat</th>
                              <th>Provinsi</th>
                              <th>Kabupaten</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Level</th>
                              <th>Tanggal Bergabung</th>
                              <th>Akses Terakhir</th>
                              <th>Action</th>
                         </tr>
                         </thead>
                    <tbody><?php
                        $no = 1;
                        foreach ($member_data as $member)
                        {
                            ?>
                         <tr>
                              <td width="80px"><?php echo $no ?></td>
                              <td><?php echo $member->kode_member ?></td>
                              <td>
							<a href="member/detail_member/<?php echo $member->id_member ?>">
							<?php echo $member->nama_lengkap ?>
							</a>
						</td>
                              <td>
                                   <a href="image/ktp/<?php echo $member->foto_identitas ?>" target="_blank">
                                        Download
                                   </a>
                              </td>
                              <td><?php echo $member->email ?></td>
                              <td><?php echo $member->no_telp ?></td>
                              <td><?php echo $member->instagram ?></td>
                              <td><?php echo $member->facebook ?></td>
                              <td><?php echo $member->shopee ?></td>
                              <td><?php echo $member->tokopedia ?></td>
                              <td><?php echo $member->bukalapak ?></td>
                              <td><?php echo $member->lazada ?></td>
                              <td><?php echo $member->jenis_identitas ?></td>
                              <td><?php echo $member->no_identitas ?></td>
                              <td><?php echo $member->nama_bank ?></td>
                              <td><?php echo $member->no_rekening ?></td>
                              <td><?php echo $member->atas_nama ?></td>
                              <td><?php echo $member->alamat ?></td>
                              <td>
							<?php 
							$id_prov = get_data('regencies','id',$member->id_kabupaten,'province_id');
							echo get_data('provinces','id',$id_prov,'name');
							?>
						</td>
                              <td><?php echo get_data('regencies','id',$member->id_kabupaten,'name') ?></td>
                              <td><?php echo $member->username ?></td>
                              <td><?php echo $member->password ?></td>
                              <td><?php echo $member->level ?></td>
                              <td><?php echo $member->created_at ?></td>
                              <td><?php echo $member->last_login ?></td>
                              <td style="text-align:center" width="200px">

                                   <a href="member/update/<?php echo $member->id_member ?>" title="Update Data"
                                        class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                                   </a>
                                   <a href="member/delete/<?php echo $member->id_member ?>" title="Hapus Data"
                                        onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')"
                                        class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
                                   </a>

                              </td>
                         </tr>
                         <?php
                            $no++;
                        }
                        ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>