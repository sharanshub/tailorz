<?php
	session_start();
	require "config.php"; // Database Connection
	
	$id=$_SESSION['Vid'];
		$sql=$dbo->prepare("SELECT * FROM `email` WHERE Id='".$id."'");
		$sql->execute();
		$row=$sql->fetch();
		
		$sql1=$dbo->prepare("SELECT * FROM `phone` WHERE Id='".$id."'");
		$sql1->execute();
		$row1=$sql1->fetch();
		
		
					

?>



<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sands Zenith" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	 

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />

    <!-- Document Title
    ============================================= -->
	<title>Details</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }

    </style>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
        ============================================= -->
    <div id="top-bar">

            <div class="container clearfix">

                <div class="col_half nobottommargin hidden-xs">

                    <p class="nobottommargin" style="font-weight:bold; color:black" ><strong style="font-weight:bold; color:green">Call Us : </strong> 1800-547-2145 | <strong style="font-weight:bold; color:green">Email Us:</strong> info@mytailorz.com  <span class="blink_me leftmargin" style="color:green">Use Code MYDRESS to get upto 30% off on your orders  !</span></p>

                </div>

                <div class="col_half col_last fright nobottommargin">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul>
						<li style="font-weight:bold; color:green">
						<a href="#" data-scrollto="#content" data-href="#content" data-speed="1500" data-offset="-40" style="font-weight:bold; color:green">How It Works</a></li>
                            <li><a href="#" style="font-weight:bold; color:green">Dress Makers</a>
                                 
                            </li>
                            
                            <li><a href="#">Customer Login</a>
                                
                                
                            </li>
                        </ul>
                    </div><!-- .top-links end -->

                </div>

            </div>

        </div><!-- #top-bar end -->
		<!-- Header
		============================================= -->
  <header id="header">

            <div id="header-wrap">

 
            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="pics/logo.jpg"><img src="pics/logo.jpg" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="pics/logo.jpg"><img src="pics/logo.jpg" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <ul class="header-extras">
				
				<li>
 
	<div id="contact-form-result" data-notify-type="success"  ></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform"  role="form" method="post" action="search.php">
 
								<div class="form-process"></div>
								 
								<div class="col_one_third">
									 <select  name="cat" id="interest"  tabindex="" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value="">Your Location </option>
                                    
									<option value="Blouses">Blouses</option>
                                                <option value="Salwar Kameez">Salwar Kameez</option>
                                                <option value="ETHINIC">Ethnic</option>
                                                <option value="SAREE WORKS">Saree Works</option>
                                                <option value="WESTERN">Western</option>
                                </select></div>
								
								 
								
								<div class="col_one_third ">
									 
                                <select  name="cat" id="interest"  tabindex="9" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value=""> Select Type </option>
                                    
									<option value="Blouses">Blouses</option>
                                                <option value="Salwar Kameez">Salwar Kameez</option>
                                                <option value="ETHINIC">Ethnic</option>
                                                <option value="SAREE WORKS">Saree Works</option>
                                                <option value="WESTERN">Western</option>
                                </select>
								
								 
								</div>
								
								
									<div class="col_one_third col_last">
									   <button type="submit"  class="button button-rounded button-reveal">Search Tailor <i class=" icon-search"></i></button>
                        </div>
								 
								 

								<div class="clear"></div>

								 

							

							</form>
							<script type="text/javascript">
											function onSelectChange1()
											{
												var str=document.getElementById('location');
												if(str.value=='OTHER'){
													document.getElementById('text').style.visibility='visible';
												}
												else
													document.getElementById('text').style.visibility='hidden';
												
											}


										</script>

							 

 
				</li>
				 
                    
                    
                </ul>

            </div>

            </div>

        </header><!-- #header end -->

       

        <!-- Content
        ============================================= -->

</div>
<script>
  $(".event-links header").click(function () {
    var box = $(".event-links");
    if(!box.hasClass("up")){
      box.animate({"bottom":"0px"}, 500);
      box.addClass("up");
    } else {
      box.animate({"bottom":"-265px"}, 500);
      box.removeClass("up");
    }

  });
