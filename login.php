<?php
session_start();
include_once 'dbconnect.php';


if(isset($_SESSION['user'])!="")
{
 header("Location: pipeline.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 
 $res1=mysql_query("SELECT * FROM admin_login WHERE username='$email'");
 $row1=mysql_fetch_array($res1);

 if($row1['PASSWORD']==$upass)
 {
  $_SESSION['user'] = 1;
  header("Location: admin.php");
 }
 else if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: pipeline.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>


<!DOCTYPE html>
<html lang="en">
 	
 	<head>
    	
    	<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="icon" href="../../favicon.ico">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		 
		<script src="jquery.min.js"></script>
 		<script src="bootstrap.min.js"></script>
		 
    	<title>Sign in</title>

    	<!-- Bootstrap core CSS -->
    	<link href="css/bootstrap_land.min.css" rel="stylesheet">

    	<!-- Custom styles for this template -->
    	<link href="css/trailSign.css" rel="stylesheet">
    	
    	<link href="js/query.js" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
		
		
</head>


<body>

<br/><br/>
<div id="login-form">
	<form method="post">

<div class="container">
   	
	<div class="onl_login">
    
    	<div class="pad">
        	<h3 class="onl_authTitle"  data-placement="bottom" title="Sign up to create your account">Login or <a href="register.php" >Sign up</a></h3>
		</div>
		
		<br/>
		
		<div class="pad1">
		 <h4 class="onl_authTitle"  data-placement="bottom" > Click below to sign in using your social account </h4>
		</div>
		
	
		<div class="row onl_row-sm-offset-3 onl_socialButtons">
 
 	<!-- ---------------------FACEBOOK BUTTON------------------------ -->         
          <div class="col-xs-1 col-sm-1">
            <a href="#" class="btn btn-md btn-block onl_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fa fa-facebook fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
   <!-- ----------------------TWITTER BUTTON ------------------------- -->
          <div class="col-xs-1 col-sm-1">
            <a href="#" class="btn btn-md btn-block onl_btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fa fa-twitter fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>  
    <!-- ---------------------- GOOGLE+ BUTTON------------------------- -->      
          <div class="col-xs-1 col-sm-1">
            <a href="#" class="btn btn-md btn-block onl_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
              <i class="fa fa-google-plus fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>     
                    
       <!-- ----------------------LINKEDIN BUTTON ------------------------- -->  
       
          <div class="col-xs-1 col-sm-1">
            <a href="#" class="btn btn-md btn-block onl_btn-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
              <i class="fa fa-linkedin fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
                 		
 		<br/>
 		<br/>
 			<!-- -------------------OR line ------------------------------- -->
		
		<div class="pad2">
		
		<div class="row onl_row-sm-offset-3 onl_loginOr">
			<div class="col-xs-6 col-sm-6">
				<hr class="onl_hrOr">
				<span class="onl_spanOr">or</span>
			</div>
		</div>

		</div>
		
		<form  role="form">
		
		<div class="row onl_row-sm-offset-3">
		
			<!-- --------------------- username------------------------- -->
			
			<div class="col-xs-6 col-sm-4">	
			<div class="form-group">
			   		<form class="onl_loginForm" action="" autocomplete="on" method="POST">
					<div class="input-group" for="email">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" name="email" id="email" placeholder="Username">
					</div>
			</div>
					<span class="help-block"></span>
				
				   <!-- ---------PASSWORD----------- -->						
				
				<div class="form-group">
					<div class="input-group" for="pwd">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock">
							</span>
						</span>
						<input  type="password" class="form-control" name="pass" id="pwd" placeholder="Password">
					</div>
                 </div>
                    
                    <!-------------- FORGOT PASSWORD---------->
                    
			<div class="row onl_row-sm-offset-3">
					<div class="col-xs-6 col-sm-6">
						<p id="acolor" >
					 		<a href="#"> Forgot password? </a> 
						</p>
					</div>
			</div>
				
				<!-- ----------SUBMIT ------------ -->	
			
					
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-login">
						<i class="fa fa-sign-in"> </i>
					Login</a> </button>
		
			
				
				</form>
			</div>
    	</div>
	
		
		<div class="row onl_row-sm-offset-3">
			
			<!-- ------------  REMEMBER ME check box  ------------->
			
			<div class="col-xs-6 col-sm-2">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			
		</div>	    	
	
      </div>
</div>
</form>
</div>

<!-- <!--Don't delete this div - page-wrap div closed here 
<footer id="footer" class="clearfix"> </footer>
<script src="js/framework/jquery.min.js"></script>
<script type="text/javascript" src="js/framework/jquery-ui.min.js"></script>
<script src="js/framework/bootstrap.js"></script> -->
<script>
	function openHomePage() 
	{

		console.log("hi hu ===========================================");

	}



$(function () 
{
  $('[data-toggle="tooltip"]').tooltip()
})

</script>


	
</body>
    

	
</body>

</html>