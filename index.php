<?php
include_once'db.php';
$db = GetConnection();
$error = '';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
   
    $email=$_POST['email'];
    $date=$_POST['date'];
    $city=$_POST['city'];

    $message=$_POST['message'];
    
	$q1="insert into demo (name,email,date,city,message) values('{$name}','{$email}','{$city}','{$date}','{$message}')";
$c=ExecuteQuery($q1);
if($c)
{
	echo"data insert successfully";
  }

else
{
	echo"error";
}
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
<title>Demo</title>
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
                            <li class="active"> <a href="join-us.html">Join as Partners<i class="fa fa-chevron-down"></i></a>                                    </li>
                                <li class="active"> <a href="login-1.html">Log In<i class="fa fa-chevron-down"></i></a>                                    </li>    
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
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="dz_rev_slider_5_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_5" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                <!-- SLIDE  -->
                                <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide4.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
										id="slide-100-layer-1" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption Newspaper-Subtitle  text-primary tp-resizeme" 
											id="slide-100-layer-2" 
											data-x="['left','left','left','left']" 
											data-hoffset="['50','50','50','30']" 
											data-y="['top','top','top','top']" 
											data-voffset="['250','200','270','180']" 
											data-fontsize="['40','35','20','20']"
											data-lineheight="['45','40','25','25']"
											data-width="['800','800','800','420']"
											data-height="none"
											data-whitespace="nowrap"
								 
											data-type="text" 
											data-responsive_offset="on" 

											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 7; white-space: nowrap;text-transform:left; font-family:'roboto',sans-serif; font-weight:500;">Transport World Wide </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption Newspaper-Title   tp-resizeme" 
											id="slide-100-layer-3" 
											data-x="['left','left','left','left']" 
											data-hoffset="['50','50','50','30']" 
											data-y="['top','top','top','top']" 
											data-voffset="['310','260','300','210']" 
											data-fontsize="['80','80','50','30']"
											data-lineheight="['85','85','55','35']"
											data-width="['1000','1000','1000','420']"
											data-height="none"
											data-whitespace="normal"
								 
											data-type="text" 
											data-responsive_offset="on" 

											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[10,10,10,10]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 6; white-space: normal;text-transform:left; font-weight:400; line-height:80px; font-family:'roboto',sans-serif; color:#fff;">Welcome <span class="text-primary"> Logistic</span></div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption Newspaper-Title   tp-resizeme" 
											id="slide-100-layer-4" 
											data-x="['left','left','left','left']" 
											data-hoffset="['50','50','50','30']" 
											data-y="['top','top','top','top']" 
											data-voffset="['400','370','370','260']" 
											data-fontsize="['16','15','14','13']"
											data-lineheight="['22','22','22','22']"
											data-width="['700','600','600','420']"
											data-height="none"
											data-whitespace="normal"
								 
											data-type="text" 
											data-responsive_offset="on" 

											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[10,10,10,10]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 6; white-space: normal;text-transform:left; line-height:80px; color:#fff; font-family:'roboto',sans-serif">The Easiest way to find and hire best logistic service providers .</div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption" 
											id="slide-100-layer-5" 
											data-x="['left','left','left','left']" data-hoffset="['53','53','60','30']" 
											data-y="['top','top','top','top']" data-voffset="['520','470','470','370']" 
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-responsive_offset="on" 
											data-responsive="off"
											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="#" class="site-button ">READ MORE </a> </div>
                                    <div class="tp-caption" 
											id="slide-100-layer-6" 
											data-x="['left','left','left','left']" data-hoffset="['200','200','200','180']" 
											data-y="['top','top','top','top']" data-voffset="['520','470','470','370']" 
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-responsive_offset="on" 
											data-responsive="off"
											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="#" class="site-button-secondry">Contact Us</a> </div>
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slide6.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " 
										id="slide-200-layer-1" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
										data-width="full"
										data-height="full"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption Newspaper-Subtitle  text-primary tp-resizeme" 
											id="slide-200-layer-2" 
											data-x="['left','left','left','left']" 
											data-hoffset="['50','50','50','30']" 
											data-y="['top','top','top','top']" 
											data-voffset="['250','200','270','180']" 
											data-fontsize="['40','35','20','20']"
											data-lineheight="['45','40','25','25']"
											data-width="['800','800','800','420']"
											data-height="none"
											data-whitespace="nowrap"
								 
											data-type="text" 
											data-responsive_offset="on" 

											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 7; white-space: nowrap;text-transform:left; font-family:'roboto',sans-serif; font-weight:400;">Transport World Wide </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption Newspaper-Title   tp-resizeme" 
											id="slide-200-layer-3" 
											data-x="['left','left','left','left']" 
											data-hoffset="['50','50','50','30']" 
											data-y="['top','top','top','top']" 
											data-voffset="['310','260','300','210']" 
											data-fontsize="['80','80','50','30']"
											data-lineheight="['85','85','55','35']"
											data-width="['1000','1000','1000','420']"
											data-height="none"
											data-whitespace="normal"
								 
											data-type="text" 
											data-responsive_offset="on" 

											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[10,10,10,10]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 6; white-space: normal;text-transform:left; font-weight:400; line-height:80px; font-family:'roboto',sans-serif; color:#FFF;">Welcome <span class="text-primary"> CargoZone</span></div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption Newspaper-Title   tp-resizeme" 
											id="slide-200-layer-4" 
											data-x="['left','left','left','left']" 
											data-hoffset="['50','50','50','30']" 
											data-y="['top','top','top','top']" 
											data-voffset="['400','370','370','260']" 
											data-fontsize="['16','15','14','13']"
											data-lineheight="['22','22','22','22']"
											data-width="['700','600','600','420']"
											data-height="none"
											data-whitespace="normal"
								 
											data-type="text" 
											data-responsive_offset="on" 

											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[10,10,10,10]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 6; white-space: normal;text-transform:left; line-height:80px; color:#FFF; font-family:'roboto',sans-serif">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption" 
											id="slide-200-layer-5" 
											data-x="['left','left','left','left']" data-hoffset="['53','53','60','30']" 
											data-y="['top','top','top','top']" data-voffset="['520','470','470','370']" 
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-responsive_offset="on" 
											data-responsive="off"
											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="#" class="site-button">READ MORE </a> </div>
                                    <div class="tp-caption" 
											id="slide-200-layer-6" 
											data-x="['left','left','left','left']" data-hoffset="['200','200','200','180']" 
											data-y="['top','top','top','top']" data-voffset="['520','470','470','370']" 
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"
											data-responsive_offset="on" 
											data-responsive="off"
											data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
											data-textAlign="['left','left','left','left']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="#" class="site-button-secondry">Contact Us</a> </div>
                                </li>
                                <!-- SLIDE  -->
                            </ul>
                            <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- Our Awesome Services -->
        <div class="section-full awesome-services-4 bg-white p-t70 p-b30">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center section-head">
                            <h2 class="h2"> Our <span class="text-primary">Services</span></h2>
                            <div class="dez-separator-outer">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <div class="clear"></div>
                            <p class="m-b0"> List down your company to find Importers, to post Selling Leads and to receive competitive freight quotes. Use our platform for requesting regular competitive freight quotes which will also list your company on the top of the directory..</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12 text-center m-b20">
                            <div class="p-lr40 p-t30 p-b40 clearfix mack-an-appointment black">
                                <form method="post" class="dzForm" action="index.php">
                                    <input type="hidden" value="Appoinment" name="dzToDo" >
                                    <div class="row">
                                        <div class="text-white text-center m-b30">
                                            <h2 class=" m-t0 m-b10 ">Book <span class="text-primary">Now </span></h2>
                                            <div class="dez-separator-outer">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p class="title-small "> Check out the complete list of most recent buy trade leads posted on our websites. </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="name" class="form-control" placeholder="Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" class="form-control" placeholder="Email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="date" class="form-control" placeholder="Enter Date" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="bs-select-hidden" name="city" >

                                                    <option value="Yoda">Select City</option>
                                                  <?php 
                 $q="select * from cities";
               $cr=ExecuteQueryResule($q);
               
               foreach ($cr as $c) {
                
               
                      ?>

                                     <option value="Wait Loss"><?php  echo $c['name'];?></option>
                                               <?php
                                               }
                                               
                                               ?>                              


                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="message" rows="4" class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                           
                                            <button name="submit" type="submit" value="Submit" class="site-button skew-secondry"><span>Submit</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 ">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-shopping-basket"></i></div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">Packers And Movers</h5>
                                            <p>Get the latest buy requirements and export your products worldwide .</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-truck"></i></div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">Car Transportation</h5>
                                            <p>Get the latest buy requirements and export your products worldwide .</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-map-marker"></i></div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">Hire Truck Tempo</h5>
                                           <p>Get the latest buy requirements and export your products worldwide .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-user"></i></div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">Cargo</h5>
                                            <p>Get the latest buy requirements and export your products worldwide .</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-laptop"></i></div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">Transport</h5>
                                           <p>Get the latest buy requirements and export your products worldwide .</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                                        <div class="icon-bx-xs radius bg-primary"><i class="fa fa-gift"></i></div>
                                        <div class="icon-content">
                                            <h5 class="dez-tilte text-uppercase">Warehouse</h5>
                                            <p>Get the latest buy requirements and export your products worldwide .</p>
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
        <div class="section-full bg-gray our-schedule p-t70 owl-nav-none p-b40">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center section-head">
                            <h2 class="h2">Book <span class="text-primary">Now</span></h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-primary style-liner"></div>
                            </div>
                            <div class="clear"></div>
                            <p class="m-b0">List down your company to find Importers, to post Selling Leads and to receive competitive freight quotes. Use our platform for requesting regular competitive freight quotes which will also list your company on the top of the directory.</p>
                        </div>
                    </div>
                    
                    
                    
                    <div class="section-content ">
                    <div class="row equal-wraper">
                        <div class="col-md-3 col-sm-3 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-services/pic4.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Packers and Movers</a></h3>
                                    </div>
                                   
                                    <div class="dez-post-text">
                                       <p>Get the latest buy requirements and export your products worldwide.</p>
                                    </div>
                                     <div class="m-t10">   
                                    
                                    
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg site-button radius-xl m-r5" data-toggle="modal" data-target="#myModal">
  Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <h4 class="modal-title text-center">GET INSTANT LOGISTIC COMPANIES DEALS, COST &amp; RATINGS <!--<span id="services_in_popup" >Packers and Movers </span> Services--></h4>
        </div>
        <div class="modal-body">
       <h3 class="text-center mhide"><i>Just answer few questions below to get best deals from professional logistic companies such as packers and movers, car transportation, cargo, transport and warehouse. </i></h3>
            
            <form method="post" id="ask_question" name="ask_question">
                    <input type="hidden" class="form-control services" name="pop_form_select_city" id="pop_form_select_city"  >
                     <input type="hidden" class="form-control services" name="pop_services" id="pop_services" >
                     <input type="hidden" class="form-control services" name="pop_services_id" id="pop_services_id" >
                     <input type="hidden" class="form-control services" name="pop_sub_service" id="pop_sub_service" >
                     <input type="hidden" class="form-control services" name="pop_sub_service_id" id="pop_sub_service_id" >
                     <input type="hidden" class="form-control services" name="page" id="page" value="home" >
                     
                    <!-- <input type="hidden" name="pop_select_city" id="pop_select_city"  >
                     <input type="hidden" name="pop_select_service" id="pop_select_service" > -->
                     <div class="row popupinput">
                    	<div class="col-sm-4">
                        	<h3 class="head3">City</h3>
                            <div class="form-group">
                            <select name="selected_city" id="selected_city" class="form-control">
                            <option value="-1" selected="selected">select your city</option>
                                                                     
								<?php $q = "SELECT * FROM cities ORDER BY name ASC"; ?>
                                 <?php $result = mysql_query($q); ?>	
                                 <?php if($result): ?>
                                 	<?php if(mysql_num_rows($result)): ?>

										<?php while($row = mysql_fetch_assoc($result)): ?>
											<option value="<?php echo htmlentitile($row['name']); ?>"><?php echo htmlentities($row['name']); ?></option>
										<?php endwhile; ?>
	                                 <?php endif; ?>
                                 <?php endif; ?>

                               
                                                                  
                            </select>
                        	</div>
                        </div>
                        <div class="col-sm-4">
                        	<h3 class="head3">Service</h3>
                            <div class="form-group">
                            <select name="selected_service" id="selected_service" class="form-control">
                             <option value="-1" selected="selected">Select your service</option>
                                                                      <option value="11">Packers And Movers</option>
                             	                                     <option value="16">Car Transportation</option>
                             	                                     <option value="50">Hire Truck Tempo</option>
                             	                                     <option value="15">Cargo</option>
                             	                                     <option value="18">Transport</option>
                             	                                     <option value="14">Warehouse</option>
                             	                                    
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        	<h3 class="head3">Sub Service</h3>
                            <div class="form-group">
                            <select name="selected_sub_service" id="selected_sub_service" class="form-control">
                             <option value="-1" selected="selected">Select sub service</option>
                                									  <option value="1">House Shifting</option>
								  
							 									  <option value="2">Office Shifting</option>
								  
							 									  <option value="3">Local Shifting</option>
								  
							 									  <option value="4">Furniture Shifting</option>
								  
							 									  <option value="5">Pet Moving</option>
								  
							 									  <option value="6">Internation Moving</option>
								  
							 									  <option value="7">Four Wheeler</option>
								  
							 									  <option value="8">Two Wheeler</option>
								  
							 									  <option value="9">Luxury</option>
								  
							 									  <option value="10">International</option>
								  
							 									  <option value="72">Car & Households</option>
								  
							 									  <option value="73">Luxury Bike</option>
								  
							 									  <option value="11">Mini Truck</option>
								  
							 									  <option value="12">Tempo</option>
								  
							 									  <option value="68">Hire Labour</option>
								  
							 									  <option value="69">Tata Ace</option>
								  
							 									  <option value="70">Mini Tempo</option>
								  
							 									  <option value="71">Tempo & Labour</option>
								  
							                                     
                            </select>
                        </div>
                      </div>
                    </div> 
                     <div id="error-choice"></div>
                   <button type="submit" id="hide-btn-validate" class="btn btn-success btn-center" > <a href="Hire-Truck.html">Lets Started</a></button>
                    <!--<input type="button" id="hide-btn-validate" class="btn btn-success btn-center" onClick="check_city_service();" value="Lets Started">-->
					
					
					                </form>
            
            
            
      </div>
      <div class="modal-footer">
        
          
          <br>
             <div class="row popico">
              <div class="col-sm-4">
                 <i class="fa fa-pencil-square"></i><span>Answer a few Questions</span>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-inr"></i><p style="text-align: center;">Get Quote</p>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-user"></i><span>Hire a Right Professional</span>
                </div>
             </div>
        
          
          
          
          
          
          
          
          
          
          
          
          
      </div>
    </div>
  </div>
