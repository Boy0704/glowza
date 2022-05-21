
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <!-- <a href="setting/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a> -->
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
		<th>Brand</th>
		<th>Foto</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Jam Kerja</th>
		<th>Fb</th>
		<th>Ig</th>
		<th>Youtube</th>
		<th>Action</th>
                            </tr>
                            </thead>
                        <tbody><?php
                        $no = 1;
                        foreach ($setting_data as $setting)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td><?php echo $setting->brand ?></td>
			<td>
                <img src="image/<?php echo $setting->foto ?>" style="width: 100px;">         
            </td>
			<td><?php echo $setting->alamat ?></td>
			<td><?php echo $setting->email ?></td>
			<td><?php echo $setting->jam_kerja ?></td>
			<td><?php echo $setting->fb ?></td>
			<td><?php echo $setting->ig ?></td>
			<td><?php echo $setting->youtube ?></td>
			<td style="text-align:center" width="200px">

                        <a href="setting/update/<?php echo $setting->id_setting ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <!-- <a href="setting/delete/<?php echo $setting->id_setting ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
                        </a> -->
            
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
        
    