
<?php 
session_start();
		if(isset($_SESSION['unique_id'])){
			header("location: users.php");
		}

 ?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>live chat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php include_once 'header.php'; ?>
<body>
	<div class="wrapper">
	<section class="signup form">


		<header>live chat </header>

		<form action="#" enctype="multipart/form-data" method="POST" , autocomplete="off">

			<div class="error-text"> error message</div>

			<div class="field">
				<label>first name</label>
				<input type="text" placeholder="enter ur first name " name="fname">
			</div>

			<div class="field">
				<label>last name</label>
				<input type="text" placeholder="enter ur last name " name="lname" required>
			</div>
			<div class="field">
				<label>email address</label>
				<input type="text" placeholder="enter ur email adress " name="email" required>
			</div>
			<div class="field">
				<label>password</label>
				<input type="password" placeholder="enter ur password " name="password" required>
				<i class="fas fa-eye" style=" color: black;"></i>
			</div>
			<div class="field image">
				<label>profile photo</label>
				<input type="file" placeholder="chosse profile photo" name="image" >
			</div>

			<div class="field button">
				<input type="submit" value="register now ">
				
			</div>
			
			

		</form>
		<div class="link"> already u have account <a href="login.php">login now </a>
			
		</div>
		

	</section> 

	</div>


	  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>





</body>
</html>


<?php  
		

   ?>