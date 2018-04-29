<?php
	include 'assets/my_user.php';
	include "partials/head.php";

	$sql = "SELECT * FROM users WHERE id = '".$_SESSION["ss_usr_id"]."'";
	// var_dump($ql);
	$arrFoundUSer = getRecord($sql);
	//var_dump($arrFoundUSer);

	$hubId = $_COOKIE['id'];
	//var_dump($hubId);
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
			</div>
			<div class="logout-nav">
				<img src="img/<?=""?>" />
				<h1 class="admin-heading">Hello <?=""?></h1>
				<!-- SIGN IN BUTTON -->
				<a href="login.php" class="signin-btn">LOGOUT</a>
			</div>
		</div>
	</header>
	
<!-- MAIN SECTION -->
	<main class="hubpg">
		<div class="side-article ">
			<!-- Gosia, 03.31.2018: added enctype part and changed action source -->
			<form action="actions/content_save.php" method="POST" enctype="multipart/form-data">
				<h3>Add new photo</h3>
				<input type="hidden" name="nUserID" value="<?=$arrFoundUSer['id']?>">
				<input type="hidden" name="nHubID" value="<?=$hubId?>">
				<input type="hidden" name="strHubName" value="<?=$arrHubDetails['strName']?>">

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
			<!-- Family Panel -->
			<section>
				<h3>Family Members</h3>
				<div class="row">
					<div class="invite-btn">
						<a class="button" href="#" data-toggle="modal" data-target="#addMember">+</a>
						<p class="invite">Add</p>
					</div>
					<div class="member">
						<img src="img/member1.jpg">
						<p>Jill</p>
					</div>
					<div class="member">
						<img src="img/member1.jpg">
						<p>Sarah</p>
					</div>
				</div>
				<div class="row">
					<div class="member">
						<img src="img/member1.jpg">
					</div>
					<div class="member">
						<img src="img/member1.jpg">
					</div>
				</div>
			</div>
			<!-- Add Member Model-->
			<div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<!-- Model Header -->
						<div class="modal-header">
							<h5 class="modal-title" id="title">Invite new member to <?=$arrHubDetails['strName'];?>:</h5>
							<button class="close" type="button" data-dismiss="modal">×</button>
						</div>
						<!-- Model Body -->
						<div class="modal-body">
							<!-- Open Form -->
							<form action="actions/send_invite.php" method="POST">
								<!-- Name -->
								<div class="form-group">
									<label>Name*</label>
									<input type="text" class="form-control" name="strName" required/>
								</div>
								<!-- Email -->
								<div class="form-group">
									<label>Email Address*</label>
									<input type="email" class="form-control" name="strEmail" required/>
								</div>
								<!--Message -->
								<div class="form-group">
									<label>Message From You</label>
									<textarea type="text" class="form-control" name="strMessage" placeholder="I would like you to join my hub!"></textarea>
								</div>
								<!--Send Hub Name and User -->
								<input type="hidden" class="form-control" name="strHubName" value="<?=$arrHubDetails['strName']?>"/>
								<input type="hidden" class="form-control" name="strUserName" value="<?=$arrFoundUSer['strName']?>"/>
	
								<!-- Submit -->
								<input type="submit" class="btn btn-primary" value="Send Invitation" name="form_submit">
							</form>
							<!-- Close Form -->
						</div>
						<!-- Model Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Model-->
			</section>
			
		<section class="cover-pic">
			<div class="bg"></div>
		</section>
		<section class="row">
			<section class="feed">
				<!-- Gosia, 03.31.2018: added php code - could be moved to a separate folder, but I wanted to make it easier for front-end changes for now-->
				<?php
					$nHubID = $hubId;
					// $db = mysqli_connect('192.185.103.171', 'ashleyms_admin', 'web13', 'ashleyms_familyHub');
					$sql = "SELECT strMedia, strTitle, strDescription, datePosted FROM content WHERE nHubID = '".$nHubID."' ORDER BY `id` DESC";
					$queryResult = getRecords($sql);
					// var_dump($queryResult);
					// die();
					if($queryResult) {
						foreach ($queryResult as $key => $value) {
							$img = $queryResult[$key]["strMedia"];
							$title = $queryResult[$key]["strTitle"];
							$description = $queryResult[$key]["strDescription"];
							$datePosted = $queryResult[$key]["datePosted"];
							echo "<div class='card'><img src='img/content/".$img."' alt='".$img."'>
									<h2>".$title."</h2>
									<p>".$description."</p>
									<p>".$datePosted."</p>
								</div><br>";
						}
					}
					else {
						echo "<p>There is no content yet - try adding something using the form on the left! :)</p>";
					}
				?>
			</section>
		</section>
		
	</main>
	