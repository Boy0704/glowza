
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <a href="point_bonus/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
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
		<th>Kode Point</th>
		<th>Point</th>
		<th>Keterangan</th>
		<th>Action</th>
                            </tr>
                            </thead>
                        <tbody><?php
                        $no = 1;
                        foreach ($point_bonus_data as $point_bonus)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td><?php echo $point_bonus->kode_point ?></td>
			<td><?php echo $point_bonus->point ?></td>
			<td><?php echo $point_bonus->keterangan ?></td>
			<td style="text-align:center" width="200px">

                        <a href="point_bonus/update/<?php echo $point_bonus->id_set_point ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <a href="point_bonus/delete/<?php echo $point_bonus->id_set_point ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
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
        
    