<?php
	session_start();
	include_once 'dbconnect.php';

	$deal = mysql_real_escape_string($_POST['deal']);
	$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	//Deal WON
	if(isset($_POST['success']))
	{	
		if(mysql_query(" UPDATE `add_deal` SET status = \"WON\" WHERE deal_no =".$deal))
		{
			?>
				<script>alert('successfully registered ');</script>
			<?php		
			
			header("Location:pipeline.php");
		}
		else
		{
			?>
				<script>alert('error while updating...');</script>
			<?php
		}

	}
	//Deal LOST
	if(isset($_POST['lost']))
	{	
		if(mysql_query(" UPDATE `add_deal` SET status = \"LOST\" WHERE deal_no =".$deal))
		{
			?>
				<script>alert('successfully registered ');</script>
			<?php		
			
			header("Location:pipeline.php");
		}
		else
		{
			?>
				<script>alert('error while updating...');</script>
			<?php
		}

	}
	//Deal pending
	if(isset($_POST['pending']))
	{	
		if(mysql_query(" UPDATE `add_deal` SET status = \"PENDING...\" WHERE deal_no =".$deal))
		{
			?>
				<script>alert('successfully registered ');</script>
			<?php		
			
			header("Location:pipeline.php");
		}
		else
		{
			?>
				<script>alert('error while updating...');</script>
			<?php
		}

	}
	
	//DELETE THE CURRENT DEAL
	if(isset($_POST['delete']))
	{	
		if(mysql_query(" DELETE FROM `add_deal`  WHERE deal_no =".$deal))
		{
			?>
				<script>alert('successfully registered ');</script>
			<?php		
			
			header("Location:pipeline.php");
		}
		else
		{
			?>
				<script>alert('error while updating...');</script>
			<?php
		}

	}
	//UPDATE DEAL INFO
	if(isset($_POST['btn-sub'])) //&& mysql_fetch_array(mysql_query("SELECT * FROM add_deal")))
	{
		$cont_name = mysql_real_escape_string($_POST['c_name']);
		$org_name = mysql_real_escape_string($_POST['o_name']);
		$value1 = mysql_real_escape_string($_POST['value']);
		//$user_id1 = mysql_real_escape_string($_POST['user_id1']);
		$email1=mysql_real_escape_string($_POST['email']);
 
		
		if(mysql_query(" UPDATE `add_deal` SET contact_name = \"$cont_name\", org_name=\"$org_name\", deal_value = \"$value1\", org_mail= \"$email1\" WHERE deal_no =".$deal))
		{
			?>
				<script>alert('successfully registered ');</script>
			<?php		
			
			header("Location:pipeline.php");
		}
		else
		{
			?>
				<script>alert('error while updating...');</script>
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
                    			
												<li class="active">
													<a class="page-scroll" href="pipeline.php">Deals</a>
												</li>                    			            
												<li>
													<a class="page-scroll" href="statistics.php">Statistics</a>
												</li>
												<li>
													<a class="page-scroll" href="contact.php">Contacts</a>
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
													<li><a href="profile.php">Profile </a></li>										
													<br/>
													<li><a href="feedback.php" target="_blank">Feedback </a></li>
													<br/>
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
			<!------------------------------------ EDIT FORM -------------------------------------->
				<form  role="form" method="post">
								
							<?php					
							//$deal = mysql_real_escape_string($_POST['deal']);		
							include 'dbconnect.php';
							$add = "SELECT * FROM add_deal WHERE deal_no  = '". $deal."'";
							$add_run= mysql_query($add,$con);
							
							if (!$add_run) 
							{
								echo "<font color=purple size=4>Incorrect mysql select Query.</font>";
								//die($add);
							}
							$result=mysql_fetch_array($add_run);

							?>	
								
								
							<div class="row onl_row-sm-offset-3 onl_socialButtons">
								<div class="col-xs-5 col-sm-5">	
								<div class="x_panel">
									<div class="x_title">
										<p class="deal_heading">Edit DEAL :</p>
										<div class="clearfix"></div>
									</div>

										<div class="x_content">
							
							<!-- ---------------------   Contact person name  ------------------------- -->
											
			
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="on" method="POST">
														<div class="input-group" for="name">											
															<span class="input-group-addon">
															<span class="glyphicon glyphicon-user"></span>
															</span>
															<input type="text"  name="c_name" placeholder="<?php echo "$result[1]"; ?> *" class="form-control"  id="name"   />
														</div>
												</div>
				
												<span class="help-block"></span>
									
									<!-- --------------------- Organization name  ------------------------- -->
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="off" method="POST">
														<div class="input-group" for="name">
															<span class="input-group-addon">
															<span class="glyphicon glyphicon-home"></span>
															</span>
															<input type="text"  name="o_name" placeholder="<?php echo "$result[2]";?> *" class="form-control"  id="name"  />
														</div>
												</div>												
									<!-- ---------------------Deal value------------------------- -->
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="off" method="POST">
														<div class="input-group" for="name">
															<span class="input-group-addon">
															<span class="glyphicon glyphicon-euro"></span>
															</span>
															<input type="value"  name="value" placeholder="<?php echo "$result[4]"; ?> *" class="form-control"  id="name"   />
														</div>
												</div>
									<!-- --------------------- Email------------------------- -->	
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="on" method="POST">
														<div class="input-group" for="email">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-envelope"></span>
															</span>
															<input type="email" name="email"  placeholder="<?php echo "$result[5]"; ?> *" class="form-control"  id="email" />
														</div>
												</div>
									<!-- ----------SUBMIT ------------ -->	
												<input type = "hidden" name = "deal" value = "<?php 
														echo $deal;
												?>"/>							
												<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-sub">
												<i class="fa fa-sign-in"> </i>
												submit</a> </button>
													
											</div>	
										</div>
									</div>		
									
									<div class="col-xs-2 col-sm-2">
									</div>
					
								<!------------------------ status buttons ------------------->
									<div class="col-xs-4 col-sm-4">	
										<div class="x_panel">
											<div class="x_title">
												<p class="deal_heading">Status of the deal :</p>
												<div class="clearfix"></div>
											</div>

											<div class="x_content">
												<br/>
												<button type="submit" class="btn btn-success btn-md" name="success">Won</button>  
												<button type="submit" class="btn btn-info btn-md" name="pending">Pending..</button>  
												<button type="submit" class="btn btn-danger btn-md" name="lost">Lost</button>  
											</div>
											
											
											<div class="clearfix"></div>
											<div class="x_title">
												<br/>
												<br/>
												<br/>							
												<p class="deal_heading">Delete the current deal :</p>
												<div class="clearfix"></div>
											</div>
											<div class="delete_deal">
											<button type="submit" class="btn btn-danger btn-lg"  name="delete"> Delete</button>  
											</div>
										</div>
									</div>
									
									
								<!------------------------ status buttons ------------------->
									
							<br/>
																
				</form>									
		</div>		
	</div> <!---- container end ----- >
	
	
</body>

</html>
