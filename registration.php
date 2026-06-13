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
  <title><?php echo APP_NAME; ?> - Register</title>
</head>
 
<body>
    <div class="container">
        <div class="form">
            <h1 id="h1"><?php echo APP_NAME; ?> REGISTER</h1>
            <div class="btn">
                <a href="index.php"><button class="loginBtn">LOG IN</button></a>
            </div>

             <!-- REGISTRATION FORM -->
             <?php
			$registrationComplete = false;
			
			if(isset($_POST['btnsubmit']))
			{
				$con = getDBConnection();
				
				$username = mysqli_real_escape_string($con, trim($_POST['username']));
				$email = mysqli_real_escape_string($con, trim($_POST['email']));
				$password = mysqli_real_escape_string($con, trim($_POST['password']));
				$cpassword = mysqli_real_escape_string($con, trim($_POST['cpassword']));
					
				if(empty($username))
				{
					echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Please enter your username</p>";
				}
				else if(empty($email))
				{
					echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Please enter your email</p>";
				}
				else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Please enter a valid email address</p>";
				}
				else if(empty($password))
				{
					echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Please enter your password</p>";
				}
				else if(strlen($password) < 6)
				{
					echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Password must be at least 6 characters</p>";
				}
				else if($password != $cpassword)
				{
					echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Passwords do not match</p>";
				}
				else
				{
					// Check if username already exists
					$check_stmt = mysqli_prepare($con, "SELECT id FROM tbluser WHERE username=?");
					mysqli_stmt_bind_param($check_stmt, "s", $username);
					mysqli_stmt_execute($check_stmt);
					mysqli_stmt_store_result($check_stmt);
					
					if(mysqli_stmt_num_rows($check_stmt) > 0)
					{
						echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Username already exists. Please choose another.</p>";
					}
					else
					{
						$current_date = date('Y-m-d H:i:s');
						
						// Insert new user (Note: In production, use password_hash())
						$stmt = mysqli_prepare($con, "INSERT INTO tbluser(username, email, password, cdate) VALUES (?, ?, ?, ?)");
						mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $current_date);
						
						if(mysqli_stmt_execute($stmt))
						{
							$registrationComplete = true;
							echo "<div style=\"background:#4CAF50;color:white;text-align:center;padding:20px;border-radius:10px;margin-bottom:20px;\">";
							echo "<h3 style=\"margin:0 0 10px 0;\">✓ Registration Successful!</h3>";
							echo "<p style=\"margin:10px 0;\">Your account has been created successfully.</p>";
							echo "<a href='index.php' style=\"display:inline-block;margin-top:10px;padding:10px 30px;background:white;color:#4CAF50;text-decoration:none;border-radius:5px;font-weight:bold;\">Login Now →</a>";
							echo "</div>";
						}
						else
						{
							echo "<p style=\"background:#ff4444;color:white;text-align:center;padding:10px;border-radius:5px;\">Registration failed. Please try again.</p>";
						}
						mysqli_stmt_close($stmt);
					}
					mysqli_stmt_close($check_stmt);
				}
				mysqli_close($con);
			}
			ob_end_flush();
			
			// Only show form if registration not complete
			if(!$registrationComplete):
	?>
             
             <form id="form" method="post" action="">
			 
              <div class="formGroup">
                  <input type="text" name="username" id="username" placeholder="USERNAME" autocomplete="off">
              </div>
              <div class="formGroup">
                  <input type="email" name="email" placeholder="EMAIL ID"  autocomplete="off">
              </div>
              <div class="formGroup">
                  <input type="password" name="password" id="password" placeholder="PASSWORD" autocomplete="off">
              </div>
              <div class="formGroup">
                  <input type="password" name="cpassword" id="cpassword" placeholder="CONFIRM PASSWORD"  autocomplete="off">
              </div>
              <div class="checkBox">
                  <input type="checkbox" name="checkbox" id="checkbox">
                  <span class="text">I agree with term & conditions</span>
              </div>
              <div class="formGroup">
                  <button type="submit" id="btnsubmit" name="btnsubmit" class="btn2">REGISTER</button>
              </div>
          </form>
          
          <?php endif; // End of form display condition ?>
        
      
    </div>
  </div>
 
</body>
 
</html>