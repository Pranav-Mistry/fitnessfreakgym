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
            <h1 id="h1">ADVP LOGIN</h1>
            <div class="btn">
			
                <a href="registration.php" ><button class="signUpBtn" >SIGN UP</button></a>
                
            </div>

             <!-- SIGN UP PAGE -->
             <form  id="form" method="post" action="">
			 
			 <?php
		if(isset($_POST['btnsubmit']))
		{
			$text=$_POST['username'];
			$password=$_POST['password'];
			if(empty($text))
			{
				echo "<p style=\"color:red\">Please Enter your Username</p>";
			}
			else if(empty($password))
			{
				echo "<p style=\"color:red\">Please Enter your Password</p>";
			}
			else
			{
				
				$con=mysqli_connect("localhost","root","","fitnessgym");
				$sql="select * from tbluser where username='$text' and password='$password'";
				$result=mysqli_query($con,$sql);
				$line = mysqli_fetch_array($result);
				$username = $line["username"];
				$count = mysqli_num_rows($result);
				if($count==1)
				{
					session_start();
					$_SESSION['user']=$username;
					header("Location:home.php",true);
				}
				else
				{
					echo "<div style = \"color:red\">Invalid Username/Password</div>";
				}
				mysqli_close($con);
				ob_end_flush();	
			}
		}
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
                  <button type="submit" id="btnsubmit" name="btnsubmit" class="btn2">REGISTER</button>
              </div>
          </form>
        
      <!------ Login Form -------- -->
      
    </div>
  </div>
 
</body>
 
</html>