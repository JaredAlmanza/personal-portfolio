<?php
session_start();
include("functions.php");
?>

<div class="slides">
<div class="slide" id="5">
  <div class="content fifth-content">
    <div class="container-fluid">
      <div class="col-md-6">
        <div id="map">
          <h2>Contact</h2>
          <p><b>Email:</b> name@example.com<br>
          <b>Phone:</b> 123-456-7890</p>

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2917.6695508530934!2d-98.61955614705614!3d29.58294145075113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1759289599090!5m2!1sen!2sus" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-md-6">

			<?php
			if (!isset($_POST['submit']))
			{
				echo '<h2>Contact Form</h2>';
				echo '<form method="post" action="">';

				//firstName
				if (isset($_GET['error']) && strstr($_GET['error'], "fnNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="firstName">First Name</label></p>';
					echo '<input type="text" class="form-control" name="firstName">';
					echo '<small class="form-text text-danger">First name cannot be blank!</small>';
					echo '</div>';
				}
				elseif (isset($_GET['error']) && strstr($_GET['error'], "fnInvalidChar")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="firstName">First Name</label></p>';
					echo '<input type="text" class="form-control" name="firstName" value="'.$_SESSION['fnData'].'">';
					echo '<small class="form-text text-danger">First name contains invalid characters!</small>';
					echo '</div>';
				}
				elseif (isset($_SESSION['fnData'])) {
					echo '<div class="form-group has-success">';
					echo '<p><label for="firstName">First Name</label></p>';
					echo '<input type="text" class="form-control" name="firstName" value="'.$_SESSION['fnData'].'">';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="firstName">First Name</label></p>';
					echo '<input type="text" class="form-control" name="firstName">';
					echo '</div>';
				}

				//lastName
				if (isset($_GET['error']) && strstr($_GET['error'], "lnNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="lastName">Last Name</label></p>';
					echo '<input type="text" class="form-control" name="lastName">';
					echo '<small class="form-text text-danger">Last name cannot be blank!</small>';
					echo '</div>';
				}
				elseif (isset($_GET['error']) && strstr($_GET['error'], "lnInvalidChar")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="lastName">Last Name</label></p>';
					echo '<input type="text" class="form-control" name="lastName" value="'.$_SESSION['lnData'].'">';
					echo '<small class="form-text text-danger">Last name contains invalid characters!</small>';
					echo '</div>';
				}
				elseif (isset($_SESSION['lnData'])) {
					echo '<div class="form-group has-success">';
					echo '<p><label for="lastName">Last Name</label></p>';
					echo '<input type="text" class="form-control" name="lastName" value="'.$_SESSION['lnData'].'">';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="lastName">Last Name</label></p>';
					echo '<input type="text" class="form-control" name="lastName">';
					echo '</div>';
				}

				//email
				if (isset($_GET['error']) && strstr($_GET['error'], "emailNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="email">Email</label></p>';
					echo '<input type="text" class="form-control" name="email">';
					echo '<small class="form-text text-danger">Email cannot be blank!</small>';
					echo '</div>';
				}
				elseif (isset($_GET['error']) && strstr($_GET['error'], "emailInvalid")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="email">Email</label></p>';
					echo '<input type="text" class="form-control" name="email" value="'.$_SESSION['emailData'].'">';
					echo '<small class="form-text text-danger">Invalid email format!</small>';
					echo '</div>';
				}
				elseif (isset($_SESSION['emailData'])) {
					echo '<div class="form-group has-success">';
					echo '<p><label for="email">Email</label></p>';
					echo '<input type="text" class="form-control" name="email" value="'.$_SESSION['emailData'].'">';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="email">Email</label></p>';
					echo '<input type="text" class="form-control" name="email">';
					echo '</div>';
				}

				//phone
				if (isset($_GET['error']) && strstr($_GET['error'], "phoneNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="phoneNumber">Phone Number</label></p>';
					echo '<input type="text" class="form-control" name="phoneNumber">';
					echo '<small class="form-text text-danger">Phone cannot be blank!</small>';
					echo '</div>';
				}
				elseif (isset($_GET['error']) && strstr($_GET['error'], "phoneInvalid")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="phoneNumber">Phone Number</label></p>';
					echo '<input type="text" class="form-control" name="phoneNumber" value="'.$_SESSION['phoneData'].'">';
					echo '<small class="form-text text-danger">Phone must contain digits only!</small>';
					echo '</div>';
				}
				elseif (isset($_SESSION['phoneData'])) {
					echo '<div class="form-group has-success">';
					echo '<p><label for="phoneNumber">Phone Number</label></p>';
					echo '<input type="text" class="form-control" name="phoneNumber" value="'.$_SESSION['phoneData'].'">';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="phoneNumber">Phone Number</label></p>';
					echo '<input type="text" class="form-control" name="phoneNumber">';
					echo '</div>';
				}

				//username
				if (isset($_GET['error']) && strstr($_GET['error'], "userNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="username">Username</label></p>';
					echo '<input type="text" class="form-control" name="username">';
					echo '<small class="form-text text-danger">Username cannot be blank!</small>';
					echo '</div>';
				}
				elseif (isset($_SESSION['userData'])) {
					echo '<div class="form-group has-success">';
					echo '<p><label for="username">Username</label></p>';
					echo '<input type="text" class="form-control" name="username" value="'.$_SESSION['userData'].'">';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="username">Username</label></p>';
					echo '<input type="text" class="form-control" name="username">';
					echo '</div>';
				}

				//password
				if (isset($_GET['error']) && strstr($_GET['error'], "pwdNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="password">Password</label></p>';
					echo '<input type="password" class="form-control" name="password">';
					echo '<small class="form-text text-danger">Password cannot be blank!</small>';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="password">Password</label></p>';
					echo '<input type="password" class="form-control" name="password">';
					echo '</div>';
				}

				//comments
				if (isset($_GET['error']) && strstr($_GET['error'], "commentNull")) {
					echo '<div class="form-group has-error">';
					echo '<p><label for="comments">Comments</label></p>';
					echo '<textarea class="form-control" name="comments"></textarea>';
					echo '<small class="form-text text-danger">Comments cannot be blank!</small>';
					echo '</div>';
				}
				elseif (isset($_SESSION['commentData'])) {
					echo '<div class="form-group has-success">';
					echo '<p><label for="comments">Comments</label></p>';
					echo '<textarea class="form-control" name="comments">'.$_SESSION['commentData'].'</textarea>';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<p><label for="comments">Comments</label></p>';
					echo '<textarea class="form-control" name="comments"></textarea>';
					echo '</div>';
				}

				echo '<div class="form-group">';
				echo '<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>';
				echo '</div>';

				echo '</form>';
			}
			else
			{
				$errors = "";

				//firstname
				$fnData =($_POST['firstName']);
				$_SESSION['fnData'] = $fnData;
				if ($fnData == "") $errors .= "fnNull";
				elseif (!preg_match("/^[A-Za-z'-]+$/", $fnData)) $errors .= "fnInvalidChar";
				
				//lastname
				$lnData =($_POST['lastName']);
				$_SESSION['lnData'] = $lnData;
				if ($lnData == "") $errors .= "lnNull";
				elseif (!preg_match("/^[A-Za-z'-]+$/", $lnData)) $errors .= "lnInvalidChar";

				//emial
				$emailData =($_POST['email']);
				$_SESSION['emailData'] = $emailData;
				if ($emailData == "") $errors .= "emailNull";
				elseif (!filter_var($emailData, FILTER_VALIDATE_EMAIL)) $errors .= "emailInvalid";

				//phone
				$phoneData =($_POST['phoneNumber']);
				$_SESSION['phoneData'] = $phoneData;
				if ($phoneData == "") $errors .= "phoneNull";
				elseif (!ctype_digit($phoneData)) $errors .= "phoneInvalid";

				//username
				$userData =($_POST['username']);
				$_SESSION['userData'] = $userData;
				if ($userData == "") $errors .= "userNull";

				//password
				$pwdData =($_POST['password']);
				$_SESSION['pwdData'] = $pwdData;
				if ($pwdData == "") $errors .= "pwdNull";

				//comments
				$commentData =addslashes($_POST['comments']);
				$_SESSION['commentData'] = $commentData;
				if ($commentData == "") $errors .= "commentNull";
				
				if ($errors != "") {
					header("Location: contact.php?error=$errors");
					exit;
				}
				
				ini_set('display_errors',1);
				ini_set('display_startup_errors',1);
				error_reporting(E_ALL);
				
					$sql = "INSERT INTO `contact_info` 
				(`first_name`, `last_name`, `email`, `phone`, `user_name`, `password`, `comments`)
				VALUES ('$fnData', '$lnData', '$emailData', '$phoneData', '$userData', '$pwdData', '$commentData')";
				run_query($sql);
				echo '<h2>Data Successfully entered into the database!</h2>';

				
			}
			?>


      </div>
    </div>
  </div>
</div>
</div>