</div>
                                    
                                    
       </div>                         </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3 ">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-services/pic4.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Car Transportation </a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                        <p>Get the latest buy requirements and export your products worldwide .</p>
                                    </div>
                                    <div class="m-t10">   
                                    
                                    
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg site-button radius-xl m-r5" data-toggle="modal" data-target="#myModal">
  Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <h4 class="modal-title text-center">GET INSTANT LOGISTIC COMPANIES DEALS, COST &amp; RATINGS <!--<span id="services_in_popup" >Packers and Movers </span> Services--></h4>
        </div>
        <div class="modal-body">
       <h3 class="text-center mhide"><i>Just answer few questions below to get best deals from professional logistic companies such as packers and movers, car transportation, cargo, transport and warehouse. </i></h3>
            
            <form method="post" id="ask_question" name="ask_question">
                    <input type="hidden" class="form-control services" name="pop_form_select_city" id="pop_form_select_city"  >
                     <input type="hidden" class="form-control services" name="pop_services" id="pop_services" >
                     <input type="hidden" class="form-control services" name="pop_services_id" id="pop_services_id" >
                     <input type="hidden" class="form-control services" name="pop_sub_service" id="pop_sub_service" >
                     <input type="hidden" class="form-control services" name="pop_sub_service_id" id="pop_sub_service_id" >
                     <input type="hidden" class="form-control services" name="page" id="page" value="home" >
                     
                    <!-- <input type="hidden" name="pop_select_city" id="pop_select_city"  >
                     <input type="hidden" name="pop_select_service" id="pop_select_service" > -->
                     <div class="row popupinput">
                    	<div class="col-sm-4">
                        	<h3 class="head3">City</h3>
                            <div class="form-group">
                            <select name="selected_city" id="selected_city" class="form-control">
                            <option value="-1" selected="selected">select your city</option>
                                                                      <option value="Ahmedabad">Ahmedabad</option>
                                                                   <option value="Bangalore">Bangalore</option>
                                                                   <option value="Chandigarh">Chandigarh</option>
                                                                   <option value="Chennai">Chennai</option>
                                                                   <option value="Delhi">Delhi</option>
                                                                   <option value="Faridabad">Faridabad</option>
                                                                   <option value="Gurgaon">Gurgaon</option>
                                                                   <option value="Hyderabad">Hyderabad</option>
                                                                   <option value="Jaipur">Jaipur</option>
                                                                   <option value="Kolkata">Kolkata</option>
                                                                   <option value="Mumbai">Mumbai</option>
                                                                   <option value="Noida">Noida</option>
                                                                   <option value="Pune">Pune</option>
                                                                   <option value="Vadodara">Vadodara</option>
                                                                  
                            </select>
                        	</div>
                        </div>
                        <div class="col-sm-4">
                        	<h3 class="head3">Service</h3>
                            <div class="form-group">
                            <select name="selected_service" id="selected_service" class="form-control">
                             <option value="-1" selected="selected">Select your service</option>
                                                                      <option value="11">Packers And Movers</option>
                             	                                     <option value="16">Car Transportation</option>
                             	                                     <option value="50">Hire Truck Tempo</option>
                             	                                     <option value="15">Cargo</option>
                             	                                     <option value="18">Transport</option>
                             	                                     <option value="14">Warehouse</option>
                             	                                    
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        	<h3 class="head3">Sub Service</h3>
                            <div class="form-group">
                            <select name="selected_sub_service" id="selected_sub_service" class="form-control">
                             <option value="-1" selected="selected">Select sub service</option>
                                									  <option value="1">House Shifting</option>
								  
							 									  <option value="2">Office Shifting</option>
								  
							 									  <option value="3">Local Shifting</option>
								  
							 									  <option value="4">Furniture Shifting</option>
								  
							 									  <option value="5">Pet Moving</option>
								  
							 									  <option value="6">Internation Moving</option>
								  
							 									  <option value="7">Four Wheeler</option>
								  
							 									  <option value="8">Two Wheeler</option>
								  
							 									  <option value="9">Luxury</option>
								  
							 									  <option value="10">International</option>
								  
							 									  <option value="72">Car & Households</option>
								  
							 									  <option value="73">Luxury Bike</option>
								  
							 									  <option value="11">Mini Truck</option>
								  
							 									  <option value="12">Tempo</option>
								  
							 									  <option value="68">Hire Labour</option>
								  
							 									  <option value="69">Tata Ace</option>
								  
							 									  <option value="70">Mini Tempo</option>
								  
							 									  <option value="71">Tempo & Labour</option>
								  
							                                     
                            </select>
                        </div>
                      </div>
                    </div> 
                     <div id="error-choice"></div>
                    <!--<button type="submit" id="hide-btn-validate" class="btn btn-success btn-center" onclick="check_city_service();">Lets Started</button> -->
                    <input type="button" id="hide-btn-validate" class="btn btn-success btn-center" onClick="check_city_service();" value="Lets Started">                </form>
            
            
            
      </div>
      <div class="modal-footer">
        
          
          <br>
             <div class="row popico">
              <div class="col-sm-4">
                 <i class="fa fa-pencil-square"></i><span>Answer a few Questions</span>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-inr"></i><p style="text-align: center;">Get Quote</p>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-user"></i><span>Hire a Right Professional</span>
                </div>
             </div>
        
          
          
          
          
          
          
          
          
          
          
          
          
      </div>
    </div>
  </div>
