<?php
	session_start();
	include_once 'dbconnect.php';

	
	
	//to add a new deal
	$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	if(isset($_POST['btn-sub']))
	{
		$uname = mysql_real_escape_string($_POST['uname']);
		$cname = mysql_real_escape_string($_POST['oname']);
		$email = mysql_real_escape_string($_POST['email']);
		//$user_id1 = mysql_real_escape_string($_POST['user_id1']);
		$address=mysql_real_escape_string($_POST['address']);
		$number=mysql_real_escape_string($_POST['number']);

		if(mysql_query(" UPDATE `users` SET username = \"$uname\", comp_name=\"$cname\",comp_addr= \"$address\", comp_ph= \"$number\", email= \"$email\" "))
		{
			?>
				<script>alert('successfully updated ');</script>
			<?php		
			
			 header("Location: profile.php");
		}
		else
		{
			?>
				<script>alert('error while updating ...');</script>
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
													<li class="active"><a href="#">Profile </a></li>
													<br/>
													<li><a href="feedback.php" >Feedback </a></li>
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


<!------------------------------- add deal ---------------------------------->
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>

<!----------------------------------pipeline table------------------------------------>

				<form  role="form">
								
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
							
							
							/*
							else
							{
								while ($result=mysql_fetch_array($add_run)) 
								{
									echo "<tr >";										
											 echo '<td class="a-center">';
												echo '<input type="checkbox" class="flat" name="table_records">';
											echo'</td>';
											echo " <td >".$result[1]."</td> ";                   
											echo " <td >".$result[2]."</td>";
											echo " <td >pending...</td>";
											echo " <td >".$result[3]."</td> ";
											echo '<form action = "action.php" method = "post"><input type = "hidden" name = "deal" value = $result[0]/><td class="last"><input type = "submit" value="View" name= "view"/></form>';
											echo " </td>";
									echo "</tr>";
								}
							}
							*/
							?>			
						
	
								
								
							<div class="row onl_row-sm-offset-3 onl_socialButtons">
								<div class="col-xs-5 col-sm-5">	
								<div class="x_panel">
									<div class="x_title">
										<p class="deal_heading">Profile Info :</p>
										<div class="clearfix"></div>
									</div>

										<div class="x_content">
											
									
							<!-- --------------------- user name  ------------------------- -->
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="off" method="POST">
														<div class="input-group" for="name">
															<span class="input-group-addon">
															<span class="glyphicon glyphicon-user"></span>
															</span>
															<input type="text"  name="uname" placeholder="<?php echo "$result[1]";?> *" class="form-control"  id="name"  required />
														</div>
												</div>
									<!-- ---------------------organisation name------------------------- -->
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="off" method="POST">
														<div class="input-group" for="name">
															<span class="input-group-addon">
															<span class="glyphicon glyphicon-object-align-bottom"></span>
															</span>
															<input type="text"  name="oname" placeholder="<?php echo "$result[4]"; ?> *" class="form-control"  id="name"  required />
														</div>
												</div>
									<!-- --------------------- Email------------------------- -->	
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="on" method="POST">
														<div class="input-group" for="email">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-envelope"></span>
															</span>
															<input type="email" name="email"  placeholder="<?php echo "$result[2]"; ?> *" class="form-control"  id="email"   required />
														</div>
												</div>
									<!-- --------------------- comp adress------------------------- -->	
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="on" method="POST">
														<div class="input-group" for="address">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-home"></span>
															</span>
															<input type="text" name="address"  placeholder="<?php echo "$result[5]"; ?> *" class="form-control"  id="email"   required />
														</div>
												</div>
									<!-- --------------------- phone number------------------------- -->	
												<div class="form-group">
													<form class="onl_loginForm" action="" autocomplete="on" method="POST">
														<div class="input-group" for="number">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-phone"></span>
															</span>
															<input type="text" name="number"  placeholder="<?php echo "$result[6]"; ?> *" class="form-control"  id="email"   required />
														</div>
												</div>	
									<!---------------submit button----------------------------->
												<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-sub">
												<i class="fa fa-sign-in"> </i>
												Update</a> </button>
																				
											</div>	
										</div>
									</div>		
									
									<div class="col-xs-2 col-sm-2">
									</div>

									<div class="col-xs-4 col-sm-4">	
										
									</div>
								
							<br/>
																
				</form>									
		


</form>
</div>		
</div> <!---- container end ----- >
	
	
</body>

</html>
