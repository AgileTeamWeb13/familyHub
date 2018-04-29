<?php
include 'assets/my_user.php';
include "partials/head.php";
?>
<!-- REGISTER HEADER -->
	<header class="register-header">
		<div class="top-nav">
			<div class="logo-nav">
				<!-- LOGO IMAGE -->
				<img src="img/logo.png" class="logo" alt="logo" class="img-fluid">
			</div>
			<div class="logout-nav">
				<!-- SIGN OUT BUTTON -->
				<a href="actions/logout_process.php" class="signin-btn">LOGOUT</a>
			</div>
		</div>
	</header>
<!-- MAIN SECTION -->
	<main>
	<!-- REGISTER SECTION -->
		<section class="container">
			<div class="row">
			<!-- HUB FORM -->
				<article class="col-md-6 create-hub">
					<form action="actions/create_hub_process.php" method="POST" class="form-login">
					<!-- FORM HEADING -->
						<h3 class="register-heading"> CREATE HUB </h3>
				    <!-- HUB NAME -->
				        <div class="form-group">
							<label for="user" class="lblField">Hub Name</label>
							<input class="form-control input-login" type="text" id="user" name="strName" placeholder="Email">
				        </div>
				    <!-- HUB DESCRIPTION -->
				        <div class="form-group">
							<label for="user" class="lblField">Hub Description</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" name="strDescription" class="hub-desc"></textarea>
				        </div>
				    <!-- SUBMIT BUTTON -->
		        		<input type="submit" name="sign-in" class="hub-btn login-btn" value="Create Hub">
		    			<a href="myHubs.php" class="hub-cancel"> Cancel </a>
					</form>
				</article>
			<!-- REGISTER IMAGE -->
				<article class="col-md-6">
					<div class="register-image text-center">
						<img src="img/hub-register.jpg" alt="register-image" class="img-fluid register-imgsize">
					<div>
				</article>
			</div>
		</section>
	</main>
<!-- END OF MAIN SECTION -->
<?php include "partials/footer.php" ?>
<!-- EXTERNAL FOOTER -->
