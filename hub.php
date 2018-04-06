<?php
	include 'assets/my_user.php';
	include "partials/head.php";

	$sql = "SELECT * FROM users WHERE id = '".$_SESSION["ss_usr_id"]."'";
	// var_dump($ql);
	$arrFoundUSer = getRecord($sql);
	// var_dump($arrFoundUSer);

	$hubId = $_COOKIE['id'];
	var_dump($hubId);
	$hubDetails = "SELECT *	FROM hubs WHERE id= '".$hubId."'";
	$arrHubDetails = getRecord($hubDetails);

	// var_dump($arrHubDetails['strName']);
?>
<!-- Gosia, 03.31.2018: previous file name: index.php -->

<!-- REGISTER HEADER -->
	<header class="register-header">
		<div class="top-nav">
			<div class="logo-nav">
				<!-- LOGO IMAGE -->
				<img src="img/logo.png" class="logo" alt="logo" class="img-fluid">
			<!-- PAGE HEADING -->
				<h1 class="hub-heading">HEARTHPOD</h1>
			</div>
			<div class="logout-nav">
				<h1 class="admin-heading">Hello <?=""?></h1>
				<!-- SIGN IN BUTTON -->
				<a href="login.php" class="signin-btn">LOGOUT</a>
			</div>
		</div>
		<!-- <input type="submit" name="sign-in" class="signin-btn login-btn" value="Logout"> -->
		<!-- NAV-BAR-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    	<div class="navbar-nav">
		      		<a class="nav-item nav-link active" href="#">Info <span class="sr-only">(current)</span></a>
		      		<a class="nav-item nav-link" href="#">Members</a>
		      		<a class="nav-item nav-link" href="#">Current</a>
		      		<a class="nav-item nav-link disabled" href="#">Memories</a>
		    	</div>
		  	</div>
		</nav>
	</header>
<!-- MAIN SECTION -->
	<main>
		<section class="cover-pic">
			<div class="bg"></div>
			<h1>
				<?=$arrHubDetails['strName'];?>
			</h1>
		</section>
		<section>
			<article class="col-md-3">
				<div class="side-article ">
					<!-- Gosia, 03.31.2018: added enctype part and changed action source -->
					<form action="actions/content_save.php" method="POST" enctype="multipart/form-data">
						<h3>Add new photo</h3>
						<input type="number" class="hidden" name="nUserID" value="<?=$arrFoundUSer['id']?>">
						<input type="number" class="hidden" name="nHubID" value="<?=$hubId?>">
						<input type="number" class="hidden" name="strHubName" value="<?=$arrHubDetails['strName']?>">

					  	<div class="custom-file">
					  		<label for="customFile">Upload Picture: </label>
						  	<input type="file" class="form-control-file" id="customFile" name="pic-upload">
						  	<br>
						</div><br>
						<div class="form-group">
					    	<label for="photTitle">Title</label>
					    	<input type="text" class="form-control" id="photTitle" name="pic-title" placeholder="Title">
					  	</div>
					  	<div class="form-group">
					    	<label for="photoDdescripton">Description</label>
								<!-- Gosia, 03.31.2018: fixed misspelled id value -->
					    	<textarea class="form-control" id="photoDescription" rows="3" name="pic-description" placeholder="Description"></textarea>
					  	</div>
		        		<input type="submit" class="btn btn-lg signin-btn" value="POST NOW">

					</form>
				</div>
			</article>
			<article class="col-md-6">
				<!-- Gosia, 03.31.2018: added php code - could be moved to a separate folder, but I wanted to make it easier for front-end changes for now-->
				<?php
					$nHubID = $hubId;
					// $db = mysqli_connect('192.185.103.171', 'ashleyms_admin', 'web13', 'ashleyms_familyHub');
					$sql = "SELECT strMedia, strTitle, strDescription FROM content WHERE nHubID = '".$nHubID."' ORDER BY `id` DESC";
					$queryResult = getRecords($sql);
					// var_dump($queryResult);
					// die();
					if($queryResult) {
						foreach ($queryResult as $key => $value) {
							$img = $queryResult[$key]["strMedia"];
							$title = $queryResult[$key]["strTitle"];
							$description = $queryResult[$key]["strDescription"];
							echo "<div class='card'><img src='img/content/".$img."' alt='".$img."'>
									<h2>".$title."</h2>
									<p>".$description."</p>
									<p> mm/dd/yyyy</p>
								</div><br>";
						}
					}
					else {
						echo "<p>There is no content yet - try adding something using the form on the left! :)</p>";
					}
				?>
			</article>
			<article class="col-md-3">
				<div class="side-article">
					<h3>Family Members</h3>
					<div class="row">
						<div class="col-md-6 member"><img src="img/member1.jpg"></div>
						<div class="col-md-6 member"><img src="img/member1.jpg"></div>
					</div>
					<div class="row">
						<div class="col-md-6 member"><img src="img/member1.jpg"></div>
						<div class="col-md-6 member"><img src="img/member1.jpg"></div>
					</div>
				</div>
			</article>
		</section>
	</main>
