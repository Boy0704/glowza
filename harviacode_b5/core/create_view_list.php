<?php 

$string = "
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col\">
                        <a href=\"produk/create\" class=\"btn btn-primary\"><i class=\"bx bx-plus mr-1\"></i>Tambah</a>
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <div class=\"col\">
                        <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table id=\"exampleDataTable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th>No</th>";
                foreach ($non_pk as $row) {
                    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
                }
                $string .= "\n\t\t<th>Action</th>
                            </tr>
                        <tbody>";
            $string .= "<?php
                        \$no = 1;
                        foreach ($" . $c_url . "_data as \$$c_url)
                        {
                            ?>
                            <tr>";

            $string .= "\n\t\t\t<td width=\"80px\"><?php echo \$no ?></td>";
            foreach ($non_pk as $row) {
                $string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
            }


            $string .= "\n\t\t\t<td style=\"text-align:center\" width=\"200px\">

                        <a href=\"".$c_url."/update/<?php echo \$$c_url->$pk ?>\" title=\"Update Data\" class=\"btn btn-sm btn-primary\"><i class=\"bx bx-edit me-0\"></i>
                        </a>
                        <a href=\"".$c_url."/delete/<?php echo \$$c_url->$pk ?>\" title=\"Hapus Data\" onclick=\"javasciprt: return confirm('Yakin akan hapus data ini ?')\" class=\"btn btn-sm btn-danger\"><i class=\"bx bx-trash-alt me-0\"></i>
                        </a>
            "
                    
                    . "\n\t\t\t</td>";

            $string .=  "\n\t\t</tr>
                            <?php
                            \$no++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    ";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>