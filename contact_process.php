<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="UTF-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" id="view" content="width=device-width minimum-scale=1, maximum-scale=1" />

  <title>TouchM :: Premium Multipurpose Responsive Theme</title>
  
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
  
  <!-- Contact form validation -->
  <script type="text/javascript"  src="javascripts/jquery.validate.min.js"></script>
  
  <!-- CarouFredSel plugin -->
  <script type="text/javascript"  src="javascripts/jquery.carouFredSel-6.0.3-packed.js"></script>
  <!-- optionally include helper plugins -->
  <script type="text/javascript"  src="javascripts/jquery.touchSwipe.min.js"></script>
  
  <!-- Titan Lightbox -->
  <script type="text/javascript" src="plugins/titan/js/prettify.js"></script>
  <script type="text/javascript" src="plugins/titan/js/jquery.titanlighbox.js"></script>	
  
  <!-- Scripts Initialize -->
  <script src="javascripts/app-head.js"></script> 
   
  <!-- GOOGLE Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&language=en"></script>
  
  <script type="text/javascript">
  // GOOGLE MAPS
      function initialize() {

		  var mapOptions = {
    		zoom: 14,
    		center: new google.maps.LatLng(37.771008, -122.41175),
    		mapTypeControl: true,
   			mapTypeControlOptions: {
      			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    			},
    		zoomControl: true,
    		zoomControlOptions: {
      			style: google.maps.ZoomControlStyle.SMALL
    			},
    		mapTypeId: google.maps.MapTypeId.ROADMAP
  			}
  		var map = new google.maps.Map(document.getElementById("map_canvas"),
      	mapOptions);
      }  
  </script>
  

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
        
    				<ul class="link-list">
  						<li><a href="#">Order Now</a></li>
  						<li><a href="#">Pricing</a></li>
  						<li><a href="#">Site Map</a></li>
					</ul> 
  			
  				
    				<div class="login user-control">
            			Hello, <a href="#"> John Smith<span class="notification">4</span></a>
            		</div>


   	    </div>
        
        <div class="six columns">
        
        	<ul class="top_social">
  				<li><a href="http://twitter.com/" title="Twitter"><img src="images/social/Twitter.png" alt="Twitter"></a></li>
  				<li><a href="http://www.facebook.com/" title="Facebook"><img src="images/social/Facebook.png" alt="Facebook"></a></li>
  				<li><a href="http://google.com/" title="Google"><img src="images/social/Google.png" alt="Google+"></a></li>
                <li><a href="http://www.LinkedIn.com/" title="LinkedIn"><img src="images/social/LinkedIn.png" alt="LinkedIn"></a></li>
                <li><a href="http://www.Flickr.com/" title="Flickr"><img src="images/social/Flickr.png" alt="Flickr"></a></li>
                <li><a href="http://vimeo.com/" title="Vimeo"><img src="images/social/Vimeo.png" alt="Vimeo"></a></li>
  				<li><a href="http://www.rss.com/" title="RSS"><img src="images/social/RSS.png" alt="RSS"></a></li>
			</ul>

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

        	<a href="index.html" id="logo"><h1>Touch<span>M</span></h1></a>
        
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



      			<section><!-- Nav Section -->
      			<ul class="right">
        
        			<li class="has-dropdown">
          				<a href="index.html">Home</a>
          				<ul class="dropdown">
            				<li><a href="index.html">Home Page - Default</a></li>
            				<li><a href="index-type1.html">Home Page Type 1</a></li>
                            <li><a href="index-type2.html">Home Page Type 2</a></li>
                            <li class="has-dropdown"><a href="index-alternative.html">TouchM Sliders</a>
                            	<ul class="dropdown">
            						<li><a href="index.html">Slider Revolution</a></li>
            						<li><a href="index-flexi.html">Flexislider</a></li>
                                    <li><a href="index-camera.html">Camera Slider</a></li>
                                </ul>
                            </li>
          				</ul>
        			</li>
        
        			<li class="has-dropdown">
        				<a  href="#">Features</a>
            			<ul class="dropdown">
            				<li><a href="about.html">About Us</a></li>
            				<li><a href="services.html">Services</a></li>
            				<li><a href="pricing.html">Pricing Tables</a></li>
            				<li><a href="shortcodes.html">Shortcodes</a></li>
            				<li><a href="notfound.html">404 Not Found</a></li>
            				<li><a href="under-construction.html">Under Construction</a></li>
            				<li class="has-dropdown"><a href="#">Third Navigation Level</a>
            					<ul class="dropdown">
            						<li><a href="#">This is a simple example</a></li>
            						<li><a href="#">Of the Third Level</a></li>
               					</ul>
            				</li>
            			</ul>        
        			</li>
        
        			<li class="has-dropdown">
          				<a href="#">Blog</a>
          					<ul class="dropdown">
                            	<li><a href="blog_sidebar_right.html">Blog Default</a></li>
                            	<li><a href="blog_type1.html">Blog Type 1</a></li>
                                <li><a href="blog_type2.html">Blog Type 2</a></li>         
            					<li><a href="blog_sidebar_right.html">Sidebar Right</a></li>
            					<li><a href="blog_sidebar_left.html">Sidebar Left</a></li>
            					<li><a href="blog_inner.html">Single Post</a></li>
          					</ul>
        			</li>
        
        			<li class="has-dropdown">
          				<a href="#">Portfolio</a>
          					<ul class="dropdown">             
            					<li><a href="portfolio_default.html">Portfolio Default (4 Columns)</a></li>         
            					<li><a href="portfolio_type1.html" class="">Portfolio 2 Columns</a></li>
            					<li><a href="portfolio_type2.html">Portfolio 3 Columns</a></li> 
                                <li><a href="portfolio_default.html">Portfolio 4 Columns</a></li>            
            					<li><a href="single-project.html">Single Project</a></li>
          					</ul>
        			</li>
        
        			<li><a class="active" href="contact.html">Contact</a></li>
        
      			</ul>
                </section><!-- End Nav Section -->

  			</nav>            
        
    	</div>
        
        <!-- End Main Navigation -->         
        
	</div>
    
