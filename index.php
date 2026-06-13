<?php
ob_start();
require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title><?php echo APP_NAME; ?> - Login</title>
</head>
 
<body>
    <div class="container">
        <div class="form">
            <h1 id="h1"><?php echo APP_NAME; ?> LOGIN</h1>
            <div class="btn">
                <a href="registration.php"><button class="signUpBtn">SIGN UP</button></a>
            </div>

             <!-- LOGIN FORM -->
             <form id="form" method="post" action="">
			 
			 <?php
		if(isset($_POST['btnsubmit']))
		{
			$username = mysqli_real_escape_string(getDBConnection(), trim($_POST['username']));
			$password = mysqli_real_escape_string(getDBConnection(), trim($_POST['password']));
			
			if(empty($username))
			{
				echo "<p style=\"color:red;text-align:center;\">Please enter your username</p>";
			}
			else if(empty($password))
			{
				echo "<p style=\"color:red;text-align:center;\">Please enter your password</p>";
			}
			else
			{
				$con = getDBConnection();
				
				// Using prepared statement to prevent SQL injection
				$stmt = mysqli_prepare($con, "SELECT username FROM tbluser WHERE username=? AND password=?");
				mysqli_stmt_bind_param($stmt, "ss", $username, $password);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				
				if(mysqli_num_rows($result) == 1)
				{
					$_SESSION['user'] = $username;
					header("Location: home.php");
					exit();
				}
				else
				{
					echo "<div style=\"color:red;text-align:center;\">Invalid username or password</div>";
				}
				
				mysqli_stmt_close($stmt);
				mysqli_close($con);
			}
		}
		ob_end_flush();
	?>
			 
              <div class="formGroup">
                  <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
              </div>
              
              <div class="formGroup">
                  <input type="password" name="password" id="password" placeholder="PASSWORD" autocomplete="off">
              </div>
             
              <div class="checkBox">
                  <input type="checkbox" name="checkbox" id="checkbox">
                  <span class="text">I agree with term & conditions</span>
              </div>
              <div class="formGroup">
                  <button type="submit" id="btnsubmit" name="btnsubmit" class="btn2">LOGIN</button>
              </div>
          </form>
        
      <!------ Login Form -------- -->
      
    </div>
  </div>
 
</body>
 
</html>