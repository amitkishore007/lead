<?php

include_once'db.php';
$error = '';

if(isset($_POST['submit'])){

  $company_name=$_POST['company_name'];
    $person_name=$_POST['person_name'];
    $regis_date=$_POST['regis_date'];
    $company_website=$_POST['company_website'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $sub_city=$_POST['sub_city'];
    $company_address=$_POST['company_address'];
    $about_company=$_POST['about_company'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $code=$_POST['code'];
    $password=$_POST['password'];
   
$q1="insert into partner (company_name,person_name,regis_date,company_website,country,state,city,sub_city,company_address,about_company,email,mobile,password,code) values('$company_name', '$person_name', '$regis_date', '$company_website', '$country', '$state', '$city', '$sub_city', '$company_address', '$about_company','$email','$mobile','$password','$code')";
$ar=ExecuteQuery($q1);



  
    
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.html" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<!-- Page Title Here -->
<title>CargoZone - Transport and Cargo Template</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-7.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">
<link rel="stylesheet" type="text/css" href="css/switcher.css"/>
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="bg">
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header-style-5 darked">
        <!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="index.html"><img src="images/logo7.png" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse nav-dark">
                        <ul class=" nav navbar-nav">
                            <li class="active"> <a href="join-us.html">Join as Partners<i class="fa fa-chevron-down"></i></a>
                                
                                    </li>
                                <li class="active"> <a href="login-1.html">Log In<i class="fa fa-chevron-down"></i></a>
                                
                                    </li>      
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        
        <!-- Slider END -->
        <!-- Our Awesome Services -->
        <div class="section-full awesome-services-4 bg-white p-t70 p-b30">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div style="height:20px;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center m-b20">
                            
                            <div style="margin:20px 50px;"><h2 class="h2"> Give Wings to Your Business through  <span class="text-primary">Logisticmart.com</span></h2>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <div class="clear"></div>
                            <p class="m-b0"></p></div>
                            
                      
                            
                            <div class="p-lr40 p-t30 p-b40 clearfix mack-an-appointment black">
                                <form method="POST" class="dzForm" action="join-us.php">
                                    <input type="hidden" value="Appoinment" name="dzToDo" >
                                    <div class="row">
                                        <div class="text-white text-center m-b30">
                                            <h2 class=" m-t0 m-b10 ">Personal <span class="text-primary">Details  </span></h2>
                                            <div class="dez-separator-outer">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p class="title-small ">Empower your logistic business by registering your company with us and make your services available to millions.</p>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="company_name" class="form-control" placeholder="Company Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="person_name" class="form-control" placeholder="Contact Person" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="regis_date" class="form-control" placeholder="Company Register Date" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="company_website" class="form-control" placeholder="Company Website" type="text">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="bs-select-hidden" name="country" >
                                                 <option value="">Select Country</option>
                                               <?php 
                 $q="select * from countries";
               $ar=ExecuteQueryResule($q);
               
               foreach ($ar as $k) {
                
               
                      ?>
                                                     
												 <option><?php echo $k['name'];?></option>
                                              <?php
                                              }
                                                ?>
										
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="bs-select-hidden" name="state" >
                                                    <option>Select State</option>
                                                      <?php 
                 $q="select * from states";
               $sr=ExecuteQueryResule($q);
               
               foreach ($sr as $s) {
                
               
                      ?>
                                              
														<option><?php echo $s['name']; ?></option>
														<?php
                                                    }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="bs-select-hidden" name="city"
                                                 > 
                                                 <option value="">Select City</option>
                                                   <?php 
                 $q="select * from cities";
               $cr=ExecuteQueryResule($q);
               
               foreach ($cr as $c) {
                
               
                      ?>
                                                    <option value=""><?php echo $c['name']; ?></option>	
                                                    <?php
                                                }
                                                    ?>	
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                              <div class="form-group">
                                                <input name="sub_city" class="form-control" placeholder="sub city" type="text">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="company_address" rows="4" class="form-control" placeholder="Company Address" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="about_company" rows="4" class="form-control" placeholder="About Company" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                       
                                        
                                        
                                        
                        
                                       
						
                        <div class="col-sm-12">
                       
                        	
                             <h2 class=" m-t0 m-b10 ">  <span class="text-primary">Login Details  </span></h2>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                        	<input type="email" class="form-control" name="email" id="user_email" placeholder="Company email" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                        	<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Company Phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                        	<input type="password" class="form-control" name="password" id="usr_pass" placeholder="Password">
                            </div>
                        </div>
                       
                        <div class="col-sm-6">
                        	<div class="form-group">
                        	<input type="password" class="form-control" name="code" id="security_code" placeholder="Security Code">
                            </div>
                        </div>
                                        
                                        
                                        
                               <!--   <div class="col-sm-6" style="text-align: left;">
                        	<div class="g-recaptcha" data-sitekey="6LfAkSMUAAAAAFu5nxeZabCEIGs-NIoNBOVy-Plm"></div>                       </div>    -->    
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                            
                                        
                                        
                                        
                                        <div class="col-md-12 text-center">
                                        
                                            <input name="submit"  type="submit" class="site-button skew-secondry" value="Register Now!">



                                            <a href="login-1.html">Login Here </a>
                                            <span style="color:#fff;">* Your details will be Confidential</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                                 

                        <div class="col-md-12 col-sm-12 section-full bg-gray our-schedule p-t70 owl-nav-none p-b40">
                            <div class="row">
                        <div style="    text-align: center;"><h2 class="h2"> Why Join  <span class="text-primary">Logisticmart</span></h2>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <div class="clear"></div>
                            <p class="m-b0"></p></div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 90px;">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-shopping-basket"></i></div>
                                        <div class="icon-content">
                                            
                                            <p>Global Platform to grow logistic business with minimum amount of investment</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 90px;">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-truck"></i></div>
                                        <div class="icon-content">
                                             
                                            <p>Easy accessibility to global logistic services seekers</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 90px;">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-map-marker"></i></div>
                                        <div class="icon-content">
                                             
                                            <p>	Contact with the professional logistic companies abroad for shifting goods hassle free</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 90px;">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-user"></i></div>
                                        <div class="icon-content">
                                            
                                            <p> 	Best online platform for marketing and advertisement of the logistic company</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 90px;">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-laptop"></i></div>
                                        <div class="icon-content">
                                                
                                            <p>Free multiple quotes for their logistic requirements</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30" style="height: 90px;">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-gift"></i></div>
                                        <div class="icon-content">
                                          
                                            <p>	Contact with the customer directories with no middle interference</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
        <!-- Book Now -->
        
            
       
        <!-- Book Now END -->
        <!-- Our Activities  -->
            
        
        <!-- Our Activities END -->
        <!-- Latest blog -->
        
        <!-- Latest blog END -->
        <!-- Testimonials -->
        
        <!-- Testimonials End -->
        <!-- Client logo -->
        
        <!-- Client logo END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer" >
        <div class="footer-top text-white footer-image overlay-black-dark bg-img-fix" style="background-image:url(images/background/bg4.jpg); background-position:top; background-attachment:fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <h4 class="m-b15 ">About Us</h4>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-white style-liner"></div>
                            </div>
                            <p class="m-t15"> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus.  cons ectetur elit. Vestibulum nec odios Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec.</p>
                            <p class="m-t10"> Lorem ipsum dolor sit amet, cons ectetur elit.</p>
                            <ul class="dez-social-icon border">
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 ">Usefull Links</h4>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-white style-liner"></div>
                            </div>
                            <ul>
                                <li><a href="services-2.html">Course Price Lists</a></li>
                                <li><a href="services-2.html">Drive School İnfo</a></li>
                                <li><a href="services-2.html">Our Vehicle Lİst</a></li>
                                <li><a href="services-2.html">Usefull Link 01</a></li>
                                <li><a href="services-2.html">Our Support Team</a></li>
                                <li><a href="services-2.html">FAQS </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_gallery">
                            <h4 class="m-b15">Gallery of School</h4>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-white style-liner"></div>
                            </div>
                            <ul>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic1.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic2.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic3.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic4.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic5.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic6.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic7.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic8.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="images/gallery/pic1.jpg" alt=""></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget ">
                            <h4 class="m-b15">Contact us</h4>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-white style-liner"></div>
                            </div>
                            <ul class="widget_getintuch">
                                <li><i class="fa fa-map-marker"></i><strong class="text-white">address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="fa fa-phone"></i><strong class="text-white">phone</strong>0800-123456 (24/7 Support Line)</li>
                                <li><i class="fa fa-fax"></i><strong class="text-white">FAX</strong>(123) 123-4567<br/>
                                    000 123 2294 089</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-info-box clearfix p-tb30 p-lr15">
                    <div class="col-md-6 col-sm-6">
                        <form role="search" method="post" class="newsletter">
                            <strong class="text-white font-18 font-weight-600">Sign our Newsletter</strong>
                            <div class="input-group m-t10">
                                <input name="text" class="form-control" placeholder="Your Email Id" type="text">
                                <span class="input-group-btn">
                                <button type="submit" class="site-button font-weight-600">Subscribe</button>
                                </span> </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="text-right">
                            <ul class="dez-social-icon border">
                                <li><a class="fa fa-facebook text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-pinterest-p text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-instagram text-primary" href="javascript:void(0);"></a></li>
                            </ul>
                            <p class="text-right m-t10 m-b0">Copyright © CargoZone 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript"  src="js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript"  src="js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript"  src="js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript"  src="js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript"  src="js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript"  src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript"  src="js/custom.min.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->
<script type="text/javascript"  src="js/switcher.min.js"></script>
<script type="text/javascript"  src="js/dz.ajax.js"></script>
<!-- contact-us js -->
<!-- revolution JS FILES -->
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"  src="js/rev.slider.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_5();
});	/*ready*/
</script>
<div id="loading-area"></div>
<!-- Style Switcher -->
<!-- Style Switcher End -->
</body>

<!-- Mirrored from dexignzone.com/zone/CargoZone/xhtml/cargo-home-style-5.html?theme=css/skin/skin-1 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2017 11:24:46 GMT -->
</html>

