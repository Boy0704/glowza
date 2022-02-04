
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <a href="reward/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a>
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
		<th>Judul</th>
		<th>Deskripsi</th>
		<th>Poin Target</th>
		<th>Action</th>
                            </tr>
                        <tbody><?php
                        $no = 1;
                        foreach ($reward_data as $reward)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td><?php echo $reward->judul ?></td>
			<td><?php echo $reward->deskripsi ?></td>
			<td><?php echo $reward->poin_target ?></td>
			<td style="text-align:center" width="200px">

                        <a href="reward/update/<?php echo $reward->id_reward ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <a href="reward/delete/<?php echo $reward->id_reward ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
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
        
    