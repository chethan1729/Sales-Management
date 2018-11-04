<?php
	session_start();
	include_once 'dbconnect.php';

	
	$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	$add = "SELECT * FROM add_deal WHERE user_id =".$_SESSION['user']."";
	$add_run= mysql_query($add,$con);
		
	if (!$add_run) 
	{
		echo "<font color=purple size=4>Incorrect mysql select Query.</font>";
		die($add);
	}
	
	//no of users
	$count='SELECT COUNT(*),user_id FROM add_deal WHERE user_id ='.$_SESSION['user'];
	$count_run= mysql_query($count,$con);
	$cnt=mysql_fetch_array($count_run);
	
	//no of deals WON
	$countw='SELECT COUNT(*),user_id FROM add_deal WHERE status LIKE "W%" AND user_id ='.$_SESSION['user'];
	$countw_run= mysql_query($countw,$con);
	$cntw=mysql_fetch_array($countw_run);
	
	//no of deals LOST
	$countl='SELECT COUNT(*),user_id FROM add_deal WHERE status LIKE "L%" AND user_id ='.$_SESSION['user'];
	$countl_run= mysql_query($countl,$con);
	$cntl=mysql_fetch_array($countl_run);
	
	//no of deals LOST
	$countp='SELECT COUNT(*),user_id FROM add_deal WHERE status LIKE "P%" AND user_id ='.$_SESSION['user'];
	$countp_run= mysql_query($countp,$con);
	$cntp=mysql_fetch_array($countp_run);
	
	//WON TOTAL
	$won='SELECT SUM(deal_value),user_id FROM add_deal WHERE status LIKE "W%" AND user_id ='.$_SESSION['user'];
	$won_run= mysql_query($won,$con);
	$rw=mysql_fetch_array($won_run);
	
	
	//WON LOST
	$lost='SELECT SUM(deal_value) FROM add_deal WHERE status LIKE "L%" AND user_id ='.$_SESSION['user'];
	$lost_run= mysql_query($lost,$con);
	$rl=mysql_fetch_array($lost_run);

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
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/Chart.js"></script>

	
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
												<li class="active">
													<a class="page-scroll" href="#">Statistics</a>
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
													<li ><a href="feedback.php">Feedback </a></li>
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
					
				<div class="row">
					<div class="col col-sm-2 col-md-2"></div>
				<!-- pie chart -->
						<div class="col col-sm-4 col-md-4">
							<div class="container_contact">
								<div class="x_panel">
									<div class="x_title">
										<p class="deal_heading"> Deal stats : </p>
										<div class="clearfix"></div>
									</div>
																		
									<div class="x_content">
																		
										<canvas id="mycanvas" width="256" height="256">
										<script>
											$(document).ready(function(){
											var ctx = $("#mycanvas").get(0).getContext("2d");

											//pie chart data
											//sum of values = 360
											var data = [
											{
												<?php if($rw[0]==NULL) $rw[0]=0; ?>
												value: <?php echo "$rw[0]"; ?>,
												color: "rgb(36, 116, 46)",
												highlight: "rgb(36, 178, 46)",
												label: " WON (Rs)"
											},
											{
												<?php if($rl[0]==NULL) $rl[0]=0; ?>
												value: <?php  echo "$rl[0]";  ?>,
												color: "rgb(215, 42, 33)",
												highlight: "rgb(209, 62, 77)",
												label: "LOST (Rs)"
											}
								
											];

											//draw
											var piechart = new Chart(ctx).Pie(data);
											});
										</script>
												
									</div>	
									<br/>
									<br/>
									<div class="chart_discr">
										<p> &nbsp;Lost </p>
									</div>	
									<div class="chart_discr1">
										<p> &nbsp;Won </p>
									</div>	
									
									</div>
								</div>
							</div>						
				
            <!-- /Pie chart -->
							<div class="col col-sm-4 col-md-4">
							<div class="container_contact">
								<div class="x_panel">						
									<div class="font_style_stat">
									<div class="x_content">
										<p> Total number of Deals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo "$cnt[0]"; ?> </p>
										<p> Number of Deals won &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo "$cntw[0]"; ?> </p>
										<p> Number of Deals lost &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo "$cntl[0]"; ?> </p>
										<p> Number of Deals pending &nbsp;&nbsp; : <?php echo "$cntp[0]"; ?> </p>
									</div>
									</div>
								</div>
							</div>
							</div>
		
					</div>
		</form>
	</div>
</div>


<script src="js/moris/raphael-min.js"></script>
<script src="js/moris/morris.min.js"></script>
<script src="js/moris/example.js"></script>

</body>

</html>
