<?php
if(isset($_GET['id'])){$id=$_GET['id'];}
else {$id='';}
if(isset($_GET['type'])){$type=$_GET['type'];}
else {$type='';}
?>
<!-- users -->
<div class="modal fade" id="modal-user" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo ACTIONS . "users.php"?>" autocomplete="off" class="form_modal needs-validation"
                    novalidate="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[12][0];?></h5>
                                <input type="text" name="name" class="name form-control" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[38];?></h5>
                                <input type="text" class="phone numberInput form-control" name="phone" required />
                            </div>
                        </div>
                        <div class="col-sm-6 Primary_div">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[39];?></h5>
                                <input type="password" name="password" class="Primary_field form-control" />
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"> <?php echo $StringArray[34]; ?></h5>
                                <select class="role form-control" name="role" required>
                                    <option value=""> </option>
                                    <?php
                                    $row= TableList('roles');
                                    foreach($row as $value){
                                        echo '<option value='.$value->id.' >'.$value->name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[40];?></h5>
                                <input type="file" name="image" class="form-control" accept="image/*" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="hidden" class="primary_id" name="primary_id">
                            <button type="submit" class="submit_click btn btn-primary"><?php echo $StringArray[16];?>
                            </button>
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- business -->
<div class="modal fade" id="modal-business" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo ACTIONS . "business.php"?>" autocomplete="off"
                    class="form_modal needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[15][0];?></h5>
                                <input type="text" name="titleEn" class="title_en form-control" required />
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo 'Main '.$StringArray[13];?></h5>
                                <input type="file" name="image" class="form-control" accept="image/*" />
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[15][1];?></h5>
                                <input type="text" name="titleAr" class="title_ar form-control" required />
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[14][0];?></h5>
                                <textarea name="descriptionEn" class="description_en form-control" ></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[14][1];?></h5>
                                <textarea name="descriptionAr" class="description_ar form-control" required></textarea>
                            </div>
                        </div> -->
                    
                        <!-- <div class="col-sm-6 Primary_div">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo 'Multi '.$StringArray[13];?></h5>
                                <input type="file" name="multi_image[]" class="form-control" accept="image/*" multiple />
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <input type="hidden" class="primary_id" name="primary_id">
                            <button type="submit" class="submit_click btn btn-primary"><?php echo $StringArray[16];?>
                            </button>
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="modal-product" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo ACTIONS . "product.php"?>" autocomplete="off"
                    class="form_modal needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"> <?php echo $StringArray[7]; ?></h5>
                                <select class="categoryId js-example-rtl form-control" name="categoryid" required>
                                    <option value=""> </option>
                                    <?php
                                    $row= TableList('business');
                                    foreach($row as $value){
                                        echo '<option value='.$value->id.' >'.$value->titleEn.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[12][0];?></h5>
                                <input type="text" name="nameEn" class="name_en form-control" required />
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[12][1];?></h5>
                                <input type="text" name="nameAr" class="name_ar form-control" required />
                            </div>
                        </div> -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[14][0];?></h5>
                                <textarea name="descriptionEn" class="description_en form-control" required></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary">Keys</h5>
                                <textarea name="descriptionAr" class="description_ar form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[13];?></h5>
                                <input type="file" name="image" class="form-control" accept="image/*" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="hidden" class="primary_id" name="primary_id">
                            <button type="submit" class="submit_click btn btn-primary"><?php echo $StringArray[16];?>
                            </button>
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- view  -->
<div id="modal-view-attachment" class="modal fade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ShowImage">
                    </div>
                </div>
            </div>
            <form autocomplete="off" method="post" class="needs-validation" novalidate=""
                action="<?php echo ACTIONS . "delete.php" ?>">
                <div class="modal-footer">
                    <input type="hidden" class="TableName" name="table" value="attachments">
                    <input type="hidden" class="id" name="id">
                    <input type="hidden" class="flag" name="flag" value="0">
                    <button data-dismiss="modal" aria-label="Close"
                        class="btn btn-danger"><?php echo $StringArray[17];?></button>
                    <button type="submit" name="delete" class="btn  btn-primary">
                        <?php echo $StringArray[11];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  New Password -->
<div class="modal fade" id="modal-reset" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo ACTIONS . "users.php"?>" class="form_modal needs-validation" novalidate=""
                    enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[39];?></h5>
                                <input type="password" class="form-control" name="password" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="hidden" class="primary_id" name="primary_id">
                            <input type="submit" name="reset" class="submit_click btn btn-primary"
                                value="<?php echo $StringArray[16];?>">
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- for attachments -->
<div class="modal fade" id="modal-attachment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">إضافة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off" action="<?php echo ACTIONS . "attachment.php"?>" class="needs-validation"
                    novalidate="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[44];?></h5>
                                <input type="text" class="form-control" name="title" />
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[33]; ?></h5>
                                <input type="file" name="files[]" class="form-control"
                                    accept="video/*,.xlsx,.xls,image/*,.doc, .docx,.pdf" required multiple />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="hidden" class="id" name="id" value="<?php echo $id?>">
                            <input type="hidden" name="type" value="<?php echo $type?>">
                            <input type="hidden" name="brand" value="<?php echo $brand; ?>">
                            <input type="hidden" name="color" value="<?php echo $color; ?>">
                            <input type="hidden" name="sub_brand" value="<?php echo $sub_brand; ?>">
                            <button type="submit" class="submit_click btn btn-primary"><?php echo $StringArray[16];?>
                            </button>
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Delete -->
<div id="modal-delete-record" class="modal fade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3>Are You Sure ?</h3>
            </div>
            <form autocomplete="off" method="post" class="needs-validation" novalidate=""
                action="<?php echo ACTIONS . "delete.php" ?>">
                <div class="modal-footer">
                    <input type="hidden" class="TableName" name="table">
                    <input type="hidden" class="id" name="id">
                    <input type="hidden" class="flag" name="flag">
                    <button data-dismiss="modal" aria-label="Close"
                        class="btn btn-danger"><?php echo $StringArray[17];?></button>
                    <button type="submit" name="delete" class="btn  btn-primary"><?php echo $StringArray[18];?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete All -->
<div id="modal-delete-all" class="modal fade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3>هل انت متأكد ؟</h3>
            </div>
            <form method="post" class="needs-validation" novalidate="" action="<?php echo ACTIONS . "delete.php" ?>">
                <div class="modal-footer">
                    <input type="hidden" name="category" value="<?php echo $category; ?>">
                    <input type="hidden" name="brand" value="<?php echo $brand; ?>">
                    <button data-dismiss="modal" aria-label="Close"
                        class="btn btn-danger"><?php echo $StringArray[17];?></button>
                    <button type="submit" name="allItem" class="btn  btn-primary">نعم , حذف</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- category -->
<div class="modal fade" id="modal-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form autocomplete="off" action="<?php echo ACTIONS . "category.php"?>"
                    class="form_modal needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[12][0];?></h5>
                                <input type="text" class="name_en  form-control" name="nameEn" required autofocus />
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[12][1];?></h5>
                                <input type="text" class="name_ar  form-control" name="nameAr" required autofocus />
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <input type="hidden" class="primary_id" name="primary_id">
                            <input type="submit" class="submit_click btn btn-primary"
                                value="<?php echo $StringArray[16];?>">
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- banner -->
<div class="modal fade" id="modal-banner" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo ACTIONS . "banner.php"?>" autocomplete="off"
                    class="form_modal needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[15][0];?></h5>
                                <input type="text" name="titleEn" class="title_en form-control" required />
                            </div>
                        </div>
                    
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[15][1];?></h5>
                                <input type="text" name="titleAr" class="title_ar form-control" required />
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[14][0];?></h5>
                                <textarea name="descriptionEn" class="description_en form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo 'Main '.$StringArray[13];?></h5>
                                <input type="file" name="image" class="form-control" accept="image/*" />
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo $StringArray[14][1];?></h5>
                                <textarea name="descriptionAr" class="description_ar form-control" required></textarea>
                            </div>
                        </div> -->
                    
                        <!-- <div class="col-sm-6 Primary_div">
                            <div class="form-group">
                                <h5 class="text-primary"><?php echo 'Multi '.$StringArray[13];?></h5>
                                <input type="file" name="multi_image[]" class="form-control" accept="image/*" multiple />
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <input type="hidden" class="primary_id" name="primary_id">
                            <button type="submit" class="submit_click btn btn-primary"><?php echo $StringArray[16];?>
                            </button>
                            <button data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger"><?php echo $StringArray[17];?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>