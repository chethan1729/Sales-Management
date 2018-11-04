<?php
	session_start();
	include_once 'dbconnect.php';

	
	$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	
	if(isset($_POST['btnSend']))
	{
		$name1 = mysql_real_escape_string($userRow[4]);		
		$email1 =  mysql_real_escape_string($userRow[2]);
		$comments1=mysql_real_escape_string($_POST['comments']);
		$user_id1 = mysql_real_escape_string($_POST['user_id1']);

		if(mysql_query("INSERT INTO feedback(f_name,f_mail,f_comment,user_id) VALUES('$name1','$email1','$comments1','$user_id1')"))
		{
			echo '<br/><br/><br/><br/><div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> This alert box could indicate a successful or positive action.
			</div> ';
			
			 header("Location: feedback.php");
			 	
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
		
	
		<link href="css/w3schools.css" rel="stylesheet">
		 <link href="css/pipeline.css" rel="stylesheet">
		<!-- -- - %%%%%%%%%%%%%%%%%%%%%%%%%%% TITLE %%%%%%%%%%%%%%%%%%%%%%%%%%%%%------>    		
    	
    	<title>Sales +</title>

		<!-- ------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--------->		
		
		<link href="http://fonts.googleapis.com/css?family=Open+sans" rel="stylesheet">		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   	 	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Merriweather:900|Passion+One:400,700|Yanone+Kaffeesatz:700|Poiret+One' rel='stylesheet' type='text/css'>
    	
		<script src="js/jquery.min.js"></script>
 		<script src="js/bootstrap.min.js"></script>
		<script src="js/pipeline.js" ></script>
		<script src="js/query.js" ></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	

	
</head>

<body>

<!-- ------------------------------NAVIGATION BAR-------------------------------------- -->		

<div class="container">
		
		<div id="login-form">
			<form method="post">
	
				<div class="pad">
				
				<!-- Navigation -->
					<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
						<div class="container">
        		
							<div class="row">
								<div class="col-sm-12 col-xs-12 col-md-12">
									
									<div class="col-sm-3 col-xs-3 col-md-3">										
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
												<i class="fa fa-bars"></i>
											</button>
											<a class="navbar-brand page-scroll" href="#page-top">
												<i class=" "></i>  <span class="logo">SALES +</span>
											</a>
										</div>
									</div>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="col-sm-5 col-xs-5 col-md-5">
										<div class="collapse navbar-collapse   navbar-main-collapse">
											<ul class="nav navbar-nav">
											<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
												<li class="hidden">
													<a href="#page-top"></a>
												</li>
                    			
												<li >
													<a class="page-scroll" href="pipeline.php">Deals</a>
												</li>                    			            
												<li>
													<a class="page-scroll" href="#contact">Statistics</a>
												</li>
												<li>
													<a class="page-scroll" href="#contact.php">Contacts</a>
												</li>
												<li>
													<a class="page-scroll" href="activity.php">Activities</a>
												</li>
											</ul>
										</div>
									</div>
            		
									<div class="collapse navbar-collapse navbar-right  navbar-main-collapse">
										<ul class="nav navbar-nav navbar-right">
											<li class="dropdown">
												<a  class="dropdown-toggle"
												data-toggle="dropdown"  href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $userRow['username']; ?><span
												class="caret"></span></a>
                    			
												<ul class="dropdown-menu">
													<br/>
													<li><a href="#">Profile </a></li>
													<br/>
													<li class="active"><a href="#">Feedback </a></li>
													<br />
													<li><a href="logout.php?logout">Sign Out</a></li>
													<br />										
												</ul>
											</li>								
										</ul>
									</div>
							<!-- /.navbar-collapse -->
								</div>
							<!-- /.container -->
							</div>
						</div>
					</nav>
				</div>
					
<!-- -------------------//////////////// End of NAVIGATION BAR //////////////--------------------- -->	
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
					<?php							
							include 'dbconnect.php';
							$add = "SELECT * FROM users WHERE user_id =". $_SESSION['user']."";
							$add_run= mysql_query($add,$con);
							
							$result=mysql_fetch_array($add_run);
							if (!$add_run) 
							{
								echo "<font color=purple size=4>Incorrect mysql select Query.</font>";
								die($add);
							}
							
					?>
			
		<!-- Container (Contact Section) -->
			<div id="contact" class="container-fluid bg-grey">
				
					<div class="row">
						<div class="col-sm-5">
						<div class="x_panel">
							<div class="x_title">
								<p class="deal_heading">Contact :</p>
								<div class="clearfix"></div>
							</div>

							<div class="x_content">
								<p>Contact us and we'll get back to you within 24 hours.</p>
								<p><span class="glyphicon glyphicon-map-marker"></span> Bengaluru, INDIA</p>
								<p><span class="glyphicon glyphicon-phone"></span> +919480703798</p>
								<p><span class="glyphicon glyphicon-envelope"></span> salesplus@gmail.com</p>
							</div>
						</div>
					</div>
						<div class="col-sm-7 slideanim">
						<div class="x_panel">
							<div class="x_title">
								<p class="deal_heading">Feedback :</p>
								<div class="clearfix"></div>
							</div>

							<div class="x_content">
						
							<div class="row">
								<div class="col-sm-6 form-group">
									<input class="form-control" id="name" name="name" placeholder=<?php echo "$result[4]"; ?> type="text" disabled>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 form-group">
									<input class="form-control" id="email" name="email" placeholder=<?php echo "$result[2]"; ?> type="email" disabled>
								</div>
							</div>
							<textarea class="form-control" id="comments" name="comments" placeholder="Send Feedback *" rows="5"></textarea><br>
							<!--------user-id index ---------------->
							<div class="form-group">
								<form class="onl_loginForm" action="" autocomplete="off" method="POST">
									<div class="input-group" for="name">
										<input type="hidden" name="user_id1" value= "<?php echo $_SESSION['user'] ?>" />
									</div>
							</div>
							<div class="row">
								<div class="col-sm-12 form-group">
									<button class="btn btn-default pull-right" type="submit" name="btnSend">Send</button>
								</div>
							</div>	
							</div>
							</div>
						</div>
					</div>
			</div>
			
		</form>
	</div>


</body>

</html>
