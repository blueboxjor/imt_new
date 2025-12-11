<?php include("../includes/header.php"); ?>
<div class="row">
    <!-- [ tabs ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                 <button class="pd-r-l btn add_user_section btn-primary btn-sm btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-user">
                <i class="feather icon-plus"></i><?php echo $StringArray[9];?></button>
            </div>
            <div class="card-body">
                <?php show_messages(); ?>
                <div class="dt-responsive table-responsive">
                    <table class="basic-btn table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo $StringArray[40];?></th>
                                <th><?php echo $StringArray[12][0];?></th>
                                <th><?php echo $StringArray[38];?></th>
                                <!-- <th><?php echo $StringArray[34];?></th> -->
                                <!-- <th><?php echo $StringArray[42];?></th> -->
                                <th><?php echo $StringArray[10];?></th>
                                <th><?php echo $StringArray[41];?></th>
                                <th><?php echo $StringArray[11];?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            $row = TableList('users');
                            foreach($row as $value){ ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>
                                     <img class="img-radius" style="width:75px" 
                                     src="<?php echo UPLOADS.$value->ProfilePic; ?>" alt="" />
                                </td>
                                <td><?php echo $value->Name; ?></td>
                                <td><?php echo $value->Phone; ?></td>
                                <!-- <td><?php echo get_column('roles','Name',$value->RoleId); ?></td> -->
                                <!-- <td><button data-toggle="modal" data-target="#modal-permissions"  
                                    type="button" id="<?php echo $value->id;?>" 
                                    class="edit_click edit_permission edit_user_section  btn btn-icon btn-success">
                                    <i class="feather icon-eye"></i></button>										
								</td> -->
                                <td><button  data-toggle="modal" data-target="#modal-user"  
                                    type="button" id="<?php echo $value->id;?>" 
                                    class="edit_click edit_information edit_user_section btn btn-icon btn-info">
                                    <i class="feather icon-edit"></i></button>										
								</td>
                                <td><button data-toggle="modal" data-target="#modal-reset"  
                                    type="button" id="<?php echo $value->id;?>" 
                                    class="reset_section   btn btn-icon btn-primary">
                                    <i class="feather icon-x"></i></button>										
								</td>
                                <td><button data-toggle="modal" data-target="#modal-delete-record"
                                    type="button" id="<?php echo $value->id;?>" table="users" 
                                    flag="1" class="delete_click delete_user_section btn btn-icon btn-danger">
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
    $(document).on('click', '.reset_section', function () {
    var id = $(this).attr("id");
    $('.submit_click').attr("name","reset")
    $('.primary_id').val(id);
    });

    $('.edit_information').on('click', function() {
        var id = $(this).attr("id");

        $('.primary_id').val(id);
            $.ajax({
            url: "../includes/fetch_record_data.php",
            method: "POST",
            data: { id: id , type : 'user' },
            dataType: "json",
            success: function (data) {
                $('.name').val(data.Name);
                $('.phone').val(data.Phone);
                $('.email').val(data.Email);
                // $('.role').val(data.RoleId);
                $('.company').val(data.ParentId);
             

            }
            });
    });
// $('.edit_permission').on('click', function() {
//  var id = $(this).attr("id");

// $("input[type='checkbox']").prop("checked", false);
// 	$.ajax({
//         url:"../includes/fetch_multi_data.php",
//         method:"POST",
//         data:{id:id , type : 'permissions'},
//         dataType:"json",
//         success:function(data)
//         {
//             $.each(data,function(i, val){
//                 if(val.parentId ==0){
//                     $('.SubDiv-' + val.id).show();
//                 }
//                 else {
//                     $('.SubDiv-' + val.id).hide(); 
//                 }
//             $('.Check-'+val.permissions).prop('checked',true);
//             });
//         },
//         error:function(e){
//             alert("error.. try again");
//         }
// 	});
// });

</script>