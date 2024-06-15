
<!DOCTYPE html>
<html>
<head>
<title>My Show </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/menu.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---- start-smoth-scrolling---->

</head>
<body>
    <div class="header-top-strip" id="home">
            <div class="container">
                <div class="header-top-left">
                    <p><a href="support.php">24/7 Customer Care</a> </p>
                        
                </div>
	<!-- header-section-starts -->
		<?php include 'accountinfo.php';?>
				<div class="header-top-right">
				<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Button trigger modal  -->
	<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Select a City</a>
	<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="select-city">
							<h3>Select Your City</h3>
							<select class="list_of_cities"><option value="">Select Your City</option>
								<option style="padding-left: 10px;" value="AMD">Ahmedabad</option>
								<option style="padding-left: 10px;" value="BHR">Baroda</option>
								<option style="padding-left: 10px;" value="BOM">Mumbai</option>
							</select>
							<div class="clearfix"></div>
						</div>
					</div>	
                    

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
				<!-- Large modal -->

<script>
$('#myModal').modal('show');
</script>
</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container">
		  <div class="main-content">
			<div class="header">
				<div class="logo">
					<a href="index.php"><h1>My Show</h1></a>
				</div>
				<div class="search">
					<div class="search2">
					  <form>
						<i class="fa fa-search"></i>
						 <input type="text" value="Search for a movie, play, event, sport or more" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for a movie, play, event, sport or more';}"/>
					  </form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
	<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation">
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->
        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                   	<li><a href="movies.php">Movies</a></li>
                   	<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">News<b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="press.php">Press coverage</a></li>
					</ul>
					<li><a href="contact.php">Meet Us</a></li>
				</li>

</ul>

<!-- end nav navbar-nav -->
                
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form id="contact1" action="#" name="contactform" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name1" class="form-control" placeholder="Name"> 
                                        <input type="text" name="email" id="email1" class="form-control" placeholder="Email"> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="phone1" class="form-control" placeholder="Phone">
                                        <input type="text" name="subject" id="subject1" class="form-control" placeholder="Subject"> 
                                    </div>                 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments1" rows="6" placeholder="Your Message ..."></textarea>
                                    </div>   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pull-right">
                                            <input type="submit" value="SEND" id="submit1" class="btn btn-primary small">
                                        </div>  
                                    </div>
									<div class="clearfix"></div>  
                                </form>
                            </li>
                        </ul>
					</li>
				</ul><!-- end nav navbar-nav navbar-right -->
			</div><!-- end #navbar-collapse-1 -->
            
			</nav><!-- end navbar navbar-default w3_megamenu -->
		</div><!-- end container -->
    

