<?php include("../includes/header.php"); ?>
<div class="row">
    <!-- [ tabs ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                 <button  class="pd-r-l btn add_category_section btn-primary 
                 btn-sm btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-category">
                <i class="feather icon-plus"></i><?php echo $StringArray[9];?></button>
            </div>
            <div class="card-body">
                <?php show_messages(); ?>
                <div class="dt-responsive table-responsive">
                    <table class="basic-btn table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo $StringArray[12][0];?></th>
                             
                                <th><?php echo $StringArray[10];?></th>
                                <th><?php echo $StringArray[11];?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            $row = TableList('category');
                            foreach($row as $value){ ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                               
                                <td><?php echo $value->nameEn; ?></td>
                               
                              
                                <td><button  data-toggle="modal" data-target="#modal-category"  
                                    type="button" id="<?php echo $value->id;?>" 
                                    class="edit_click edit_category_section btn btn-icon btn-info">
                                    <i class="feather icon-edit"></i></button>										
								</td>
                                <td><button  data-toggle="modal" data-target="#modal-delete-record"
                                    type="button" id="<?php echo $value->id;?>" table="category" 
                                    flag="0" class="delete_click delete_category_section btn btn-icon btn-danger">
                                    <i class="feather icon-trash-2"></i></button>										
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ tabs ] end -->
</div>
<?php include("../includes/footer.php"); ?>
<script>
$('.edit_click').on('click', function() {
 var id = $(this).attr("id");
 $('.primary_id').val(id);
    $.ajax({
    url: "../includes/fetch_record_data.php",
    method: "POST",
    data: { id: id  , type : 'List' ,Table:'category'},
    dataType: "json",
    success: function (data) {
        $('.name_en').val(data.nameEn);
        $('.name_ar').val(data.nameAr);

    }
    })
});
</script>