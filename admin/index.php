
<?php 

	session_start();
	if(isset($_SESSION['Username'])){
        header('Location:dashboard.php'); // Redirect to Dashboard Page
    }
    $NoNavbar ='';
    include "init.php";

	 // Check If User Coming From From HTTP POST request
	 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_submit'])){

			$username   = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$password   = filter_var( sha1($_POST['password']) ,FILTER_SANITIZE_STRING);
			$email      = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	 
			//Check If User Exist in Database
			$stmt=$con -> prepare(" SELECT
										Id , Username , Password
									FROM
										admin 
									WHERE 
										Username = ?
									AND 
										Password = ? 
									AND 
										Email = ? 
									");
			$stmt -> execute(array($username,$password,$email));
			$row = $stmt-> fetch();
			$count = $stmt -> rowCount();
			
			// If Count > 0  database contain this username
			if($count > 0){
				$_SESSION['Username'] = $username;  //Register Session Name
				$_SESSION['ID'] = $row['Id'];
				header('Location:dashboard.php'); // Redirect to Dashboard Page
				exit();
			}
	}
?> 

	<form  action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] )?>" method="POST">
		

		<div class="login-box">
			<div class="left">
				<h1>Admin Login</h1>
				
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<input type="text" name="email" placeholder="E-mail" />
				<input type="submit" name="login_submit" value="Login" />
			</div>
				
			<div class="right">
			<button class="social-signin facebook">Log in with facebook</button>
			<button class="social-signin twitter">Log in with Twitter</button>
			<button class="social-signin google">Log in with Google+</button>
			</div>
			<div class="or">OR</div>
      </div>
	</form>







<?php include $templete . "footer.php"; ?>