</script>
<section id="content">


                <div class="container clearfix">
				 
                
										<div class="fancy-title title-dotted-border">
							<h3>Registration Details</h3>
						</div>

						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Submitted Successfully!"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="tailordtl.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Vendor Name<small>*</small></label>
								<input type="text" id="nameofvt" name="nameovt" value="<?php echo $row['name'] ;?>" class="sm-form-control required" />
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-email">Proprietor Name <small>*</small></label>
								<input type="text" id="nameofpp" name="nameofpp" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-email">Shop Name<small>*</small></label>
								<input type="text" id="shopname" name="nameovt" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="mob1" name="mob1" value="<?php echo $row1['Phone'] ;?>" class="sm-form-control" />
							</div>
							
							
							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="mail" name="mail" value="<?php echo $row['Email'] ;?>" class="required email sm-form-control" />
							</div>
							
																<div class="col_one_third col_last">
								<label for="template-contactform-phone">Upload Photo</label>
								<input type="file" id="photo" name="photo" value="" class="sm-form-control" placeholder="" />
							</div>

							

							
							
							<div class="col_full">
								<label for="template-contactform-name">Shop Address<small>*</small></label>
								<input type="textarea" id="saddress" name="addr1" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-name">Landmark <small>*</small></label>
								<input type="text" id="landmark" name="landmark" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third">
									<?php
												require "config.php"; // Database Connection
                                                echo '<select name="location" id="location" placeholder="Any" onChange="onSelectChange1()" >';
												echo'  <option value="OTHER">Any</option>';
												$sql="select * from loc "; // Query to collect records
												foreach ($dbo->query($sql) as $row) {
													echo "<option value=".$row['LocId'].">".$row['LocNm']."</option>"; // Format for adding options 
													
												}
													echo "</select>";
													$dbo=null;
											?>
											</div>

						
							
						<div class="col_one_third col_last">
							<label for="template-contactform-service">City</label>
								<select name="city" id="package" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Bangalore</option>
									
								</select></div>
								
									<div class="clear"></div>
								
								<div class="col_one_third">
							<label for="template-contactform-service">State</label>
								<select name="state" id="package" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Karnataka</option>
									
								</select></div>
							
							<div class="col_one_third">
								<label for="template-contactform-phone">Zip Code</label>
								<input type="text" id="zip" name="zip" value="" class="sm-form-control" />
							</div>
							
								<div class="col_one_third col_last">
								<label for="template-contactform-phone">Experience In Years</label>
								<input type="text" id="exp" name="exp" value="" class="sm-form-control" />
							</div>
							
								<div class="clear"></div>
									<div class="col_one_third">
							<label for="template-contactform-service">Kilometer Coverage</label>
								<select  name="km" id="package" class="sm-form-control" required>
									<option value="">-- Select One --</option>
									<option value="three">3</option>
									<option value="four">4</option>
									<option value="five">5</option>
									<option value="ten">10</option>
									<option value="fif">15</option>
									
								</select></div>
								
									<div class="col_one_third">
							<label for="template-contactform-service">Average Delivery Time</label>
								<select name="day" id="package" class="sm-form-control" required>
									<option value="">-- Select One --</option>
									<option value="one">1</option>
									<option value="two">2</option>
									<option value="three">3</option>
									<option value="four">4</option>
									<option value="five">5</option>
									<option value="six">6</option>
									<option value="seven">7</option>
									
								</select></div>
								
									<div class="col_one_third col_last">
							<label for="template-contactform-service">Do you provide Same Day Delivery</label>
								<select name="sdd" id="package" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="yes">Yes</option>
									<option value="no">No</option>
									
									
								</select></div>
								
								
									<div class="clear"></div>
									
													<div class="fancy-title title-dotted-border">
							<h3>License Details</h3>
							
							
						</div>
						
						<div class="col_one_third">
								<label for="template-contactform-phone">License No:</label>
								<input type="text" id="license-no" name="licenseno" value="" class="sm-form-control" />
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Details of Licensing Authority</label>
								<input type="text" id="details-of-licensing-authority" name="licensingauthority" value="" class="sm-form-control" />
							</div>
							
								<div class="col_one_third col_last">
								<label for="template-contactform-name">Validity Period</label>
								<input type="text" id="validity-period" name="validityperiod" value="" class="sm-form-control" placeholder="YYYY-MM-DD" />
							</div>
							
									
									<div class="clear"></div>
									
													<div class="fancy-title title-dotted-border">
							<h3>Measurement Person Details</h3>
							
							
						</div>
						
							<div class="col_one_third ">
								<label for="template-contactform-name">Name</label>
								<input type="text" id="uname" name="uname" value="" class="sm-form-control" placeholder="" />
							</div>
							
								<div class="col_one_third">
								<label for="template-contactform-phone">Age</label>
								<input type="text" id="age" name="age" value="" class="sm-form-control" placeholder="" />
							</div>
							
								<div class="col_one_third col_last">
							<label for="template-contactform-service">Gender</label>
								<select id="genm" name="genm" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="female">Female</option>
									<option value="male">Male</option>
									<option value="others">Others</option>
									
									
								</select></div>
								
									<div class="clear"></div>
									
										<div class="col_one_third">
								<label for="template-contactform-phone">Phone No</label>
								<input type="text" id="mobno1" name="mobno1" value="" class="sm-form-control" placeholder="" />
							</div>
							
											<div class="col_one_third">
								<label for="template-contactform-phone">Upload Image</label>
								<input type="file" id="img1" name="img1" value="" class="sm-form-control" placeholder="" />
							</div>
							
											<div class="col_one_third col_last">
								<label for="template-contactform-phone">Identity & Address Proof</label>
								<input type="file" id="img2" name="img2" value="" class="sm-form-control" placeholder="" />
							</div>
								<div class="clear"></div>
							
							<div class="fancy-title title-dotted-border">
							<h3>Delivery Person Details</h3>
							
							
						</div>
						
							<div class="col_one_third ">
								<label for="template-contactform-name">Name</label>
								<input type="text" id="named" name="named" value="" class="sm-form-control" placeholder="" />
							</div>
							
								<div class="col_one_third">
								<label for="template-contactform-phone">Age</label>
								<input type="text" id="aged" name="aged" value="" class="sm-form-control" placeholder="" />
							</div>
							
								<div class="col_one_third col_last">
							<label for="template-contactform-service">Gender</label>
								<select id="gend" name="gend" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="fem1">Female</option>
									<option value="mal1">Male</option>
									<option value="others">Others</option>
									
									
								</select></div>
								
									<div class="clear"></div>
									
										<div class="col_one_third">
								<label for="template-contactform-phone">Phone No</label>
								<input type="text" id="mobd" name="mobd" value="" class="sm-form-control" placeholder="" />
							</div>
							
											<div class="col_one_third">
								<label for="template-contactform-phone">Upload Photo</label>
								<input type="file" id="imgd" name="imgd" value="" class="sm-form-control" placeholder="" />
							</div>
							
																	<div class="col_one_third col_last">
								<label for="template-contactform-phone">Identity & Address Proof</label>
								<input type="file" id="idp" name="idp" value="" class="sm-form-control" placeholder="" />
							</div>
							
									<div class="clear"></div>
									
																<div class="fancy-title title-dotted-border">
							<h3>Other Details</h3>
							
							
						</div>
							
																<div class="col_one_third">
								<label for="template-contactform-phone">Upload Design Image 1</label>
								<input type="file" id="di1" name="di1" value="" class="sm-form-control" placeholder="" />
							</div>
							
																<div class="col_one_third">
								<label for="template-contactform-phone">Upload Design Image 2</label>
								<input type="file" id="di2" name="di2" value="" class="sm-form-control" placeholder="" />
							</div>
																<div class="col_one_third col_last">
								<label for="template-contactform-phone">Upload Design Image 3</label>
								<input type="file" id="di3" name="di3" value="" class="sm-form-control" placeholder="" />
							</div>
																	<div class="col_two_third col_last">
								<label for="template-contactform-phone">Small Description</label>
								<input type="textarea" id="des" name="des" value="" class="sm-form-control" placeholder="" />
							</div>
						
							
						
						
							
								



							<div class="clear"></div>

							<div class="col_full">
								<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit</button>
							</div>

						</form>

					

					
                             
                         
                      
					
                   

				   
				   
            


           </div>

