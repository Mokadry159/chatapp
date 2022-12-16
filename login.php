<?php 
		session_start();
		if(isset($_SESSION['unique_id'])){
			header("location: users.php");
		}

 ?>
<?php include_once "header.php"; ?>
<body>
	<div class="wrapper">
	<section class="login form">

		<header>live chat </header>

		<form action="" , method="POST" autocomplete="off">
			<input type="hidden" id="action" , value="login">
			<div class="error-text"> error message</div>
			<div class="field">
				<label>email address</label>
				<input type="text" placeholder="enter ur email adress ">
			</div>
			<div class="field">
				<label>password</label>
				<input type="password" placeholder="enter ur password  ">
				<i class="fas fa-eye" style=" color: black;"></i>
			</div>
			<div class="field button">
				<input type="submit" value="go chat ">	
			</div>
		</form>
		<div class="link"> u not have account  <a href="home.php">sign up </a>	
		</div>
	</section> 
	</div>
	<script src="javascript/pass-show-hide.js"></script>
	<script type="javascript/login.js"></script>
</body>
</body>
</html>