</div>
                                    
                                    
       </div>
                                </div>
                            </div>
                        </div>
                      <div class="col-md-3 col-sm-3 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-services/pic2.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Hire Truck Tempo</a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                          <p>Get the latest buy requirements and export your products worldwide .</p>
                                    </div>
                                    <div class="m-t10">   
                                    
                                    
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg site-button radius-xl m-r5" data-toggle="modal" data-target="#myModal">
  Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <h4 class="modal-title text-center">GET INSTANT LOGISTIC COMPANIES DEALS, COST &amp; RATINGS <!--<span id="services_in_popup" >Packers and Movers </span> Services--></h4>
        </div>
        <div class="modal-body">
       <h3 class="text-center mhide"><i>Just answer few questions below to get best deals from professional logistic companies such as packers and movers, car transportation, cargo, transport and warehouse. </i></h3>
            
            <form method="post" id="ask_question" name="ask_question">
                    <input type="hidden" class="form-control services" name="pop_form_select_city" id="pop_form_select_city"  >
                     <input type="hidden" class="form-control services" name="pop_services" id="pop_services" >
                     <input type="hidden" class="form-control services" name="pop_services_id" id="pop_services_id" >
                     <input type="hidden" class="form-control services" name="pop_sub_service" id="pop_sub_service" >
                     <input type="hidden" class="form-control services" name="pop_sub_service_id" id="pop_sub_service_id" >
                     <input type="hidden" class="form-control services" name="page" id="page" value="home" >
                     
                    <!-- <input type="hidden" name="pop_select_city" id="pop_select_city"  >
                     <input type="hidden" name="pop_select_service" id="pop_select_service" > -->
                     <div class="row popupinput">
                    	<div class="col-sm-4">
                        	<h3 class="head3">City</h3>
                            <div class="form-group">
                            <select name="selected_city" id="selected_city" class="form-control">
                            <option value="-1" selected="selected">select your city</option>
                                                                      <option value="Ahmedabad">Ahmedabad</option>
                                                                   <option value="Bangalore">Bangalore</option>
                                                                   <option value="Chandigarh">Chandigarh</option>
                                                                   <option value="Chennai">Chennai</option>
                                                                   <option value="Delhi">Delhi</option>
                                                                   <option value="Faridabad">Faridabad</option>
                                                                   <option value="Gurgaon">Gurgaon</option>
                                                                   <option value="Hyderabad">Hyderabad</option>
                                                                   <option value="Jaipur">Jaipur</option>
                                                                   <option value="Kolkata">Kolkata</option>
                                                                   <option value="Mumbai">Mumbai</option>
                                                                   <option value="Noida">Noida</option>
                                                                   <option value="Pune">Pune</option>
                                                                   <option value="Vadodara">Vadodara</option>
                                                                  
                            </select>
                        	</div>
                        </div>
                        <div class="col-sm-4">
                        	<h3 class="head3">Service</h3>
                            <div class="form-group">
                            <select name="selected_service" id="selected_service" class="form-control">
                             <option value="-1" selected="selected">Select your service</option>
                                                                      <option value="11">Packers And Movers</option>
                             	                                     <option value="16">Car Transportation</option>
                             	                                     <option value="50">Hire Truck Tempo</option>
                             	                                     <option value="15">Cargo</option>
                             	                                     <option value="18">Transport</option>
                             	                                     <option value="14">Warehouse</option>
                             	                                    
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        	<h3 class="head3">Sub Service</h3>
                            <div class="form-group">
                            <select name="selected_sub_service" id="selected_sub_service" class="form-control">
                             <option value="-1" selected="selected">Select sub service</option>
                                									  <option value="1">House Shifting</option>
								  
							 									  <option value="2">Office Shifting</option>
								  
							 									  <option value="3">Local Shifting</option>
								  
							 									  <option value="4">Furniture Shifting</option>
								  
							 									  <option value="5">Pet Moving</option>
								  
							 									  <option value="6">Internation Moving</option>
								  
							 									  <option value="7">Four Wheeler</option>
								  
							 									  <option value="8">Two Wheeler</option>
								  
							 									  <option value="9">Luxury</option>
								  
							 									  <option value="10">International</option>
								  
							 									  <option value="72">Car & Households</option>
								  
							 									  <option value="73">Luxury Bike</option>
								  
							 									  <option value="11">Mini Truck</option>
								  
							 									  <option value="12">Tempo</option>
								  
							 									  <option value="68">Hire Labour</option>
								  
							 									  <option value="69">Tata Ace</option>
								  
							 									  <option value="70">Mini Tempo</option>
								  
							 									  <option value="71">Tempo & Labour</option>
								  
							                                     
                            </select>
                        </div>
                      </div>
                    </div> 
                     <div id="error-choice"></div>
                    <!--<button type="submit" id="hide-btn-validate" class="btn btn-success btn-center" onclick="check_city_service();">Lets Started</button> -->
                    <input type="button" id="hide-btn-validate" class="btn btn-success btn-center" onClick="check_city_service();" value="Lets Started">                </form>
            
            
            
      </div>
      <div class="modal-footer">
        
          
          <br>
             <div class="row popico">
              <div class="col-sm-4">
                 <i class="fa fa-pencil-square"></i><span>Answer a few Questions</span>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-inr"></i><p style="text-align: center;">Get Quote</p>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-user"></i><span>Hire a Right Professional</span>
                </div>
             </div>
        
          
          
          
          
          
          
          
          
          
          
          
          
      </div>
    </div>
  </div>
