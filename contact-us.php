<?php include("includes/website_header.php"); ?>
<div id="" class="">
    <img src="<?php echo IMAGES?>contact_us_banner.jpg" alt="">
</div>
<!-- #subheader-->
<div id="main">
    <div id="primary" class="pagemid">
        <div class="inner">
            <main class="content-area">
                <div class="entry-content-wrapper row">

                    <div style="width: 100%; height: auto;">
                        <h3 class="fancy-title">
                            <span style="color:#444444; font-size: 40px;"><img
                                    src="<?php echo IMAGES?>contact_us.png"></span>
                        </h3>
                    </div>

                    <div class="col-7" style="padding: 40px 0">
                        <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-map-marker"></i>
                            </div>
                            <div class="one_half">
                                <h4 style="color: #757575;" class="">Address</h4>

                                <h6 style="color: #757575;">
                                    <?php echo get_column('company_information','locationEn',1) ?></h6>
                            </div>
                        </div>
                        <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-clock-o"></i>
                            </div>
                            <div class="one_half">
                                <h4 style="color: #757575;" class="">Working Hours</h4>

                                <h6 style="color: #757575;">Monday - Friday - 9:00 - 16:00</h6>
                            </div>
                        </div>
                        <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-phone"></i>
                            </div>

                            <div class="one_half">
                                <h4 style="color: #757575;" class="one_half">Phone</h4>

                                <h6 style="color: #757575;"><?php echo get_column('company_information','phone',1) ?>
                                </h6>
                            </div>

                        </div>
                        <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-envelope-o"></i>
                            </div>
                            <div class="one_half">
                                <h4 style="color: #757575;" class="one_half">Email</h4>
                                <h6 style="color: #757575;"><?php echo get_column('company_information','email',1) ?>
                                </h6>
                            </div>
                        </div>


                        <div class="clear"></div>
                    </div>

                    <div class="col-5">
                        <div class="" style="margin-left: -25px">
                            <div class="section-inner clearfix">
                                <div id="form" data-ng-controller="formController">
                                    <?php 
                                            if(isset($_SESSION['email']) &&  isset($_SESSION['email'])==1){
                                            ?>

                                    <div id="messages" class="well" data-ng-show="messages">
                                        <div class="iva_message_box success iva-box-solid iva-box-large clearfix">
                                            <div class="iva_message_box_content">Thank you for contacting with us we
                                                will replay soon!</div>
                                        </div>
                                    </div>
                                    <?php } 
                                            unset($_SESSION['email']);
                                            ?>



                                    <form action="<?php echo ACTIONS . "email.php"?>" autocomplete="off" method="post"
                                        name="c_form" novalidate="">
                                        <p class="inputbox"><input type="text" name="name" placeholder="Name"
                                                data-ng-model='name' required=""></p>
                                        <p class="inputbox"><input type="email" name="email" placeholder="Email"
                                                data-ng-model="email" required="">

                                        </p>
                                        <p class="inputbox"><input type="text" name="subject" size="40"
                                                placeholder="Subject" data-ng-model="subject" required="">
                                        </p>
                                        <p class=""><textarea name="message" cols="40" rows="10" data-ng-model="message"
                                                placeholder="Message"></textarea></p>
                                        <p class="inputbox"><input type="submit" value="SEND MESSAGE"></p>
                                    </form>

                                </div>
                                <!--form-->

                            </div>


                        </div>

                        <!-- <div class="one_third last ct-office">

                                    <div class="fancyheading left">
                                        <h3 class="fancy-title">
                                            <span style="color:#444444;"><strong>OUR HEAD OFFICE</strong><small></small></span>
                                        </h3>
                                    </div>

                                    <h4 style="font-weight: 900;"><?php echo get_column('company_information','nameEn',1) ?></h4>
                                    <p>Committed to Excellence<br></p>

                                
                                    <div class="contactinfo-wrap">
                                        <p><i class="fa fa-map-marker fa-fw"></i> </i><?php echo get_column('company_information','locationEn',1) ?></p>
                                        <p><i class="fa fa-envelope fa-fw"></i></i><?php echo get_column('company_information','email',1) ?></p>
                                        <p><i class="fa fa-phone fa-fw"></i> </i><?php echo get_column('company_information','phone',1) ?></p>
                                    </div>

                                </div> -->
                    </div>
                    <br>
                    <h1 class="text-left">For adverse event and quality complaints reporting, kindly contact us through:</h1>
                    
                    <div class="col-12" style="padding: 40px 0">
                    <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-envelope-o"></i>
                            </div>
                            <div class="one_third">
                                <h4 style="color: #757575;" class="one_third">Email</h4>
                                <h6 style="color: #757575;">customerservice@biocareltd.com
                                </h6>
                            </div>
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-file"></i>
                            </div>
                            <div class="one_third">
                                <a target="_blank" href="<?php echo IMAGES ."ICSR-FORM.pdf"; ?>"><h4 style="color: #757575;" class="one_third">ICSR Form</h4></a>
                               
                            </div>
                        </div>


                        <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-phone"></i>
                            </div>

                            <div class="one_third ">
                                <h4 style="color: #757575;" class="one_half">Phone Number</h4>

                                <h6 style="color: #757575;">+9627 9552 6998
                                </h6>
                            </div>
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-file"></i>
                            </div>
                            <div class="one_third">
                                <a target="_blank" href="<?php echo IMAGES ."COMPLAINT-FORM.pdf"; ?>"><h4 style="color: #757575;" class="one_half">Complaint Form</h4></a>
                               
                            </div>
                        </div>
                        <div class="section_fullwidth">
                            <div class="one_sixth">
                                <i style="font-size:44px;color:#0084B3;" class="fa fa-phone"></i>
                            </div>

                            <div class="one_half">
                                <h4 style="color: #757575;" class="one_half">Whatsapp Number</h4>

                                <h6 style="color: #757575;">+9627 9552 6998
                                </h6>
                            </div>

                        </div>
                       
                       
                        <div class="clear"></div>
                    </div>
                    <!--.ct-section3-->
                </div>
                <!--entry-content-wrapper clearfix-->
            </main>
        </div>
        <!--inner-->
    </div>
    <!--.pagemid-->
</div>
<!--main-->
<?php include("includes/website_footer.php"); ?>