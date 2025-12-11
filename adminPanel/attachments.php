<?php include('../includes/header.php'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <?php 
            // if ($_GET['id'] != 0){ ?>
            <div class="card-header">
                 <!-- <button style="display:none" class="btn btn-primary btn-sm btn-round has-ripple 
                   add_click add_section"
                   data-toggle="modal" data-target="#modal-attachment">
                    <i class="feather icon-plus"></i> <?php echo $StringArray[9]." ". $StringArray[33];?>
                 </button> -->
                 <button style="display:none"   type="button" 
                 class="print_warehouse_section Request btn btn-sm btn-warning btn-round has-ripple CheckButton " style="display:none">
                  Request To Print
                </button>
            </div>
            <?php // } ?>
            <div class="card-body">
                <?php show_messages(); ?>
                <div class="dt-responsive table-responsive">
                    <table class="basic-btn table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th></th>
                               
                                <th><?php echo $StringArray[49];?></th>
                                <th><?php echo $StringArray[9];?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i =1;
                      
                            $row=GetAttachments($_GET['id'],$_GET['type']);
                            foreach($row as $value ){ 
                                ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                               
                                <td>
                                    
                                
                                            <a class="view_attachment" data-toggle="modal" data-target="#modal-view-attachment" 
                                            src="<?php echo UPLOADS.$value->showImage ;?>" id="<?php echo $value->id;?>" >
                                                <img style=" width:140px;height: 140px" src="<?php echo UPLOADS.$value->showImage ;?>" alt="" class="img-fluid img-thumbnail" />
                                            </a>
                                       
                                </td>
                                <td><button style="display:none" data-toggle="modal" data-target="#modal-attachment"
                                    type="button" id="<?php echo $value->itemId;?>" class="add_click add_attachment_section btn btn-icon btn-primary">
                                    <i class="feather icon-plus"></i></button>										
                                </td>
                              
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php'); ?>
<script>
 $(document).on('click', '.add_attachment_warehouse_section', function () {
 var id = $(this).attr("id");
 $('.id').val(id);
 });
 </script>

<script>
 $(document).on('click', '.view_attachment', function () {
 $('.ShowImage').html("");
 var id = $(this).attr("id");
 $('.id').val(id);
 var src=$(this).attr("src");
 var image ='<img  src="'+src+'" alt="" class="img-fluid img-thumbnail" />';
 $('.ShowImage').append(image);
 });
 </script>