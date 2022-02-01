<?php 

$string = "<form action=\"<?php echo \$action; ?>\" method=\"post\" enctype=\"multipart/form-data\">";
$string .= "\n\t <div class=\"card border-top border-0 border-4 border-info\">
     <div class=\"card-body\">
          <div class=\"border p-4 rounded\">
               <div class=\"card-title d-flex align-items-center\">
                    <div><i class=\"bx bx-edit-alt me-1 font-22 text-info\"></i>
                    </div>
                    <h5 class=\"mb-0 text-info\"><?php echo \$judul_form ?></h5>
               </div>
               <hr />
               ";

               foreach ($non_pk as $row) {
               if ($row["data_type"] == 'text')
               {
               $string .= "\n\t <div class=\"row mb-3\">
                    <label for=\"".$row["column_name"]."\" class=\"col-sm-3
                         col-form-label\">".label($row["column_name"])."
                         <?php echo form_error('".$row["column_name"]."') ?></label>
                    <div class=\"col-sm-9\">
                         <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\"
                              id=\"".$row["column_name"]."\" rows=\"3\"
                              placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
                    </div>
               </div>";
               } else
               {
               $string .= "\n\t <div class=\"row mb-3\">
                    <label for=\"".$row["column_name"]."\" class=\"col-sm-3
                         col-form-label\">".label($row["column_name"])."
                         <?php echo form_error('".$row["column_name"]."') ?></label>
                    <div class=\"col-sm-9\">
                         <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\"
                              id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"
                              value=\"<?php echo $".$row["column_name"]."; ?>\" />
                    </div>
               </div>";
               }
               }
               $string .= "\n\t <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
               $string .= "\n\t <button type=\"submit\" class=\"btn btn-primary\"><i class=\"bx bx-save\"></i>
                    <?php echo \$button ?></button> ";
               $string .= "\n\t <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-outline-info\"><i
                         class=\"bx bx-exit\"></i> Cancel</a>";
               $string .= "\n\t
               </div>
               </div>
               </div>
               </form>
               ";

               $hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

               ?>