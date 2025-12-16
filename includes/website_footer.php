<div id="footer">
	<div class="footer-area-middle">
		<div class="inner">
			<div class="inner-row">
				<aside id="text-4" class="whitetext widget widget_text  col_4">

					<div class="textwidget">
						<p><img src="<?php echo IMAGES .  '2.png'; ?>" height="100px"
								alt="Biocare"></p>
						<!-- <h5>Committed to Excellence</h5> -->
					</div>
				</aside>
				<!-- <aside id="nav_menu-6" class="widget widget_nav_menu  col_2">
					<h3 class="widget-title">Social Links</h3>
					<div class="contactinfo-wrap">
						<p><span class="icon fa fa-facebook fa-lg"></span>
							<a target="_blank" href="<?php echo get_column('company_information', 'facebook', 1) ?>"><span
									class="details">Facebook</span>
							</a>
						</p>
						<p><span class="icon fa fa-facebook fa-lg"></span>
							<a target="_blank" href="<?php echo get_column('company_information', 'facebook2', 1) ?>"><span
									class="details">Facebook</span>
							</a>
						</p>
						<p>
							<span class="icon fa fa-instagram fa-lg"></span>
							<a target="_blank"
								href="<?php echo get_column('company_information', 'instagram', 1) ?>"><span
									class="details">Instagram</span></a>
							</a>
						</p>
					</div>
				</aside> -->

				<aside id="contactinfo_widgets-2" class="widget contactinfo-wg  col_3">
					<h3 class="widget-title">Contact Us</h3>
					<div class="contactinfo-wrap">
						<!-- <p><span class="icon fa fa-location-arrow fa-lg"></span>
							<span class="details"><?php echo get_column('company_information', 'locationEn', 1) ?></span>
						</p>
						<p class="phone">
							<span class="icon fa fa-phone fa-lg"></span>
							<span class="details"><?php echo get_column('company_information', 'phone', 1) ?></span>
						</p>
						<p class="fax">
							<span class="icon fa fa-fax fa-lg"></span>
							<span class="details"><?php echo get_column('company_information', 'fax', 1) ?></span>
						</p>
						<p>
							<span class="icon fa fa-map-marker fa-lg"></span>
							<span class="details"><a class="more-link" target="_blank"
									href="https://www.google.com/maps/place/Rakez+AlHamra+Industrial+Zone/@25.6862354,55.7984085,17z/data=!3m1!4b1!4m5!3m4!1s0x3ef60a61412b1615:0x8382e57f1d189185!8m2!3d25.6862354!4d55.7984085">View
									Map</a></span>
						</p>
						<br><br> -->
						<p><span class="icon fa fa-location-arrow fa-lg"></span>
							<span class="details">Sharjah Media City, Sharjah, UAE</span>
						</p>
						<p class="phone">
							<span class="icon fa fa-phone fa-lg"></span>
							<span class="details">+9627 9552 6998</span>
						</p>
						<p class="phone">
							<span class="icon fa fa-envelope fa-lg"></span>
							<span class="details">customerservice@biocareltd.com</span>
						</p>
					</div>
				</aside>
				<aside id="nav_menu-5" class="widget widget_nav_menu  col_3">
					<h3 class="widget-title">Find us</h3>
					<div class="menu-footer-one-container">
						<img src="<?php echo IMAGES .  'World_Map.png'; ?>" usemap="#image-map">

						<map name="image-map">
							<area target="_blank" alt="IMT-MKT" title="biocare" href="https://maps.app.goo.gl/JGN2ebKgnFbNNaHz6" coords="5,5,856,409" shape="rect">
						</map>
					</div>
				</aside>
			</div><!-- inner-row -->
		</div><!-- inner -->
	</div><!-- .footer-area-middle-->
	<div class="footer-area-bottom">
		<div class="inner">
			<aside id="text-7" class="textcenter widget widget_text">
				<div class="textwidget">
					All Rights Reserved <span>&copy;&nbsp;</span>2025. Developed By <a target="_blank"
						href="https://blueboxjo.net/"><span>BLUEBOX</span></a>
				</div>
			</aside>
		</div>
	</div>
</div><!-- #footer -->
</div><!-- #wrapper-->
<div id="back-top"><a href="#header" title="Scroll Top"><span class="fa fa-angle-up fa-fw fa-2x"></span></a></div>
</body>

</html>
<script type="text/javascript">
	var url = document.location.href.match(/[^\/]+$/)[0];
	var page = url.substring(0, url.length - 4); // Returns "ell"

	if (page == 'index') {
		$('.' + page).addClass('current-menu-item');

	} else {
		$('.' + page).addClass('current-menu-item');
		$('.index').removeClass('current-menu-item');
	}
</script>

<script>
	AOS.init();
</script>