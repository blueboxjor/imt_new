<?php include("../includes/header.php"); ?>

<!-- [ breadcrumb ] end -->
<!-- [ Main Content ] start -->
<div class="row">
            <div class="col-md-12 col-xl-6 product_section" >
                <a href ="product.php">
                <div class="card bg-c-red order-card">
                    <div class="card-body">
                       <h6 class="f-22 text-white"><?php echo $StringArray[5]. ' Section'; ?></h6>
                        <h2 class="text-white">&nbsp;</h2>
                        <i class="card-icon fas fa-building"></i>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-6 business_section" >
                <a href ="business.php">
                <div class="card bg-c-purple order-card">
                    <div class="card-body">
                        <h6 class="f-22 text-white"><?php echo $StringArray[4]. ' Section'; ?></h6>
                        <h2 class="text-white">&nbsp;</h2>
                        <i class="card-icon feather icon-users"></i>
                    </div>
                </div>
                </a>
            </div>
           
          
        </div>
<div class="row">
    <div class="col-sm-12">
    <div class="card quick_access_dashboard_section"  >
             <div class="card-header">
                    <h3>Quick Access</h3>
             </div>
            <div class="card-body">
                
                 <div class="row">
                    <div class="col-md-12 col-xl-12">
                         <button  class="pd-r-l btn add_user_section btn-primary btn-lg btn-round has-ripple add_click" 
                         data-toggle="modal" data-target="#modal-user">
                         <i class="feather icon-plus"></i>
                         <?php echo $StringArray[9].' User';?>
                         </button>
                         <button  class="pd-r-l btn add_category_section btn-primary 
                 btn-lg btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-category">
                <i class="feather icon-plus"></i><?php echo $StringArray[9].' Category';?></button>
                
                <button class="pd-r-l btn add_business_section btn-primary btn-lg btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-business">
                <i class="feather icon-plus"></i><?php echo $StringArray[9].' Business';?></button>
                <button class="pd-r-l btn add_product_section btn-primary btn-lg btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-product">
                <i class="feather icon-plus"></i><?php echo $StringArray[9].' Product';?></button>
                <button class="pd-r-l btn add_banner_section btn-primary btn-lg btn-round has-ripple add_click" 
                data-toggle="modal" data-target="#modal-banner">
                <i class="feather icon-plus"></i><?php echo $StringArray[9].' Banner';?></button>
                    </div>
                </div>
            </div>
        </div>
  
    </div>
    
</div>
<!-- [ Main Content ] end -->

<?php include("../includes/footer.php"); ?>
<script src="<?php echo ASSETS; ?>js/pages/chart-chart-custom.js"></script>