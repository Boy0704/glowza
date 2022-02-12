
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <a href="kas_keluar/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
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
		<th>Keterangan</th>
		<th>Jumlah</th>
        <th>Tanggal</th>
		<th>Created at</th>
		<th>Action</th>
                            </tr>
                            </thead>
                        <tbody><?php
                        $no = 1;
                        foreach ($kas_keluar_data as $kas_keluar)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td><?php echo $kas_keluar->keterangan ?></td>
			<td><?php echo $kas_keluar->jumlah ?></td>
            <td><?php echo $kas_keluar->tanggal ?></td>
			<td><?php echo $kas_keluar->created_at ?></td>
			<td style="text-align:center" width="200px">

                        <a href="kas_keluar/update/<?php echo $kas_keluar->id_kas_keluar ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <a href="kas_keluar/delete/<?php echo $kas_keluar->id_kas_keluar ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
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
        
    