<!-- AddThis Smart Layers END -->


	<div class="main-banner">
		 <div class="banner col-md-8">
			<section class="slider">
				<div class="flexslider">
						<ul class="slides">
						<li>
							<img src="img/1.jpg" class="img-responsive" alt="" />
						</li>
						<li>
							<img src="img/2.jpg" class="img-responsive" alt="" />
						</li>
						<li>
							<img src="img/3.jpg" class="img-responsive" alt="" />
						</li>
						<li>
							<img src="img/4.jpg" class="img-responsive" alt="" />
						</li>
						<li>
							<img src="img/5.jpg" class="img-responsive" alt="" />
						</li>
                        
				  </ul>
				</div>
					</section>
				 <!-- FlexSlider -->
				 <script defer src="js/jquery.flexslider.js"></script>
				 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
					<script type="text/javascript">
				$(function(){
				 SyntaxHighlighter.all();
				});
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				 });
				});
			 </script>
         </div>
		 <div class="col-md-4 banner-right">
			<div id="myTabContent" class="tab-content">
				<div>
					<h5 class="pre">
					<i class="fa fa-heart"></i>Preferred Cinemas :<h5>
					<h6 class="ipre"><a href="#">PVR:Eva mall,Manjalpur </a> <a href="#"> CINEPOLIS:Inorbit mall,Subhanpura</h6>
				</h5>
				</h5>
			  </div>
			 </div>
		  </div>
		 </div>
		 <div class="clearfix"></div>
	</div>
				<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li>
				<a href="movies.php"><img src="icons/1.jpg" alt=""/></a>
				<div class="slide-title"><h4>Chhichhore </div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<div class="buy-tickets">
						<a href="shows/chhichhore.php">BUY TICKETS</a>
					</div>
				</div>
			</li>
			<li>
				<a href="movies.php"><img src="icons/2.jpg" alt=""/></a>
				<div class="slide-title"><h4>John Wick 3</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<div class="buy-tickets">
						<a href="shows/johnwick3.php">BUY TICKETS</a>
					</div>
				</div>
			</li>
			<li>
				<a href="movies.php"><img src="icons/3.jpg" alt=""/></a>
				<div class="slide-title"><h4>Dream Girl</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<div class="buy-tickets">
						<a href="shows/dreamgirl.php">BUY TICKETS</a>
					</div>
				</div>
			</li>
			<li>
				<a href="movies.php"><img src="icons/4.bmp" alt=""/></a>
				<div class="slide-title"><h4>Mission Mangal</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<div class="buy-tickets">
						<a href="shows/missionmangal.php">BUY TICKETS</a>
					</div>
				</div>
			</li>
			<li>
				<a href="movies.php"><img src="icons/5.jpg" alt=""/></a>
				<div class="slide-title"><h4>Spiderman Far From Home</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<div class="buy-tickets">
						<a href="shows/spiderman.php">BUY TICKETS</a>
					</div>
				</div>
			</li>
			<li>
				<a href="movies.php"><img src="icons/6.jpg" alt=""/></a>
				<div class="slide-title"><h4>Avengers Endgame</h4></div>
				<div class="date-city">
					<h5>Dec 12-15</h5>
					<div class="buy-tickets">
						<a href="avengers.php">BUY TICKETS</a>
					</div>
				</div>
			</li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:800,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
		<div class="footer-top-grid">
		<div class="list-of-movies col-md-8">
			<div class="tabs">
				<div class="sap_tabs">	
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <!--<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Now Playing</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Opening This Week</span></li>-->
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Comming Soon</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<ul class="tab_img">
									  <li>
										<div class="view view-first">
					   		  			  <a href="movie-select-show.php"> <img src="icons/comingsoon/1.jpg" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<a href="movie-select-show.php">Book Now</a>
													<div class="percentage-w-t-s">
														<h5>97</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
									  <li>
										<div class="view view-first">
					   		  			   <a href="movie-select-show.php"><img src="icons/comingsoon/2.jpg" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<a href="movie-select-show.php">Book Now</a>
													<div class="percentage-w-t-s">
														<h5>98</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
									  <li>
										<div class="view view-first">
					   		  			   <a href="movie-select-show.php"><img src="icons/comingsoon/3.jpg" class="img-responsive" alt=""/></a>
											 <div class="mask">
						                        <div class="info1"> </div>
								              </div>
								                <div class="tab_desc">
													<a href="movie-select-show.php">Book Now</a>
													<div class="percentage-w-t-s">
														<h5>100</h5>
														<p>% <br> Want to see</p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     	        					 	        					 
			     		    </div>	
                        </div>
					</div>
				</div>	
				<div class="clearfix"></div>
				
			</div>

			<div class="right-side-bar">
				<div class="top-movies-in-india">
					<h4>Top Movies in India</h4>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li></li>
						<li><a href="description/Avengers.php">Avengers Endgame</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li></li>
						<li><a href="description/spiderman.php">Spiderman Far from Home</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li></li>
						<li><a href="description/chhichhore.php">Chhichhore</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li></li>
						<li><a href="description/dreamgirl.php">Dream Girl</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li></li>
						<li><a href="description/missionmangal.php">Mission Mangal</a></li>
					</ul>
					<ul class="mov_list">
						<li><i class="fa fa-star"></i></li>
						<li></li>
						<li><a href="description/johnwick3.php">John Wick 3</a></li>
					</ul>
					
				</div>
				
			</div>
			<div class="clearfix"></div>			
			</div>
		
		</div>
		
			
			<div class="footer" style="background-color:#3E4449 ">
			<div class="clearfix"></div>
		<div class="col-md-12" >
			<div class="footer-right" >
				<div class="follow-us">
					<h5 class="f-head">Follow us</h5>
					<ul class="social-icons">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="subscribe">
					<h5 class="f-head">Subscribe to our newsletters</h5>
					<input type="text" class="text" value="Enter Email ID" onfocus="this.value = '';" onblur="if (this.value == 'Enter email...') {this.value = 'Enter Email ID';}">
					<input type="submit" value="submit">
					<div class="clearfix"></div>
				</div>
				<div class="recent_24by7">
					
					<a href="support.php"><i class="fa fa-question"></i>24/7 Customer Care</a>
				</div>
					<div class="clearfix"></div>
			</div>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			
</body>
</html>