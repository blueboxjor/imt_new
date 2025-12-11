<?php include('../includes/top_header.php'); 
if(isset($_SESSION['IsLogin'])){
	header('Location: homepage.php');
  }
?>
<div class="auth-wrapper aut-bg-img">
	<div class="auth-content">
		<div class="row align-items-center text-center">
			<div class="col-md-12">
				<?php show_messages(); ?>
				<div class="card user-card user-card-2 shape-center">
					<div class="card-header border-0 p-2 pb-0">
						<div class="cover-img-block">
							<img src="<?php echo IMAGES.'pills.jpg' ?>" alt="" class="img-fluid" />
						</div>
					</div>
					<div class="card-body pt-0">
						<div class="user-about-block text-center">
							<div class="row align-items-end">
								<div class="col">
									<div class="position-relative d-inline-block">
										<img class="WelcomeImage img-radius img-fluid wid-80" src="<?php echo IMAGES.'open1.png' ?>" alt="User image" />
									</div>
								</div>
							</div>
						</div>
						<form autocomplete="off" class="needs-validation" novalidate=""
						action="<?php echo ACTIONS;?>login.php" method="post">
						<div class="row text-center">
							<div class="col-md-12">
								<div class="form-group">
									<h5 class="text-primary"><?php echo $StringArray[43];?> </h5>
									<input type="text" name="phone" class="form-control"  required>
								</div>
							</div>
							<div class="col-md-12">
							    <div class="form-group">
									<h5 class="text-primary"><?php echo $StringArray[39];?></h5>
									<input type="password" class="PasswordField form-control" name="password"  required >
								</div>
							</div>
							<div class="col-md-12">
							     <input type="submit" name="submit" class="btn btn-grey btn-block" value="Login">
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->

<?php include('../includes/footer.php'); ?>