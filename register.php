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
		<!-- <input type="button" name="sign-in" class="signin-btn" value="Sign In"> -->
		<!-- <br /><a href="login.php" title="Login">LOGIN</a> -->

		<div class="top-nav">
			<div class="logo-nav">
				<!-- LOGO IMAGE -->
				<img src="img/logo.png" class="logo" alt="logo" class="img-fluid">
			<!-- PAGE HEADING -->
				<h1 class="hub-heading">HEARTHPOD</h1>
			</div>
			<div class="logout-nav">
				<!-- SIGN IN BUTTON -->
				<a href="login.php" class="signin-btn">LOGIN</a>
			</div>
		</div>
	</header>
<!-- MAIN SECTION -->
	<main>
	<!-- REGISTER SECTION -->
		<section class="container">
			<div class="row">
			<!-- REGISTER FORM -->
				<article class="col-md-6">
					<form action="actions/register_process.php" method="POST" class="form-register">
					<!-- FORM HEADING -->
						<h3 class="register-heading"> CREATE ACCOUNT </h3>
					<!-- USER NAME -->
				        <div class="form-group">
							<label for="user" class="lblField">NAME</label>
							<input class="form-control input-login" type="text" id="user" name="strName" placeholder="Name">
				        </div>
				    <!-- EMAIL -->
				        <div class="form-group">
							<label for="user" class="lblField">EMAIL</label>
							<input class="form-control input-login" type="text" id="user" name="strEmail" placeholder="Email">
				        </div>
				    <!-- PASSWORD -->
				        <div class="form-group">
							<label for="user" class="lblField">PASSWORD</label>
							<input class="form-control input-login" type="password" id="user" name="strPassword" placeholder="Password">
				        </div>
				    <!-- SUBMIT BUTTON -->
		        		<input type="submit" name="sign-in" class="register-btn" value="Register">
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
