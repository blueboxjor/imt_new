<?php include("includes/website_header.php"); ?>

<section id="featured_slider" class="clearfix">
	<div class="slider_wrapper">
		<div class="flexslider " id="overlay">
			<ul class="slides">
				<?php 
				$row = TableList('banner');
				foreach($row as $value){
				?>
				<li>
					<div class="dark-img">
						<img alt="Evaluation of the Current Safety" src="<?php echo UPLOADS.$value->image; ?>">
					</div>
					<div class="flex-caption fs-left flex-caption-anim ">
						<div class="flex-caption-inner">
							<div class="flex-title">
								<h2><?php echo $value->titleEn; ?></h2>
								<div class="flex-content"><?php echo $value->descriptionEn; ?></div>
							</div><!-- .flex-title -->
						</div><!-- .flex-caption-inner -->
					</div><!-- .flex-caption -->
				</li>
				<?php } ?>
			</ul>
			<ul class="flex-direction-nav">
				<li><a class="flex-prev" href="#"> </a></li>
				<li><a class="flex-next" href="#"> </a></li>
			</ul>
		</div><!-- .flexslider -->
	</div><!-- .flexslider_wrap -->
</section><!-- #featured_slider -->

<div id="main" class="content-area">
	<div class="section_row clearfix">
		<div class="section_inner">
			<div class="about-container one_half" data-aos="fade-right">
				<div class="about-caption textcenter">
					<h1>About us</h1><br>
					<p class="size-20" style="text-align: justify;">
						<?php echo get_column('company_information','welcomeEn',1) ?></p>
					<br><a href="about-us.php"><button style="background-color: #0084B3;">Read More</button></a>
				</div>
			</div>
			<div class="one_half last" style="width: 49%;" data-aos="fade-left">
				<figure>
					<img src="<?php echo IMAGES ."about.png"; ?>" style="width:550px; height:auto; float:right;" alt="">
				</figure>
			</div>
			<div class="fullwidth" style="margin-top: 100px;" data-aos="fade-down">
				<h1>Products Therapeutic Areas</h1><br>

				<div class="row">
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
					<div class="col-md-3 newMaxHeight">
						<div class="at-icon-box-v1  ">

							<a class="at-icon__main-v1 zoom" href="categories.php?id=<?php echo $value->id;?>"><i><img style="width: 50%;"
										src="<?php echo UPLOADS.$value->image; ?>"></i>
								<h3><?php echo $value->titleEn; ?></h3>
								<p><?php echo $value->descriptionEn; ?></p>
								<div class="at-icon__bgimg" style="background-image: url(images/bg-business.jpg);">
								</div>
								<div class="at-icon__bgimg"></div>
								<span class="at-icon__border"></span>
							</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div><!-- .section_inner -->
	</div><!-- section_row -->
	<div class="fullwidth">
		<img src="images/15-years.png" alt="">
	</div>
	<div class="section_row clearfix col-12" style="display: none;">
		<div class="section_inner">
			<div style="width: 220px;">
				<h4>Our Products</h4>
				<hr class="new5" style="width: 150px;">
				<br>
			</div>
			<div>
				<?php 
					$rows = TableList('product','DESC','LIMIT 8');
					foreach ($rows as $values) { ?>
				<div class="card-product one_fourth" href="#">
					<a href="product.php?id=<?php echo $values->id; ?>">
						<div class="img-mask">
							<img src="<?php echo UPLOADS . $values->image ?>" alt="">
						</div>

						<div class="card-content">
							<div class="card-header">
								<h2 class="title"><?php echo $values->nameEn ?></h2>

							</div>
							<p class="description"><?php echo $values->descriptionEn ?></p>
						</div>
					</a>
				</div>

				<?php }
				?>
			</div>
		</div>
	</div>
	<div class="section_row clearfix">
		<div class="section_inner">
			<div style="width: 220px;">
				<h4>Milestone</h4>
				<hr class="new5" style="width: 110px;">
				<br>
			</div>
			<div class="fullwidth">
				<img data-aos="fade-left"  data-aos-duration="1000" src="images/2001.jpg" alt="">


				<!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
					viewBox="0 0 1863 840">
					<image width="1863" height="840" xlink:href="images/milestone.png"></image> <a data-toggle="modal"
						data-target="#modal-milestone-2019" id="2019">
						<rect x="558" y="19" fill="#fff" opacity="0" width="304" height="150"></rect>
					</a><a data-toggle="modal" data-target="#modal-milestone-2022" id="2022">
						<rect x="0" y="5" fill="#fff" opacity="0" width="342" height="161"></rect>
					</a><a data-toggle="modal" data-target="#modal-milestone-2007" id="2007">
						<rect x="1399" y="521" fill="#fff" opacity="0" width="282" height="150"></rect>
					</a><a data-toggle="modal" data-target="#modal-milestone-2008" id="2008">
						<rect x="1164" y="281" fill="#fff" opacity="0" width="312" height="148"></rect>
					</a><a data-toggle="modal" data-target="#modal-milestone-2017" id="2017">
						<rect x="805" y="243" fill="#fff" opacity="0" width="241" height="121"></rect>
					</a>
				</svg> -->
			</div>
		</div>
	</div>
