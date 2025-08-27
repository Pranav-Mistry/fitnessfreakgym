<?php
ob_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>ADVP REGISTER</title>
</head>
 
<body>
    <div class="container">
        <div class="form">
            <h1 id="h1">ADVP REGISTER</h1>
            <div class="btn">
                
                <a href="index.php"><button class="loginBtn">LOG IN</button></a>
            </div>

             <!-- SIGN UP PAGE -->
             <form  id="form" method="post" action="">
			 
			 <?php
					if(isset($_POST['btnsubmit']))
					{
						
						$username=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$cpassword=$_POST['cpassword'];
							
							if(empty($username))
								{
									echo "<p style=\"background:red;color:white;text-align:center\">Please Enter your Username</p>";
								}
												
							else if(empty($email))
								
								{
									echo "<p style=\"background:red;color:white;text-align:center\">Please Enter your Email</p>";
								}
												
							else if(empty($password))
												
								{
									echo "<p style=\"background:red;color:white;text-align:center\">Please Enter your Password</p>";
								}
							
							else if($password!=$cpassword)
												
								{
									echo "<p style=\"background:red;color:white;text-align:center\">Password does not match</p>";
								}
							
								
							else
							{
								
									$con=mysqli_connect("localhost","root","","fitnessgym");
									$timezone=new DateTimeZone("Asia/Kolkata");
									$date=new DateTime();
									$date->setTimezone($timezone);
									$d=$date->format('Y-m-d H:i:s'); 
									  
									$sql="INSERT INTO `tbluser`(`id`, `username`, `email`,`password`,`cdate`) VALUES (NULL, '$username', '$email','$password','$d');";
												
												
									if(mysqli_query($con,$sql))
										{
											
											echo "<p style=\"background:red;color:white;font-size:22px;text-align:center\">Your registration is successful!!!</p>";
													
										}
													
										else
											
											{
																				
												echo "error";
											
											}
										
							}
												
					}
	?>
			 
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
        
      
    </div>
  </div>
 
</body>
 
</html>