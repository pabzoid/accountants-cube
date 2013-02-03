<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" id="view" content="width=device-width minimum-scale=1, maximum-scale=1" />

  <title><?php 
  
    if(isset($title)){
        echo $title;
    }
  
  ?> | JambiCube</title>
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/style1.css">
<link rel="stylesheet" href="stylesheets/color1.css">
  
  <!-- Google Fonts --> 
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'> 
 
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  <script src="javascripts/modernizr.foundation.js"></script> 
    
  <!-- Slider Revolution JS FILES  -->
  <script type="text/javascript" src="plugins/slider-revolution/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="plugins/slider-revolution/jquery.themepunch.revolution.min.js"></script>
  
  <!-- Tooltips -->
  <script type="text/javascript" src="javascripts/jquery.tipsy.js"></script>
  
  <!-- CarouFredSel plugin -->
  <script type="text/javascript"  src="javascripts/jquery.carouFredSel-6.0.3-packed.js"></script>
  <!-- optionally include helper plugins -->
  <script type="text/javascript"  src="javascripts/jquery.touchSwipe.min.js"></script>
    
  <!-- Scripts Initialize -->
  <script src="javascripts/app-head.js"></script> 
  

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  



</head>
<body onload="initialize()">
<!-- Region 1 Wrap -->

  <div class="container region1wrap">  
         
     <!-- Top Header -->
  	<div class="row top_header">
    
        <div class="six columns">
        
    				

   	    </div>
        
        <div class="six columns">
        
        	<!--<ul class="top_social">
  				<li><a class="has-tipsy" href="http://twitter.com/" title="Twitter"><img src="images/social/Twitter.png" alt="Twitter"></a></li>
  				<li><a class="has-tipsy" href="http://www.facebook.com/" title="Facebook"><img src="images/social/Facebook.png" alt="Facebook"></a></li>
  				<li><a class="has-tipsy" href="http://google.com/" title="Google"><img src="images/social/Google.png" alt="Google+"></a></li>
                <li><a class="has-tipsy" href="http://www.LinkedIn.com/" title="LinkedIn"><img src="images/social/LinkedIn.png" alt="LinkedIn"></a></li>
                <li><a class="has-tipsy" href="http://www.Flickr.com/" title="Flickr"><img src="images/social/Flickr.png" alt="Flickr"></a></li>
                <li><a class="has-tipsy" href="http://vimeo.com/" title="Vimeo"><img src="images/social/Vimeo.png" alt="Vimeo"></a></li>
  				<li><a class="has-tipsy" href="http://www.rss.com/" title="RSS"><img src="images/social/RSS.png" alt="RSS"></a></li>
			</ul>-->

		</div>
    
  	</div>
    <!-- End Top Header -->
    
  </div>
  
<!-- End Region 1 Wrap -->

<!-- Region 2 Wrap -->

<div class="container region2wrap">
  
	<div class="row">
    
    	<!-- Logo -->
            
    	<div class="three columns">

        	<a href="/" id="logo"><h1>Accountant<span>Spark</span></h1></a>
        
  		</div>
        
        <!-- End Logo -->
        
        <!-- Main Navigation -->
        
        <div class="nine columns">

			<nav class="top-bar">
        
    			<ul>
      				<!-- Toggle Button Mobile -->
      				<li class="name">
        			<h1><a href="#"> Please select your page</a></h1>
      				</li>
      				<li class="toggle-topbar"><a href="#"></a></li>
                    <!-- End Toggle Button Mobile -->
    			</ul>
