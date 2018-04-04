<?php include "partials/head.php" ?>
<!-- REGISTER HEADER -->
	<header class="register-header">
		<!-- <div class="header-items"> -->
		<!-- LOGO IMAGE -->
			<!-- <img src="img/logo.png" class="logo" alt="logo" class="img-fluid"> -->
		<!-- PAGE HEADING -->
			<!-- <h1 class="hub-heading">HEARTHPOD</h1>
		</div> -->
	<!-- SIGN IN BUTTON -->
		<!-- <input type="button" name="sign-in" class="signin-btn login-btn" value="Sign In"> -->
		<!-- <br/><a href="register.php" class="signin-btn" title="Register">REGISTER</a> -->

		<div class="top-nav">
			<div class="logo-nav">
				<!-- LOGO IMAGE -->
				<img src="img/logo.png" class="logo" alt="logo" class="img-fluid">
			<!-- PAGE HEADING -->
				<h1 class="hub-heading">HEARTHPOD</h1>
			</div>
			<div class="logout-nav">
				<!-- SIGN IN BUTTON -->
				<a href="register.php" class="signin-btn">REGISTER</a>
			</div>
		</div>
	</header>
<!-- MAIN SECTION -->
	<main>
	<!-- REGISTER SECTION -->
		<section class="container">
			<div class="row">
			<!-- LOGIN FORM -->
				<article class="col-md-6">
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
