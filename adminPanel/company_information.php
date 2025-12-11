<?php include("../includes/header.php"); 
$row=Information('company_information');
?>
<div class="row">
    <!-- [ tabs ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <button  type="button" id="<?php echo $value->id;?>"
                    class="edit_click edit_information_section btn btn-icon btn-info float-right">
                    <i class="feather icon-edit"></i></button>
            </div>
            <div class="card-body">

                <?php show_messages(); ?>

                <div class="dt-responsive table-responsive">
                    <table class="table table-bordered nowrap text-center">
                        <form action="<?php echo ACTIONS . "company_information.php"?>" autocomplete="off"
                            class="form_modal needs-validation" novalidate="" enctype="multipart/form-data"
                            method="post">
                            <thead>
                                <tr>
                                    <!-- <th>Arabic</th> -->

                                    <th></th>
                                    <th colspan="3">Information</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!--<td colspan="3">
                                        <div class="form-group">
                                            <textarea name="nameAr" readonly  class="enableEditing form-control"><?php echo $row['nameAr'] ?></textarea>
                                        </div>
                                    </td> -->
                                    <td style="font-size:16px;">
                                        <?php echo $StringArray[19];?>
                                    </td>

                                   <td colspan="3">
                                        <div class="form-group">
                                            <textarea name="nameEn" readonly
                                                class="enableEditing form-control"><?php echo $row['nameEn'] ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <!--<td colspan="3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="aboutUsAr" readonly  class="enableEditing form-control"><?php echo $row['aboutUsAr'] ?></textarea>
                                            </div>
                                        </div>
                                    </td> -->
                                    <td style="font-size:16px;">
                                        <?php echo $StringArray[21];?>
                                    </td>

                                   <td colspan="3">
                                        <div class="form-group">
                                            <textarea name="aboutUsEn" readonly
                                                class="enableEditing form-control"><?php echo $row['aboutUsEn'] ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <!--<td colspan="3">
                                        <div class="form-group">
                                            <textarea name="visionAr" readonly  class="enableEditing form-control"><?php echo $row['visionAr'] ?></textarea>
                                        </div>
                                    </td> -->
                                    <td style="font-size:16px;">
                                        <?php echo $StringArray[22];?>
                                    </td>


                                   <td colspan="3">
                                        <div class="form-group">
                                            <textarea name="visionEn" readonly
                                                class="enableEditing form-control"><?php echo $row['visionEn'] ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <!--<td colspan="3">
                                        <div class="form-group">
                                            <textarea name="missionAr" readonly  class="enableEditing form-control"><?php echo $row['missionAr'] ?></textarea>
                                        </div>
                                    </td> -->
                                    <td style="font-size:16px;">
                                        <?php echo $StringArray[23];?>
                                    </td>


                                   <td colspan="3">
                                        <div class="form-group">
                                            <textarea name="missionEn" readonly
                                                class="enableEditing form-control"><?php echo $row['missionEn'] ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <!--<td colspan="3">
                                        <div class="form-group">
                                            <textarea name="welcomeAr" readonly  class="enableEditing form-control"><?php echo $row['welcomeAr'] ?></textarea>
                                        </div>
                                    </td> -->

                                    <td style="font-size:16px;">
                                        <?php echo $StringArray[24];?>
                                    </td>
                                   <td colspan="3" >
                                        <div class="form-group">
                                            <textarea name="welcomeEn" readonly
                                                class="enableEditing form-control"><?php echo $row['welcomeEn'] ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <!--<td colspan="3">
                                        <div class="form-group">
                                            <textarea name="locationAr" readonly  class="enableEditing form-control"><?php echo $row['locationAr'] ?></textarea>
                                        </div>
                                    </td> -->
                                    <td style="font-size:16px;">
                                        <?php echo $StringArray[20];?>
                                    </td>

                                   <td colspan="3">
                                        <div class="form-group">
                                            <textarea name="locationEn" readonly
                                                class="enableEditing form-control"><?php echo $row['locationEn'] ?></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[25];?>:</h5>
                                            <input type="text" name="facebook" readonly
                                                class="enableEditing form-control"
                                                value="<?php echo $row['facebook'] ?>">
                                        </div>
                                    </td>
                                   <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[26];?>:</h5>
                                            <input type="text" name="instagram" readonly
                                                class="enableEditing form-control"
                                                value="<?php echo $row['instagram'] ?>">
                                        </div>
                                    </td>
                                   <!-- <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[27];?>:</h5>
                                            <input type="text" name="snapchat" readonly
                                                class="enableEditing form-control"
                                                value="<?php echo $row['snapchat'] ?>">
                                        </div>
                                    </td> -->
                               
                                   <!-- <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[28];?>:</h5>
                                            <input type="text" name="tiktok" readonly class="enableEditing form-control"
                                                value="<?php echo $row['tiktok'] ?>">
                                        </div>
                                    </td>
                                   <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[29];?>:</h5>
                                            <input type="text" name="youtube" readonly
                                                class="enableEditing form-control"
                                                value="<?php echo $row['youtube'] ?>">
                                        </div>
                                    </td> -->
                                   <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[35];?>:</h5>
                                            <input type="email" name="email" readonly class="enableEditing form-control"
                                                value="<?php echo $row['email'] ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[38];?>:</h5>
                                            <input type="text" name="phone" readonly class="enableEditing form-control"
                                                value="<?php echo $row['phone'] ?>">
                                        </div>
                                    </td>
                                    <td >
                                        <div class="form-group">
                                            <h5 class="text-primary"> <?php echo $StringArray[53];?>:</h5>
                                            <input type="text" name="fax" readonly class="enableEditing form-control"
                                                value="<?php echo $row['fax'] ?>">
                                        </div>
                                    </td>
                                   <td >
                                        <div class="form-group">
                                            <h3><img class="img-radius" style="height:80px;width:80px;"
                                                    src="<?php echo UPLOADS.$row['logo']?>" alt="" /></h3>

                                            <h5 class="text-primary"> <?php echo $StringArray[30];?>:</h5>
                                            <input type="file" name="image" class="enableEditing form-control"
                                                accept="image/*" readonly />

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button type="submit" name="edit"
                                            class="submit_click btn btn-primary"><?php echo $StringArray[16];?>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ tabs ] end -->
</div>
<?php include("../includes/footer.php"); ?>
<script>
    $('.edit_click').on('click', function () {
        $('.enableEditing ').prop('readonly', false);

    });
</script>