</div><!-- #main.content-area-->
<!-- banner -->
<div class="modal fade" id="modal-milestone-2007" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/biosensors.png" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center">Biosensors (Switzerland) - 2007</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">

					<div class="col-sm-12 ">

						<button data-dismiss="modal" aria-label="Close"
							class="btn btn-text medium red flat"><?php echo $StringArray[17];?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-milestone-2008" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/vita.png" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center">Vita Range (USA) - 2008</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">

					<div class="col-sm-12 ">

						<button data-dismiss="modal" aria-label="Close"
							class="btn btn-text medium red flat"><?php echo $StringArray[17];?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-milestone-2017" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/erbozeta.jpg" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center">Erbozeta (Italy) - 2017</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">

					<div class="col-sm-12 ">

						<button data-dismiss="modal" aria-label="Close"
							class="btn btn-text medium red flat"><?php echo $StringArray[17];?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-milestone-2019" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/download.png" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center">PharmIdea SIA (Latvia) - 2019</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">

					<div class="col-sm-12 ">

						<button data-dismiss="modal" aria-label="Close"
							class="btn btn-text medium red flat"><?php echo $StringArray[17];?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-milestone-2022" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/Kiomed.jpeg" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center"> Kiomed Pharma (Belgium) - 2022</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/remecure.jpg" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center"> RemeCure (Denmark) - 2022</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/RJ.jpg" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center"> RJ (Spain) - 2022</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">
					<div class=" col-md-12 xs-padding">
						<div class="about-inner-bg">
							<img src="images/PharmIdea.png" alt="img">
						</div>
					</div>
					<div class=" col-md-12 xs-padding">
						<br>
						<h3 class="text-center"> IDI (Italy) - 2022</h3>
						
					</div>
				</div>
				<div class="divider  fat" style="border-color:#cccccc;margin:30px 0;"></div>
				<div class="row">

					<div class="col-sm-12 ">

						<button data-dismiss="modal" aria-label="Close"
							class="btn btn-text medium red flat"><?php echo $StringArray[17];?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<div class="modal fade" id="modal-milestone-2025" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 xs-padding">
                        <div class="about-inner-bg">
                            <img src="IMT - MILESTONE_pages-to-jpg-0001(7).png" alt="img">
                        </div>
                    </div>

                    <div class="col-md-12 xs-padding">
                        <br>
                        <h3 class="text-center">Medical Inventi (Italy) - 2025</h3>
                    </div>
                </div>

                <div class="divider fat" style="border-color:#cccccc;margin:30px 0;"></div>

                <div class="row">
                    <div class="col-sm-12 ">
                        <button data-dismiss="modal" aria-label="Close"
                            class="btn btn-text medium red flat">
                            <?php echo $StringArray[17];?>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include("includes/website_footer.php"); ?>