<?php 

include("top_header.php");

if(!isset($_SESSION['IsLogin'])){
  header('location:login.php');
}
$sql="Select * from users where id='".$_SESSION['id']."'";
$UserInfo=get_record($sql);
                            
?>
<style type="text/css">
.table td,
.table th {
        white-space: unset !important;
    }
</style>
<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light menu_section" >
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">
                <div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo UPLOADS.$UserInfo['ProfilePic']?>" alt="" />
						<div class="user-details">
							<a href="profile.php"><div id="more-details"><?php echo $UserInfo['Name']?></div></a>
						</div>
					</div>
				</div>
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <hr>
                    </li>
                    <li class="dashboard_section nav-item" >
                    	<a href="<?php echo Root . "homepage.php"; ?>" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[0]; ?></span>
                        </a>
                    </li>
                    <li class="user_section nav-item" >
                    	<a href="users.php" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas fa-users"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[1]; ?></span>
                        </a>
                    </li>
                    <li class="business_section nav-item" >
                    	<a href="business.php" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas fa-business-time"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[7]; ?></span>
                        </a>
                    </li>
                    
                    <!-- <li class="category_section nav-item" >
                    	<a href="category.php" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas feather icon-circle"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[7]; ?></span>
                        </a>
                    </li> -->
                    <li class="product_section nav-item" >
                    	<a href="product.php" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas fa-list"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[5]; ?></span>
                        </a>
                    </li>
                    <li class="banner_section nav-item" >
                    	<a href="banner.php" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas fa-image"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[52]; ?></span>
                        </a>
                    </li>
                 
                  

                    <li class="information_section nav-item" >
                    	<a href="company_information.php" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas fa-building"></i></span>
                        <span class="pcoded-mtext"><?php echo $StringArray[8]; ?></span>
                        </a>
                    </li>
                   
             
              
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <img src="../images/logo.png" class="img-radius" style="height:60px;width:60px;" alt="" class="logo" />
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a href="profile.php">
                        <i class="feather icon-user"></i><?php echo $StringArray[2];?>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="feather icon-power"></i><?php echo $StringArray[3];?>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10"><?php echo $StringArray[0];?></h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="./"><i class="feather icon-home"></i></a></li>
                                                <?php echo breadcrumb(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>