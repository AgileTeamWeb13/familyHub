<?php include "partials/head.php" ?>
<!-- REGISTER HEADER -->
	<header class="register-header">
		<div class="top-nav">
			<div class="logo-nav">
				<!-- LOGO IMAGE -->
				<img src="img/logo.png" class="logo" alt="logo" class="img-fluid">
			</div>
			<div class="logout-nav">
				<!-- REGISTER BUTTON -->
				<a href="register.php" class="signin-btn">REGISTER</a>
			</div>
		</div>
	</header>
<!-- MAIN SECTION -->
	<main>
	<!-- LOGIN SECTION -->
		<section class="container">
			<div class="row">
			<!-- LOGIN FORM -->
				<article class="col-md-6 panel">
					<form action="actions/login_process.php" method="POST" class="form-login">
					<!-- FORM HEADING -->
						<a href="register.php" class="create-account">Or Create An Account</a>
						<h3 class="login-heading"> LOGIN </h3>

				    <!-- EMAIL -->
				        <div class="form-group">
							<label for="user" class="lblField">EMAIL</label>
							<input class="form-control input-login" type="email" id="user" name="strEmail" placeholder="Email">
				        </div>
				    <!-- PASSWORD -->
				        <div class="form-group">
							<label for="user" class="lblField">PASSWORD</label>
							<input class="form-control input-login" type="password" id="password" name="strPassword" placeholder="Password">
				        </div>
				    <!-- SUBMIT BUTTON -->
	        			<input type="submit" name="sign-in" class="register-btn login-btn" value="Sign In">

	        			<?php
							if (isset($_GET["error"]))
							{
							    echo "<br/><p class='error-msg'>**Invalid Username/Password</p>";
							}
						?>
					</form>
					
				</article>
			<!-- REGISTER IMAGE -->
				<article class="col-md-6">
					<div class="register-image text-center">
						<img src="img/illustration.jpg" alt="register-image" class="img-fluid register-imgsize">
					<div>
				</article>
			</div>
		</section>
	</main>
<!-- END OF MAIN SECTION -->
<?php include "partials/footer.php" ?>
<!-- EXTERNAL FOOTER -->
