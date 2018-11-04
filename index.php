<?php
session_start();
include_once 'dbconnect.php';
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
		
		<!---- css ----->
		<link href="css/about.css" rel="stylesheet">		
		<link rel="stylesheet" href="css/animate1.min.css" type="text/css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
		<link href="css/w3schools.css" rel="stylesheet"> 
		
		<!----js ----->
		<script src="js/jquery.min.js"></script>
		<script src="js/chart.js"></script>
 		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/cycle2.js"></script>
	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Open+sans" rel="stylesheet">		
		<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   	 	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Merriweather:900|Passion+One:400,700|Yanone+Kaffeesatz:700|Poiret+One' rel='stylesheet' type='text/css'>
		<!-- -- - %%%%%%%%%%%%%%%%%%%%%%%%%%% TITLE %%%%%%%%%%%%%%%%%%%%%%%%%%%%%------>    		
    	
    	<title>new land</title>

		<!-- ------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--------->		
		
    	<!-- main css and js -->
    	<link href="css/newland.css" rel="stylesheet">  	
    	<script src="js/query.js" ></script>	   
		
</head>

<!--  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% BODY %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--- -->

<body>

	
<!-- ------------------------------NAVIGATION BAR-------------------------------------- -->		
		
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
                        			<a class="page-scroll" href="#about">services</a>
                    			</li>                    			                  			
                    			<li>
                        			<a class="page-scroll" href="#contact">contact</a>
                    			</li>
                    			<li>
                        			<a class="page-scroll" href="#">About</a>
                    			</li>
                			</ul>
            			</div>
            		</div>
            		
            		<div class="collapse navbar-collapse navbar-right  navbar-main-collapse">
            			<ul class="nav navbar-nav navbar-right">								
								<li>
								<a href="login.php"
								><span class="glyphicon glyphicon-log-in"></span>
								Login </a>
								</li>
							</ul>
            		</div>
           	 <!-- /.navbar-collapse -->
        		</div>
        	<!-- /.container -->
    </nav>
			
</div>
		
<!-- -------------------//////////////// End of NAVIGATION BAR //////////////--------------------- -->		



<!-- -----------------------------------CAROUSELS--------------------------------------------- -->
		<div class="container-fluid bg-grey">
		<div id="myCarousel1" class="carousel slide" >
			
			<div class="carousel-inner">
				
				<!-- ------register Button on slides----------- -->
							
				<form id="reg" action="register.php">									 
				 		<p><input type="submit" value="Register"/></p>
				</form>
					 
				<div class="item active" >
					<img  src="img/buisness5.jpeg" alt="img1" class="img-responsive">	
					<form id="reg1" >	
						<p id="quoteFont1"> register to create your account</p>			 
				 		
				 </form>
				
				</div>
							
				<div class="item">
					<img  src="img/buisness7.jpeg" alt="img2"   class="img-responsive">									
					<form id="reg2" >	
						<p id="quoteFont2"> register to create your account</p>			 
				 		
					 </form>
				</div>
				
				<div class="item " >
					<img  src="img/buisness6.jpeg" alt="img3" class="img-responsive">											
					<form id="reg3" ">	
						<p id="quoteFont3"> register to create your account</p>			 
				 		
				 	</form>
				</div>
				
			</div>
			
			
			
		</div>
		</div>
		
		
		<!-- ------------///////////// End of carousel /////////////// ------------------------- -->
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
<!-- ---------------------------------------HEADER ---------------------------------------------------->

		<header>
			<h1> Make your leads travel faster down the sales funnel </h1>
		</header>
		
		
		<br/>
		<br/>
		<br/>