</section>		   
		 
			 <!-- Footer
        ============================================= --> 
        <footer id="footer" class="dark" style="background-color:#5e0000">

            

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half" style="color:white">
                        Copyrights &copy; 2015 All Rights Reserved by mytailorz India.<br>
                        <div class="copyright-links">Designed By : <a href="#" style="color:#fff">Sands Zenith</a></div>
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="#" class="social-icon si-small si-borderless si-facebook" style="color:white">
                                <i class="icon-facebook" style="color:white"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter" style="color:white"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus" style="color:white"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest" style="color:white"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo" style="color:white"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github" style="color:white"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo" style="color:white"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin" style="color:white"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                        <div class="clear" ></div>
<div style="color:white">
                        <i class="icon-envelope2" style="color:white"></i> info@mytailorz.com <span class="middot" style="color:white">&middot;</span> <i class="icon-headphones" style="color:white"></i>  012 - 234 - 345 <span class="middot" style="color:white">&middot;</span> <i class="icon-skype2" style="color:white"></i> mytailorzOnSkype
                    </div>
					</div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>
<script>
  $(".event-links header").click(function () {
    var box = $(".event-links");
    if(!box.hasClass("up")){
      box.animate({"bottom":"0px"}, 500);
      box.addClass("up");
    } else {
      box.animate({"bottom":"-265px"}, 500);
      box.removeClass("up");
    }

  });
</script>
</body>
</html>