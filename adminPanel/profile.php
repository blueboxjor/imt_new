<?php include('../includes/header.php');?>

<div class="row">
    <div class="col-sm-12">
        <!-- start card1 -->
        <div class="card">
            <div class="card-body">
                <?php show_messages(); ?>
                <ul class="nav nav-pills bg-white" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-list" data-toggle="tab" href="#first_tab" role="tab" ><?php echo $StringArray[45];?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end card1 -->
        <!-- start card2 -->
        <div class="card">
            <div class="tab-content" id="myTabContent">
                <!-- tab change password -->
                <div class="tab-pane fade show active" id="first_tab" role="tabpanel" aria-labelledby="pass-tab">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dt-responsive table-responsive">
                                        <div class="auth-content">
                                            <form action="<?php echo ACTIONS . "users.php"?>" class="form_modal needs-validation" novalidate="" method="post">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <h5 class="text-primary"><?php echo $StringArray[46];?></h5>
                                                        <input type="password" class="form-control" name="old_password" required/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <h5 class="text-primary"><?php echo $StringArray[47];?></h5>
                                                        <input type="password" class="form-control" name="password1" id="password1"  required/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <h5 class="text-primary"><?php echo $StringArray[48];?></h5>
                                                        <input type="password" class="form-control" name="password2" id="password2"  required/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                     <span id='message'></span>
                                                    <input type="submit" name="change_password" 
                                                    class="submit_click btn btn-primary btn-block" value="Save">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end oftab change password -->
            </div>
            <!-- end tab content -->
        </div>
        <!-- end card2 -->
    </div>
    <!-- end col-12 -->
</div>
<!-- end row -->

<?php include('../includes/footer.php'); ?>