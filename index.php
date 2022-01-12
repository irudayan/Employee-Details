<?php 
	require('dbconnection.php');
	session_start();
	
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			$sqlEmail = "select * from register where email = '".$email."'AND password='".$password."'";
			$rs = mysqli_query($con,$sqlEmail);
			 if(mysqli_num_rows($rs))  
			
			
				
				{
					
					//echo "<pre>";
					//print_r($_SESSION);
					//echo "</pre>";
					//exit;
					
					header('location:dashboard.php');
					exit;
					
				}
				else
				{
					$errorMsg =  "Wrong Email Or Password";
				}
			}
			else
			{
				$errorMsg =  "No User Found";
			}
		}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Now</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>Login Now</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "";
				echo "</div>";
				
			}
			
			
			
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Email</label>
				<input type="email" name="email" required placeholder="Enter Your Email">
			</div>
			<div class="field-container">
				<label>Password</label>
				<input type="password" name="password" required placeholder="Enter Your Password">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Login</button>
			</div>

			 <div class="signup-link">
                     Not a member? <a href="registration.php">Signup now</a>
             </div>
			
		</form>
	</div>
</body>
</html>