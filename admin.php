<?php
	session_start();
	include_once 'dbconnect.php';

	
	$res=mysql_query("SELECT * FROM admin_login WHERE admin_id=1" );
	$userRow=mysql_fetch_array($res);
	
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
													<a class="page-scroll" href="#">Home</a>
												</li>                    			            
												<li>
													<a class="page-scroll" href="admin_feedback.php">Feedbacks</a>
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
				
				<?php
							
					include 'dbconnect.php';
					$add = "SELECT * FROM users ";
					$add_run= mysql_query($add,$con);
							
					if (!$add_run) 
					{
						echo "<font color=purple size=4>Incorrect mysql select Query.</font>";
						die($add);
					}
					else
					{							
						echo '<div class="container">
								<div class="x_panel">
									<div class="x_title">
										<p class="deal_heading">Registered Users:</p>
										<div class="clearfix"></div>
									</div>';
									 $i=1;
									while ($result=mysql_fetch_array($add_run)) 
									{
										echo '<div class="x_content">';
											echo '<div class="font_style_admin">											
													<h3>'.$i.': &nbsp; Username &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<b>'.$result[1].'</b></h3> 
													<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<b>'.$result[2].'</b></h3>
													<div class="x_title">
														<div class="clearfix"></div>
													</div>
												</div>';
										echo '</div>';
										$i++;
									}
									
								echo '</div>';
							echo '</div>';						
					}
				?>
		
</body>

</html>