</div>
                                    
                                    
       </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-services/pic1.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Import Export Goods</a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                          <p>Get the latest buy requirements and export your products worldwide .</p>
                                    </div>
									<div class="m-t10">   
                                    
                                    
                                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg site-button radius-xl m-r5" data-toggle="modal" data-target="#myModal">
  Book Now
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <h4 class="modal-title text-center">GET INSTANT LOGISTIC COMPANIES DEALS, COST &amp; RATINGS <!--<span id="services_in_popup" >Packers and Movers </span> Services--></h4>
        </div>
        <div class="modal-body">
       <h3 class="text-center mhide"><i>Just answer few questions below to get best deals from professional logistic companies such as packers and movers, car transportation, cargo, transport and warehouse. </i></h3>
            
            <form method="post" id="ask_question" name="ask_question">
                    <input type="hidden" class="form-control services" name="pop_form_select_city" id="pop_form_select_city"  >
                     <input type="hidden" class="form-control services" name="pop_services" id="pop_services" >
                     <input type="hidden" class="form-control services" name="pop_services_id" id="pop_services_id" >
                     <input type="hidden" class="form-control services" name="pop_sub_service" id="pop_sub_service" >
                     <input type="hidden" class="form-control services" name="pop_sub_service_id" id="pop_sub_service_id" >
                     <input type="hidden" class="form-control services" name="page" id="page" value="home" >
                     
                    <!-- <input type="hidden" name="pop_select_city" id="pop_select_city"  >
                     <input type="hidden" name="pop_select_service" id="pop_select_service" > -->
                     <div class="row popupinput">
                    	<div class="col-sm-4">
                        	<h3 class="head3">City</h3>
                            <div class="form-group">
                            <select name="selected_city" id="selected_city" class="form-control">
                            <option value="-1" selected="selected">select your city</option>
                                                                      <option value="Ahmedabad">Ahmedabad</option>
                                                                   <option value="Bangalore">Bangalore</option>
                                                                   <option value="Chandigarh">Chandigarh</option>
                                                                   <option value="Chennai">Chennai</option>
                                                                   <option value="Delhi">Delhi</option>
                                                                   <option value="Faridabad">Faridabad</option>
                                                                   <option value="Gurgaon">Gurgaon</option>
                                                                   <option value="Hyderabad">Hyderabad</option>
                                                                   <option value="Jaipur">Jaipur</option>
                                                                   <option value="Kolkata">Kolkata</option>
                                                                   <option value="Mumbai">Mumbai</option>
                                                                   <option value="Noida">Noida</option>
                                                                   <option value="Pune">Pune</option>
                                                                   <option value="Vadodara">Vadodara</option>
                                                                  
                            </select>
                        	</div>
                        </div>
                        <div class="col-sm-4">
                        	<h3 class="head3">Service</h3>
                            <div class="form-group">
                            <select name="selected_service" id="selected_service" class="form-control">
                             <option value="-1" selected="selected">Select your service</option>
                                                                      <option value="11">Packers And Movers</option>
                             	                                     <option value="16">Car Transportation</option>
                             	                                     <option value="50">Hire Truck Tempo</option>
                             	                                     <option value="15">Cargo</option>
                             	                                     <option value="18">Transport</option>
                             	                                     <option value="14">Warehouse</option>
                             	                                    
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        	<h3 class="head3">Sub Service</h3>
                            <div class="form-group">
                            <select name="selected_sub_service" id="selected_sub_service" class="form-control">
                             <option value="-1" selected="selected">Select sub service</option>
                                									  <option value="1">House Shifting</option>
								  
							 									  <option value="2">Office Shifting</option>
								  
							 									  <option value="3">Local Shifting</option>
								  
							 									  <option value="4">Furniture Shifting</option>
								  
							 									  <option value="5">Pet Moving</option>
								  
							 									  <option value="6">Internation Moving</option>
								  
							 									  <option value="7">Four Wheeler</option>
								  
							 									  <option value="8">Two Wheeler</option>
								  
							 									  <option value="9">Luxury</option>
								  
							 									  <option value="10">International</option>
								  
							 									  <option value="72">Car & Households</option>
								  
							 									  <option value="73">Luxury Bike</option>
								  
							 									  <option value="11">Mini Truck</option>
								  
							 									  <option value="12">Tempo</option>
								  
							 									  <option value="68">Hire Labour</option>
								  
							 									  <option value="69">Tata Ace</option>
								  
							 									  <option value="70">Mini Tempo</option>
								  
							 									  <option value="71">Tempo & Labour</option>
								  
							                                     
                            </select>
                        </div>
                      </div>
                    </div> 
                     <div id="error-choice"></div>
                    <!--<button type="submit" id="hide-btn-validate" class="btn btn-success btn-center" onclick="check_city_service();">Lets Started</button> -->
                    <input type="button" id="hide-btn-validate" class="btn btn-success btn-center" onClick="check_city_service();" value="Lets Started">                </form>
            
            
            
      </div>
      <div class="modal-footer">
        
          
          <br>
             <div class="row popico">
              <div class="col-sm-4">
                 <i class="fa fa-pencil-square"></i><span>Answer a few Questions</span>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-inr"></i><p style="text-align: center;">Get Quote</p>
                </div>
                <div class="col-sm-4">
                 <i class="fa fa-user"></i><span>Hire a Right Professional</span>
                </div>
             </div>
        
         
      </div>
    </div>
  </div>
