
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <!-- <a href="subscribe/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a> -->
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
		<th>Email</th>
		<th>Created At</th>
		<th>Action</th>
                            </tr>
                            </thead>
                        <tbody><?php
                        $no = 1;
                        foreach ($subscribe_data as $subscribe)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td><?php echo $subscribe->email ?></td>
			<td><?php echo $subscribe->created_at ?></td>
			<td style="text-align:center" width="200px">

                        <a href="subscribe/update/<?php echo $subscribe->id_subscribe ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <a href="subscribe/delete/<?php echo $subscribe->id_subscribe ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
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
        
    