<!-- ---------------------------------------SLIDING TEXT (COMMENTS)------------------------------------------- -->	
		
			
		<div class="container-fluid bg-grey">
  		
  		<div class="row">
    		
     
     <!----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%----->		
		
   		 
   		 <div class="col-sm-5">
			<div id="container">
    			<div id="slideshow" class="cycle-slideshow"
       				data-cycle-fx = "fade"
       				data-cycle-speed = "500"
       				data-cycle-timeout = "5000"
       				data-cycle-pager = "#pager"
       				data-cycle-pager-template ="<a herf='#'><img src='{{src}}' height=100 width=150/>"
       				data-cycle-next = "#next"
       				data-cycle-prev = "#prev"
       				data-cycle-manual-fx = "scrollHorz"
       				data-cycle-manual-speed = "400"
       				data-cycle-pager-fx = "fade">
        			<img src="img/buisness8.jpeg" alt="">
        			<img src="img/buisness2.jpeg" alt="">
        			<img src="img/buisness4.jpeg" alt="">
        			<img src="img/buisness9.jpg" alt="">
   				 </div>
    		</div>	
		  </div>
<!----------%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%----->		
      																

   		 	
   		 	<div id="comment" class="col-sm-6">           		    			
						<h1 align="center"> About Company page :</h1>
						<br/>
						<h2>SalesPlus is a Customer Relationship Management software addresses all your customer interface concerns, from sales and marketing to customer service and saving invaluable time and resources.
			 			</h2>
			 			<br/>
			 			<br/>
			 			
			        	<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo">
      					<span class="glyphicon glyphicon-collapse-down"></span>Read more
    					</button>
 						<div id="demo" class="collapse">
   								<h2> With SalesPlus CRM, you can collect customer support requests from different channels, assign cases to the appropriate team or agent, easily recall the best solutions to customer problems, escalate support cases when necessary, direct customers towards web-based solutions, conform to service-level agreements, and identify areas where service can be improved. 
								</h2>
						</div>
  			</div>
  		</div>
  		<br/>
  		<br/>
	<!-- -------------------------------we have got what u need----------------------------- -->
	
	    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">The sales funnel is a great measure of your company’s health. It provides a clear view of the opportunities currently available to your sales team, showing you the revenue that your team is going to make in the months ahead.</p>
                    <a href="register.php" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
	
	
	<!-- --------------------------------sliding comments ---------------------------- -->
		
<!-- ---------------------------------- SERVICES ------------------------------------------- ------>

	<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>                   
                    <hr class="primary">
                </div>                 
            </div>
        </div>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-list wow bounceIn text-primary"></i>
                        <h3>Pipeline</h3>
                        <p class="text-muted"> Deals are displayed by your different sales stages.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                       <i class="fa fa-4x fa-signal wow bounceIn text-primary"></i>
                        <h3>Statistics</h3>
                        <p class="text-muted">Know how much profit you gained or lost.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                      	<i class="fa fa-4x fa-comment wow bounceIn text-primary"></i>
                        <h3>Feedbacks</h3>
                        <p class="text-muted">Know more details about how your deals won or lost.</p>
                    </div>
                </div>
                
            </div>
          </div>
           
           <br/>
           <br/>
           
           <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">                  
                    <div class="service-box"> 
                       	<i class="fa fa-4x fa-calendar wow bounceIn text-primary"></i>
                        <h3>Activities</h3>
                        <p class="text-muted">Schedule your meetings.</p>
                    </div>
                </div>               
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">         
                         <i class="fa fa-4x fa-mobile wow bounceIn text-primary"></i>
                        <h3>Contacts</h3>
                        <p class="text-muted">Store the contacts who may intrested in buying your deals.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box"> 
                      	 <i class="fa fa-4x fa-user wow bounceIn text-primary"></i>
                        <h3>Good CRM</h3>
                        <p class="text-muted">Increase the revenue potential of your business by knowing who buys the more deals.</p>
                    </div>
                </div>
            </div>                   
        </div>
    </section>
	
	
<!--------------------------------- Contact info------------------------------------>
	<aside class="bg-dark">
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p> Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="feedback.php">feedback@salesplus.com</a></p>
                </div>
            </div>
        </div>
    </section>	
	</aside>

 <marquee  behaviour="alternate" bgcolor=" white" height="30px" > <b><a href="contactus1.html"><font color="black" size="3">Developed by Chethan sharma (www.salesplus.com)</font></a></b></marquee>	

 </body>

<!------js for animation--------->
 <script src="js/jquery.easing.min.js"></script>
 <script src="js/jquery.fittext.js"></script>
 <script src="js/wow.min.js"></script>

</html>