</div>
  
<!-- End Region 2 Wrap -->

<!-- Region 3 Wrap -->

  <div class="container region3wrap">  
  
    
    <!-- Content Top -->  
  	<div class="row content_top">
        
    	<div class="nine columns">
       
			<ul class="breadcrumbs">
 				<li><a href="index.html">Home</a></li>
  				<li><a href="#">Pages</a></li>
  				<li class="current"><a href="#">Contact</a></li>
			</ul>

		</div>
        
        <div class="three columns">

			<div class="row">
 				<div class="twelve columns">
    				<div class="row collapse top_search">
      					<div class="ten mobile-three columns">
        					<input type="text" placeholder="Enter search terms" />
      					</div>
      					<div class="two mobile-one columns">
        					<a href="#" class="button icon-search"></a>
      					</div>
    				</div>
  				</div>
			</div>

		</div>
        
  	</div>
    <!-- End Content Top -->
    
  </div>
  
<!-- End Region 3 Wrap -->

<!-- Region 4 Wrap -->

  <div class="container region4wrap">
  
  	<div class="row maincontent contact">
    
    	<div class="twelve columns">
        	
        	<div class="page_title">
        
        		<div class="row">
            	
            		<div class="twelve columns">
        				<h1>We love to stay in touch</h1>
            		</div>
            
            	</div>
                
        	</div>
        
        </div>
        
        <div class="twelve columns">        	
            <div class="map_location">
        		<div id="map_canvas"></div>
            </div>        
        </div>
       
       <div class="four columns">
       
       		<h3>Head Office</h3>
       		<p>Use the map above to get more information about our main office.</p>
            <div class="contact-details">
            	<p><span>Address:</span> 008 Quickers Street, Cupertino, CA, 12345</p>
            	<p><span>Phone:</span> (123) 456-7890</p>
            	<p><span>Fax:</span> (123) 456-7890</p>
            	<p><span>E-mail:</span> office@touchm.com</p>
            </div> 
                  
       </div>
       
       <div class="eight columns">
			
            <h3>Send us a message</h3>
			<form class="contactForm" method="POST" action="contact/process-form.php">
				<div id="status"></div>
				<div class="row">
					<div class="four columns">
						<label for="contactname">Name</label>
						<?php if(isset($nameError) && $nameError != ''): ?><span class="errorarr"><?php echo $nameError;?></span><?php endif;?>
						<input type="text" name="name" id="contactname" />
					</div>
					<div class="four columns">
					<label for="contactemail">E-mail</label>
					 <?php if(isset($emailError) && $emailError != ''): ?><span class="errorarr"><?php echo $emailError;?></span><?php endif;?>
					<input type="text" name="email" id="contactemail" />
					</div>
					<div class="four columns">
					<label for="contactsubject">Subject</label>
					<input type="text" name="subject" id="contactsubject" />
					</div>
				</div>
				<div class="row">
					<div class="twelve columns">
					<label for="contactmessage">Message</label>
					<?php if(isset($messageError) && $messageError != ''): ?><span class="errorarr"><?php echo $messageError;?></span><?php endif;?>
					<textarea id="contactmessage" name="message"></textarea>
					</div>
				</div>
				<input type="submit" class="medium button" value="Submit" name="send" />            
			</form>
       
       </div>
        
  	</div>
    
  </div>
  
<!-- End Region 4 Wrap -->

