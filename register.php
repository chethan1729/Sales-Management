<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$cname = mysql_real_escape_string($_POST['comp-name']);
	$email = mysql_real_escape_string($_POST['email']);
	$comp_addr = mysql_real_escape_string($_POST['address']);
	$comp_ph = mysql_real_escape_string($_POST['number']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$upass1=md5(mysql_real_escape_string($_POST['pass1']));
 

	if(mysql_query("INSERT INTO users(username,email,password,comp_name,comp_addr,comp_ph) VALUES('$uname','$email','$upass','$cname','$comp_addr','$comp_ph')"))
	{
		?>
			<script>alert('successfully registered ');</script>
        <?php
		
		 header("Location: login.php");
	}
	else
	{
		?>
			<script>alert('error while registering you...');</script>
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
		 
    	<title>Sign up</title>

    	<!-- Bootstrap core CSS -->
    	<link href="css/bootstrap_land.min.css" rel="stylesheet">

    	<!-- Custom styles for this template -->
    	<link href="css/nextSignUp.css" rel="stylesheet">
    	
    	<link href="js/query.js" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
		<script>
		
		$(function () 
		{
			$("#btnSubmit").click(function () 
			{
				var password = $("#pwd").val();
				var confirmPassword = $("#re_pwd").val();
				if (password != confirmPassword)
				{
					alert("Passwords do not match.");
					return false;
				}
				return true;
			});
		});
	</script>
		
</head>


<body>

<br/><br/>
<div id="login-form">
<form method="post">

	<div class="container">
   	
   
		<div class="onl_login">
    	
			<div class="pad">
				<h3 class="onl_authTitle" data-placement="bottom" title="Sign up to create your account"> Sign up to create your account</h3>
			</div>
		
			<form  role="form">
		
				<div class="row onl_row-sm-offset-3 onl_socialButtons">
		
					<!-- --------------------- username------------------------- -->
			
					<div class="col-xs-6 col-sm-4">	
			
						<div class="form-group">
							<form class="onl_loginForm" action="" autocomplete="on" method="POST">
								<div class="input-group" for="name">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</span>
									<input type="text"  name="uname" placeholder="Username *" class="form-control"  id="name"  required />
								</div>
						</div>
				
						<span class="help-block"></span>
					
			<!-- --------------------------- company name ----------------------------------->
				
				<div class="form-group">
			   		<form class="onl_loginForm" action="" autocomplete="on" method="POST">
					<div class="input-group" for="name">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-home"></span>
						</span>
						<input type="text" class="form-control" name="comp-name" id="name" placeholder="Comapny name *">
					</div>
				</div>
			<!-- --------------------- Email------------------------- -->	
						<div class="form-group">
							<form class="onl_loginForm" action="" autocomplete="on" method="POST">
								<div class="input-group" for="email">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-envelope"></span>
									</span>
									<input type="email" name="email"  placeholder="E mail *" class="form-control"  id="email"   required />
								</div>
						</div>
			
	
				<!-----------------------Company Adress--------------------------->	
		
		
				<div class="form-group">
			   		<form class="onl_loginForm" action="" autocomplete="on" method="POST">
					<div class="input-group" for="adress">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-globe"></span>
						</span>
						<input type="text" class="form-control" name="address" id="adress" placeholder="Comapny adress *">
					</div>
				</div>
				
	 
			
			   <!-- ---------Phone Number------------>						
				
			
	
				<div class="form-group">
					<div class="input-group" for="number">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-phone">
							</span>
						</span>
						<input  type="number" class="form-control" name="number" id="no" placeholder="Phone number *">
					</div>
                 </div>
				 	 
				
				   <!-- ---------PASSWORD----------- -->						
				
						<div class="form-group">
							<div class="input-group" for="pwd">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock">
									</span>
								</span>
								<input  type="password"   name="pass"  placeholder="Password *" class="form-control" id="pwd"   required />
							</div>
						</div>
                
                <!-- ---------RE-PASSWORD----------- -->						
				
				
                <div class="form-group">
					<div class="input-group" for="pwd">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock">
							</span>
						</span>
						<input  type="password" class="form-control" name="pass1" id="re_pwd" placeholder="Re-enter the Password *">
						
					</div>
                 </div>
                
                  <br/>
                  
				
				<!-- ----------SUBMIT ------------ -->	
					
						<button class="btn btn-lg btn-primary btn-block"  id="btnSubmit" type="submit" name="btn-signup"> <i class="fa fa-sign-in"></i> Sign up</a></button>
					
					<!-- --  modal---- -->
					
						<br/>
  					
						<h4 align="center"> already have an account?  <a href="login.php">Sign In Here</a> </h4>
  					
					</div>
				</div>
			</form>
		</div>
    </div>

</form>
</div>	
		
		
			
			<!-- ------------  REMEMBER ME check box  ------------->
			
			
			
<br/>	    	
	


<script>

$(function () 
{
  $('[data-toggle="tooltip"]').tooltip()
})

</script>

	
</body>

</html>