
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <a href="testimoni/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
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
		<th>Foto</th>
		<th>Link</th>
		<th>Action</th>
                            </tr>
                            </thead>
                        <tbody><?php
                        $no = 1;
                        foreach ($testimoni_data as $testimoni)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td>
                <img src="image/testimoni/<?php echo $testimoni->foto ?>" style="width: 100px;">         
            </td>
			<td><?php echo $testimoni->link ?></td>
			<td style="text-align:center" width="200px">

                        <a href="testimoni/update/<?php echo $testimoni->id_testimoni ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <a href="testimoni/delete/<?php echo $testimoni->id_testimoni ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
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
        
    