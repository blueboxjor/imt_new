<?php include "includes/website_header.php";?>

<!-- #subheader-->
<div class="main  ">
    <div class="pagemid-section ">
        <div class="inner" style="margin-bottom: 30px;">
            <main class="content-area ">
                <div class="clearfix">
                    <div class="fullwidth" style="margin-top: 15px; margin-bottom: 100px;" data-aos="fade-down">
<div class="row row-cols-8">
                            <?php 
                        		$row = TableList('business');
                                foreach($row as $value){
                                    $max=get_col('business','max(id)');
                                    if($value->id == $max){
                                        $class="last";
                                    }else{
                                        $class="";
                                    }
                            ?>
<div class="col newMaxHeight">
                                <div class="at-icon-box-v1  ">

                                    <a class="at-icon__main-v1 zoom"
                                        href="categories.php?id=<?php echo $value->id ?>"><i><img style="width: 50%;"
                                                src="<?php echo UPLOADS.$value->image; ?>"></i>
                                        <h3><?php echo $value->titleEn; ?></h3>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- end of btn -->
                    <!-- <div class="demo_space" style="height:50px"></div> -->

                    <?php
                    $count = 0;

                    if(isset($_GET['id'])){
                        $rows = get_SpecificList('product', 'categoryId', $_GET['id']);
                    }else{
                        $rows = TableList('product');
                    }

                    foreach ($rows as $value1) { ?>

                    <div class="row">
                        <?php
                                    
                                        $count++;
                                        if ($count % 2 != 0) {
                                            ?>
                        <div data-aos="fade-right" class="one_half "
                            style="background: url(images/bbb.jpg); background-size: contain; background-repeat: no-repeat;">
                            <figure>
                                <img style="margin-left: -15%; " src="<?php echo UPLOADS . $value1->image; ?>" alt="">
                                
                            </figure>
                        </div>
                        <!-- .one_third-->
                        <div data-aos="fade-left" class="one_half   last">
                            <div class=" ">
                                <h1 class=" ">
                                    <span class=""
                                        style="color:#0084B3;font-weight: bold;"><?php echo $value1->nameEn; ?></span>
                                </h1>
                            </div>
                            <p class="size-10 ">
                                <span style="font-size:13px !important;text-align:left !important;">

                                </span>
                                <div class="d-inline-block other-info">

                                    <strong>

                                        <h3 style="font-size:19px !important; text-align: justify;">
                                            <?php echo $value1->descriptionEn; ?></h3>
                                    </strong>


                                    <br><a href="product.php?id=<?php echo $value1->id; ?>"><button
                                            style="background-color: #0084B3;">Read More</button></a>
                                </div>
                            </p>
                        </div>
                    
                    
                    <?php } elseif ($count % 2 == 0) {?>
                    <div data-aos="fade-right" class="one_half ">
                        <div class="">
                            <h1 class="">
                                <span class=""
                                    style="color:#0084B3;font-weight: bold"><?php echo $value1->nameEn; ?></span>
                            </h1>
                        </div>
                        <p class="size-10 textcenter">
                            <div class="d-inline-block other-info">
                                <strong>

                                    <h3 style="font-size:19px !important; text-align: justify;">
                                        <?php echo $value1->descriptionEn; ?></h3>
                                </strong>


                                <br><a href="product.php?id=<?php echo $value1->id; ?>"><button
                                        style="background-color: #0084B3;">Read More</button></a>
                            </div>
                        </p>
                    </div>

                    <div data-aos="fade-left" class="one_half last"
                        style="background: url(images/bbb_l.jpg); background-size: contain; background-repeat: no-repeat;">
                        <figure>
                            <img style="margin-left: 15%" src="<?php echo UPLOADS . $value1->image; ?>">
                        </figure>
                    </div>
                    <?php }?>
                </div>
                <div class="divider thin" style="border-color:#eeeeee;margin:20px 0;"></div>
                <?php }
                        if($count == 0){ ?>
                <div class="textcenter">
                    <h2 style="margin-bottom: 160px"> No Products available</h2>
                </div>
                <?php }
                        ?>
        </div>
        <!-- <div class="demo_space" style="height:20px"></div> -->
    </div>
    <!-- .entry-content-wrapper-->
    </main>
</div>
<!--inner-->
</div>
<!--.pagemid-section-->
<div class="sticky-stopper"></div>
</div>
<!--.main-->
<?php include "includes/website_footer.php";?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sigma_product-image">
                            <img class="img" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-detail-content mt-5 mt-lg-0">
                            <h2 class="product-title m-0 nameEn"></h2>
                            <br>
                            <div class="shop-detail-inner">
                                <div class="availability-box">
                                    <div class="d-inline-block other-info">
                                        <h6 class="bestBefore"></h6>
                                        <h6 class="package"></h6>
                                        <h6 class="posolgy"></h6>
                                        <h6 class="usage"></h6>
                                        <h6 class="productionPlace"></h6>
                                        <h6 class="storageCondition"></h6>
                                    </div>
                                </div>
                                <div class="short-descr">
                                    <p class="description"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click', '.flat', function () {
            var id = $(this).attr('id');
            // alert (id);
            if (id == 'btn1') {
                $('#click1').css('display', 'block');
                $('#click2').css('display', 'none');
                $('#click3').css('display', 'none');
                $('#click4').css('display', 'none');

            } else if (id == 'btn2') {
                $('#click1').css('display', 'none');
                $('#click2').css('display', 'block');
                $('#click3').css('display', 'none');
                $('#click4').css('display', 'none');

            } else if (id == 'btn3') {
                $('#click1').css('display', 'none');
                $('#click2').css('display', 'none');
                $('#click3').css('display', 'block');
                $('#click4').css('display', 'none');

            } else if (id == 'btn4') {
                $('#click1').css('display', 'none');
                $('#click2').css('display', 'none');
                $('#click3').css('display', 'none');
                $('#click4').css('display', 'block');

            } else {
                $('#click1').css('display', 'block');
                $('#click2').css('display', 'none');
                $('#click3').css('display', 'none');
                $('#click4').css('display', 'none');
            }
            // $.ajax({
            //     url: "includes/fetch_record_data.php",
            //     method: "POST",
            //     data: {
            //         id: id,
            //         type: 'List',
            //         Table: 'product'
            //     },
            //     dataType: "json",
            //     success: function (data) {
            //         $('.img').attr('src', 'uploads/' + data.image);
            //         $('.nameEn').html(data.nameEn);
            //         $('.bestBefore').html('Best Before: ' + data.bestBeforeEn);
            //         $('.package').html('Package: ' + data.packageEn);
            //         $('.posolgy').html('Posolgy: ' + data.posolgyEn);
            //         $('.usage').html('Usage: ' + data.usageEn);
            //         $('.productionPlace').html('Production Place: ' + data
            //             .productionPlaceEn);
            //         $('.storageCondition').html('Storage Condition: ' + data
            //             .storageConditionEn);
            //         $('.description').html('Description: ' + data.descriptionEn);
            //         // $('.description_ar').val(data.descriptionAr);
            //     }
            // });
        });
    });
</script>