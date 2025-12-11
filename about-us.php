<?php include("includes/website_header.php"); ?>

<!-- #subheader-->
<div id="main" class="content-area">
    <div id="primary" class="pagemid">
        <div class="section_row" style="padding:0;">
            <div class="section_inner flex-title">
                <!-- greeting -->
                <div data-aos="fade-left">
                    <div class="about-container one_half">
                        <div class="about-caption" style="text-align: left; padding-left: 100px">
                            <h1>Greetings</h1><br>
                            <p class=" justify-content  ">
                                <?php echo get_column('company_information','aboutUsEn',1) ?></p>
                        </div>

                    </div>
                    <div class="one_half last">
                        <figure>
                            <img src="<?php echo IMAGES ."greetingO.jpg"; ?>" style="width:1100px;" alt="">
                        </figure>
                    </div>
                </div>
                <div class="" style="height:50px;"></div>

                <!-- vision -->
                <div data-aos="fade-right">
                    <div class="one_half last">
                        <figure>
                            <img src="<?php echo IMAGES ."visionO.jpg"; ?>"
                                style="width:1100px ; float:left; margin-left: 50px" alt="">
                        </figure>
                    </div>
                    <div class="one_half about-container">
                        <div class="about-caption" style="text-align: left; margin-left: 80px;">
                            <h1>Our Vision</h1><br>
                            <p class=" justify-content  fontSize"><?php echo get_column('company_information','visionEn',1) ?></p>
                        </div>
                    </div>
                </div>
                <div class="" style="height:50px;"></div>

                <!-- mission -->
                <div data-aos="fade-left">
                    <div class="about-container one_half">
                        <div class="about-caption" style="text-align: left; padding-left: 100px">
                            <h1>Our Mission</h1><br>
                            <p class=" justify-content  fontSize"><?php echo get_column('company_information','missionEn',1) ?></p>
                        </div>
                    </div>
                    <div class="one_half last">
                        <figure>
                            <img src="<?php echo IMAGES ."missionO.jpg"; ?>" style="width:1100px;" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <!-- .section_inner-->
        </div>
        <!-- .section_row-->
        <div class="clear"></div>
        <div class="" style="height:80px;"></div>

    </div>
    <!-- #primary-->
</div>
<!-- #main-->
<?php include("includes/website_footer.php"); ?>