<!-- Region 9 Wrap -->

  <div class="container region9wrap">
  
  	 <!-- Bottom Content -->
    <div class="row content_bottom">
    
    	<!-- // // // // // // // // // // -->
        
    	<div class="eight columns">
       
			<h2>Sign up for our newsletter</h2>
            <p>Keep up-to-date with the latest news and updates by subscribing to our newsletter.</p>
            
		</div>
        
        <!-- // // // // // // // // // // -->
        
        <div class="four columns">
			<div class="row collapse newsletter-input">
				<div class="eight mobile-three columns">
					<input type="text" placeholder="Enter your email address" />
				</div>
				<div class="four mobile-one columns">
					<a href="#" class="button expand">Subscribe</a>
				</div>
			</div>
		</div>
        
        <!-- // // // // // // // // // // -->        
        
  	</div>
    <!-- End Bottom Content -->
    
    <!-- Footer -->  
  	<div class="row footer">
        
        <!-- // // // // // // // // // // -->
        
        <div class="four columns">
        
        	<h4>About Us</h4>
        	<p>We say what we do, we do what we say, and we're looking forward to prove it to you.</p>
      		<ul class="vcard">
                <li class="address">001 Some Street. Los Angeles, CA, 12345. USA</li>
				<li class="tel"><a href="1234567890">(123) 456-7890</a></li>
                <li class="email"><a href="office@TouchM.com">office@TouchM.com</a></li>
			</ul>

   	    </div>
        
        <!-- // // // // // // // // // // -->
        
        <div class="four columns">
        
        	<h4>Latest Posts</h4>
			
            <ul class="footer-list">
            	<li><a href="#">Mauris pellentesque laoreet lacus non condimentum.</a></li>
  				<li><a href="#">Vestibulum vel diam orci vitae.</a></li>
                <li><a href="#">Suspendisse elementum magna sed lorem faucibus eleifend.</a></li>
  				<li><a href="#">Phasellus placerat convallis congue.</a></li>
  				<li><a href="#">Etiam vehicula lacus fringilla lacus tristique pretium.</a></li>
			</ul>  

   	    </div>
        
        <!-- // // // // // // // // // // -->
        
        <div class="four columns">
        
            <h4>Latest Tweets</h4>
            
			<ul class="footer-list twitter">
  				<li>@4grafx  Go Mobile - 'Quickr – WordPress Responsive HTML 5 Premium Template'<a href="#">goo.gl/1HQER</a><a class="twit-date">28 minutes ago</a></li>
            	<li>@4grafx  20+ Enhancing CSS3 tools and generators <a href="#">goo.gl/1HQER</a><a class="twit-date">2 days ago</a></li>   
			</ul> 

   	    </div>
        
        <!-- // // // // // // // // // // -->
        
  	</div>
    <!-- End Footer -->
    
  </div>
  
<!-- End Region 9 Wrap -->

<!-- Region 10 Wrap -->

  <div class="container region10wrap">
  
  	<div class="row footer_bottom">
       
        <!-- Bottom -->
        
        <!-- // // // // // // // // // // -->
        
        <div class="six columns">
        
        	<p class="copyright">© 2012 TouchM by 4GraFx. All rights reserved</p>

   	    </div>
        
        <!-- // // // // // // // // // // -->
        
        <div class="six columns">
        
			<ul class="link-list">
  				<li><a href="#">Home</a></li>
  				<li><a href="#">Pages</a></li>
  				<li><a href="#">Blog</a></li>
  				<li><a href="#">Porfolio</a></li>
  				<li><a href="#">Contact</a></li>
			</ul>

   	    </div>
        
        <!-- // // // // // // // // // // -->
        
        <!-- Bottom -->
        
  	</div>
  </div>
  
<!-- End Region 10 Wrap -->

  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  -->
  
<!-- Back To Top -->
  <a href="#" class="scrollup">Scroll</a>
<!-- End Back To Top -->
  
  
<!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  <script type="text/javascript">
<!-- Contact form validation
jQuery(document).ready(function(){
  jQuery(".contactForm").validate({
	submitHandler: function() {
	
		var postvalues =  jQuery(".contactForm").serialize();
		
		jQuery.ajax
		 ({
		   type: "POST",
		   url: "contact/process-form.php",
		   data: postvalues,
		   success: function(response)
		   {
		 	 jQuery("#status").html(response).show('normal');
		     jQuery('#contactmessage, #contactemail, #contactname').val("");
		   }
		 });
		return false;
		
    },
	focusInvalid: true,
	focusCleanup: false,
	//errorLabelContainer: jQuery("#registerErrors"),
  	rules: 
	{
		name: {required: true},
		email: {required: true, minlength: 6,maxlength: 50, email:true},
		message: {required: true, minlength: 6}
	},
	
	messages: 
	{
		contactName: {required: "This field is required"},
		email: {required: "This field is required", email: "Please provide a valid e-mail"},
		message: {required: "This field is required"}
	},
	
	errorPlacement: function(error, element) 
	{
		error.insertBefore(element);
		jQuery('<span class="errorarr"></span>').insertBefore(element);
	},
	invalidHandler: function()
	{
		//jQuery("body").animate({ scrollTop: 0 }, "slow");
	}
	
});
});
-->
</script>
</body>
</html>
