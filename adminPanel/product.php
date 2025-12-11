<?php include("../includes/header.php"); ?>
<div class="row">
    <!-- [ tabs ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                 <button class="pd-r-l btn add_product_section btn-primary btn-sm btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-product">
                <i class="feather icon-plus"></i><?php echo $StringArray[5];?></button>
            </div>
            <div class="card-body">
                <?php show_messages(); ?>
                <div class="dt-responsive table-responsive">
                    <table class="basic-btn table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo $StringArray[13];?></th>
                                <th><?php echo $StringArray[12][0];?></th>
                                <th><?php echo $StringArray[7];?></th>

                                <th><?php echo $StringArray[14][0];?></th>
                                <!-- <th><?php echo $StringArray[6][0];?></th>

                                <th><?php echo $StringArray[31];?></th>
                                <th><?php echo $StringArray[32];?></th>
                                <th><?php echo $StringArray[36];?></th>
                                <th><?php echo $StringArray[37];?></th>
                                <th><?php echo $StringArray[51];?></th> -->

                            <th>Keys</th>
                                <th><?php echo $StringArray[10];?></th>
                                <th><?php echo $StringArray[11];?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            $row = TableList('product');
                            foreach($row as $value){ ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>
                                     <img class="img-radius" style="width:75px" 
                                     src="<?php echo UPLOADS.$value->image; ?>" alt="" />
                                </td>
                                <td><?php echo $value->nameEn; ?></td>
                                <!-- i used the business as category -->
                                <td><?php echo get_column('business','titleEn',$value->categoryId); ?></td>
                                <td><?php echo $value->descriptionEn; ?></td>
                                <td><?php echo $value->descriptionAr; ?></td>
                                <!-- <td><?php echo $value->bestBeforeEn; ?></td>
                                <td><?php echo $value->packageEn; ?></td>
                                <td><?php echo $value->posolgyEn; ?></td>
                                <td><?php echo $value->usageEn; ?></td>
                                <td><?php echo $value->productionPlaceEn; ?></td>
                                <td><?php echo $value->storageConditionEn; ?></td> -->
          
                                <td><button  data-toggle="modal" data-target="#modal-product"  
                                    type="button" id="<?php echo $value->id;?>" 
                                    class="edit_click edit_information edit_product_section btn btn-icon btn-info">
                                    <i class="feather icon-edit"></i></button>										
								</td>
                                
                                <td><button data-toggle="modal" data-target="#modal-delete-record"
                                    type="button" id="<?php echo $value->id;?>" table="product" 
                                    flag="0" class="delete_click delete_product_section btn btn-icon btn-danger">
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
            data: { id: id , type : 'List' ,Table:'product'},
            dataType: "json",
            success: function (data) {
                $('.name_en').val(data.nameEn);
                $('.name_ar').val(data.nameAr);
                $('.description_en').val(data.descriptionEn);
                $('.description_ar').val(data.descriptionAr);
                $('.bestBefore_en').val(data.bestBeforeEn);
                $('.package_en').val(data.packageEn);
                $('.posolgy_en').val(data.posolgyEn);
                $('.usage_en').val(data.usageEn);
                $('.productionPlace_en').val(data.productionPlaceEn);
                $('.storageCondition_en').val(data.storageConditionEn);
                $('.categoryId').val(data.categoryId).trigger('change');


            }
            });
    });

</script>