</div>
                                    
                                    
       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div> 
            </div>
        </div>
        <!-- Book Now END -->
        <!-- Our Activities  -->
        <div class="section-full bg-img-fix p-t70 p-b50 overlay-black-dark our-projects-galery" style="background-image:url(images/background/bg1.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2  class="h2">Our Transport Services</h2>
                    <div class="dez-separator-outer">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>
                    <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                </div>
                <div class="site-filters text-center  clearfix">
                    <ul class="filters" role="tablist">
                        <li role="presentation" class="active"><a href="#music" class=" site-button white radius-xl" aria-controls="home" role="tab" data-toggle="tab"> Air Frieght</a></li>
                        <li role="presentation"><a href="#spanish" aria-controls="profile" class=" site-button white radius-xl" role="tab" data-toggle="tab">Sea Frieght</a></li>
                        <li role="presentation"><a href="#lunch" class=" site-button white radius-xl" aria-controls="messages" role="tab" data-toggle="tab">Train Frieght</a></li>
                        <li role="presentation"><a href="#swimming" class=" site-button white radius-xl" aria-controls="settings" role="tab" data-toggle="tab">Road Frieght</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" id="music">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 ">
                                <div class="text-left text-white">
                                    <h2 class="m-b10">Air Frieght</h2>
                                    <div class="dez-separator-outer">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                </div>
                                <ol class="list-num-count text-white">
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                </ol>
                                <div class="m-t10"> <a href="#" class="site-button">Read more</a> </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="dez-post-media dez-img-effect zoom-slow m-t20"> <a href="javascript:;"><img src="images/our-work/pic1.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="spanish">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-left text-white">
                                    <h2 class="m-b10">Sea Frieght</h2>
                                    <div class="dez-separator-outer">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                   <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                </div>
                                <ol class="list-num-count text-white">
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                </ol>
                                <div class="m-t10"> <a href="#" class="site-button ">Read more</a> </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="dez-post-media dez-img-effect zoom-slow m-t20"> <a href="javascript:;"><img src="images/our-work/pic2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="lunch">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-left text-white">
                                    <h2 class="m-b10">Train Frieght</h2>
                                    <div class="dez-separator-outer">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                   <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                </div>
                                <ol class="list-num-count text-white">
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                </ol>
                                <div class="m-t10"> <a href="#" class="site-button ">Read more</a> </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="dez-post-media dez-img-effect zoom-slow m-t20"> <a href="javascript:;"><img src="images/our-work/pic3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="swimming">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="text-left text-white">
                                    <h2 class="m-b10">Road Frieght</h2>
                                    <div class="dez-separator-outer">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                   <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                </div>
                                <ol class="list-num-count text-white">
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                    <li>We are the first company in India that has revolutionized the way people hire logistic service.</li>
                                </ol>
                                <div class="m-t10"> <a href="#" class="site-button ">Read more</a> </div>
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="dez-post-media dez-img-effect zoom-slow m-t20"> <a href="javascript:;"><img src="images/our-work/pic4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Activities END -->
        <!-- Latest blog -->
        <div class="section-full p-t70 p-b20 ">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="h2">Why <span class="text-primary"> Demo Company</span></h2>
                    <div class="dez-separator-outer">
                        <div class="dez-separator bg-primary style-liner"></div>
                    </div>
                    <p>Find the Verified and Professional Logistic Companies in India.</p>
                </div>
                <div class="section-content ">
                    <div class="row equal-wraper">
                        <div class="col-md-4 col-sm-4 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-work/pic3.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Title of first</a></h3>
                                    </div>
                                   
                                    <div class="dez-post-text">
                                       <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3 ">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-work/pic2.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Title of first </a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                        <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 equal-col m-b30">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="images/our-work/pic1.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Title of first</a></h3>
                                    </div>
                                    
                                    <div class="dez-post-text">
                                          <p>We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
       
        <!-- Testimonials End -->
        <!-- Client logo -->
        <div class="section-full dez-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <p class="m-t15"> We are the first company in India that has revolutionized the way people hire logistic service. Find hundreds of people waiting to hire you after joining us.</p>
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
                                <li><a href="javascript:void(0);">Demo</a></li>
                             <li><a href="javascript:void(0);">Demo</a></li>
                            <li><a href="javascript:void(0);">Demo</a></li>
                                <li><a href="javascript:void(0);">Demo</a></li>>
                             <li><a href="javascript:void(0);">Demo</a></li>
                                 <li><a href="javascript:void(0);">Demo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_gallery">
                            <h4 class="m-b15">Gallery </h4>
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
                                <li><i class="fa fa-map-marker"></i><strong class="text-white">address</strong> demo address dwarka mor </li>
                                <li><i class="fa fa-phone"></i><strong class="text-white">phone</strong>9555369588 (24/7 Support Line)</li>
                                
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
                            <p class="text-right m-t10 m-b0">Copyright © Demo Company 2017</p>
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


</html>
