
        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <!-- <a href="slider/create" class="btn btn-primary"><i class="bx bx-plus mr-1"></i>Tambah</a> -->
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
                        $slider_data = $this->db->get('slider');
                        foreach ($slider_data->result() as $slider)
                        {
                            ?>
                            <tr>
			<td width="80px"><?php echo $no ?></td>
			<td>
                <img src="front/assets/css/img/slider/<?php echo $slider->foto ?>" style="width: 100px;">         
            </td>
			<td><?php echo $slider->link ?></td>
			<td style="text-align:center" width="200px">

                        <a href="slider/update/<?php echo $slider->id_slider ?>" title="Update Data" class="btn btn-sm btn-primary"><i class="bx bx-edit me-0"></i>
                        </a>
                        <!-- <a href="slider/delete/<?php echo $slider->id_slider ?>" title="Hapus Data" onclick="javasciprt: return confirm('Yakin akan hapus data ini ?')" class="btn btn-sm btn-danger"><i class="bx bx-trash-alt me-0"></i>
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
        
    