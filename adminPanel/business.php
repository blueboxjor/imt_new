<?php include("../includes/header.php"); ?>
<div class="row">
    <!-- [ tabs ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                 <button class="pd-r-l btn add_business_section btn-primary btn-sm btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-business">
                <i class="feather icon-plus"></i>Category</button>
            </div>
            <div class="card-body">
                <?php show_messages(); ?>
                <div class="dt-responsive table-responsive">
                    <table class="basic-btn table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo $StringArray[13];?></th>
                                <th><?php echo $StringArray[15][0];?></th>

                                <th><?php echo $StringArray[14][0];?></th>
                                <!-- <th><?php echo $StringArray[49];?></th> -->
                                <th><?php echo $StringArray[10];?></th>
                                <th><?php echo $StringArray[11];?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            $row = TableList('business');
                            foreach($row as $value){ ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>
                                     <img class="img-radius" style="width:75px" 
                                     src="<?php echo UPLOADS.$value->image; ?>" alt="" />
                                </td>
                                <td><?php echo $value->titleEn; ?></td>
                                <td><?php echo $value->descriptionEn; ?></td>
                                <!-- <td>
                                    <a href="attachments.php?id=<?php echo $value->id; ?>&type=1">
                                    <button  type="button" class="view_business_section btn btn-icon btn-success">
                                    <i class="feather icon-eye"></i></button>
                                    </a>										
                                </td>                                -->
                                <td><button  data-toggle="modal" data-target="#modal-business"  
                                    type="button" id="<?php echo $value->id;?>" 
                                    class="edit_click edit_information edit_business_section btn btn-icon btn-info">
                                    <i class="feather icon-edit"></i></button>										
								</td>
                                
                                <td><button data-toggle="modal" data-target="#modal-delete-record"
                                    type="button" id="<?php echo $value->id;?>" table="business" 
                                    flag="0" class="delete_click delete_business_section btn btn-icon btn-danger">
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


    $('.edit_information').on('click', function() {
        var id = $(this).attr("id");

        $('.primary_id').val(id);
            $.ajax({
            url: "../includes/fetch_record_data.php",
            method: "POST",
            data: { id: id , type : 'List' ,Table:'business'},
            dataType: "json",
            success: function (data) {
                $('.title_en').val(data.titleEn);
                $('.title_ar').val(data.titleAr);
                $('.description_en').val(data.descriptionEn);
                $('.description_ar').val(data.descriptionAr);
               

            }
            });
    });

</script>