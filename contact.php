<?php
	session_start();
	include_once 'dbconnect.php';

	
	$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
	if(isset($_POST['btn-addeal']))
	{
		$org_name1 = mysql_real_escape_string($_POST['o_name']);
		$email1 = mysql_real_escape_string($_POST['email']);
		$ph_no1 = mysql_real_escape_string($_POST['ph_no']);
		$adress1=mysql_real_escape_string($_POST['adress']);
		$user_id1 = mysql_real_escape_string($_POST['user_id1']);

		if(mysql_query("INSERT INTO contact(o_name,o_mail,o_phone,o_adress,user_id) VALUES('$org_name1','$email1','$ph_no1','$adress1','$user_id1')"))
		{
			?>
				<script>alert('successfully registered ');</script>
			<?php		
			
			 header("Location: contact.php");
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
                    			
												<li>
													<a class="page-scroll" href="pipeline.php">Deals</a>
												</li>                    			            
												<li>
													<a class="page-scroll" href="statistics.php">Statistics</a>
												</li>
												<li class="active">
													<a class="page-scroll" href="#">Contacts</a>
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
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				
				<div class="row">
					<div class="col col-sm-2 col-md-2 col-lg-2">
						<div class="container-fluid bg-2 ">		
							<a href="#" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
								<span class="glyphicon glyphicon-plus"></span> Add contact
							</a>
			<!------------------------------MODAL---------------------------------->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog modal-lg">
    
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title" id="modal_font">Schedule an activity:</h4>
										</div>
										<div class="modal-body">
								
								<!--------------------------MODAL BODY------------------------------>
								
											<form  role="form">
												<div class="row onl_row-sm-offset-3 onl_socialButtons">
									
							<!-- --------------------- organization name------------------------- -->
													<div class="col-xs-7 col-sm-7">	
			
														<div class="form-group">
															<form class="onl_loginForm" action="" autocomplete="off" method="POST">
																<div class="input-group" for="name">											
																	<span class="input-group-addon">
																	<span class="glyphicon glyphicon-home"></span>
																	</span>
																	<input type="text"  name="o_name" placeholder="Organization / person name *" class="form-control"  id="name"  required />
																</div>
														</div>
				
														<span class="help-block"></span>
									<!-- --------------------- org email ------------------------- -->
														<div class="form-group">
															<form class="onl_loginForm" action="" autocomplete="off" method="POST">
																<div class="input-group" for="name">
																	<span class="input-group-addon">
																	<span class="glyphicon glyphicon-envelope"></span>
																	</span>
																	<input type="email"  name="email" placeholder="Organization mail *" class="form-control"  id="name"  required />
																</div>
														</div>
									
									<!-- --------------------- phone number------------------------- -->
														<div class="form-group">
															<form class="onl_loginForm" action="" autocomplete="on" method="POST">
																<div class="input-group" for="name">
																	<span class="input-group-addon">
																	<span class="glyphicon glyphicon-phone"></span>
																	</span>
																	<input type="value"  name="ph_no" placeholder="Phone number *" class="form-control"  id="name"  required />
																</div>
														</div>
									<!-- ---------------------adress------------------------- -->
														<div class="form-group">
															<form class="onl_loginForm" action="" autocomplete="off" method="POST">
																<div class="input-group" for="name">
																	<span class="input-group-addon">
																	<span class="glyphicon glyphicon-home"></span>
																	</span>
																	<input type="text"  name="adress" placeholder="Adress*" class="form-control"  id="name"  required />
																</div>
														</div>
														<div class="form-group">
															<form class="onl_loginForm" action="" autocomplete="off" method="POST">
																<div class="input-group" for="name">
																	<input type="hidden" name="user_id1" value= "<?php echo $_SESSION['user'] ?>" />
																</div>
														</div>
									
													</div>
												</form>
								
									<!------------------------------------------------------------------>
								
											</div> <!---- modal body class end--------->
						
											<div class="modal-footer">
												<button class="btn btn-success"  id="btnSubmit" type="submit" name="btn-addeal"> <i class="fa fa-sign-in"></i> Save</a></button>
												<button type="button" class="btn btn-default" id="modal_close"  data-dismiss="modal">Close</button>				
											</div>
										</div>
									</div>
								</div>			
			<!--------------------------------------------------------------------------->
							</div>
						</div>	
	
					</div>
				</div>
				<br/>
				<br/>
			
				<?php
							
					include 'dbconnect.php';
					$add = "SELECT * FROM contact WHERE user_id=".$_SESSION['user'] ;
					$add_run= mysql_query($add,$con);
							
					if (!$add_run) 
					{
						echo "<font color=purple size=4>Incorrect mysql select Query.</font>";
						die($add);
					}
					/*else if(empty($result))
					{														
							echo '<div class="no_feedback">';
							echo '<img  src="img/logo.png" alt="img2"   class="img-responsive">';
							echo "<p >NO FEEDBACKS !!</p>";
							echo "</div>";
					}*/
					else
					{	
						
						echo '<a href="#"> <div class="row">	';						
						while ($result=mysql_fetch_array($add_run)) 
						{
							
						
							echo '
							
							<div class="col col-sm-4 col-md-4">
							<div class="container_contact">
								<div class="x_panel">
									<div class="x_title">
										<p class="deal_heading"> Contact name: &nbsp; '.$result[1].'</p>
										<div class="clearfix"></div>
									</div>
																		
									<div class="x_content">
										<div class="font_style_contact">										
											<h3> <b>Email :</b> &nbsp'.$result[2].'</h3>	 		
											<h3> <b>Phone no :</b> &nbsp'.$result[3].'</h3>		
											<h3> <b>Address : </b> &nbsp'.$result[4].'</h3>
										</div>
									</div>																										
								 </div>
							 </div>
							 </div>
							';
						}
						echo '</div> </a>';
					}
				?>
		
				
				
				
			</form>
		</div>
	</div>
	
	
</body>
</html>