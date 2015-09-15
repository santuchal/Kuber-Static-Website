<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Kuber Gem Stone Testing Lab | Bappa Ghosh</title>
		<meta name="description" content="Gem Stone Testing Laboratories">
		<meta name="Place" content="Ranaghat, Nadia">
		<meta name="author" content="Santu Chall" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/font-face.css">
		<link rel="stylesheet" href="css/color-schemes/dark/hot-pink.css">
		<link rel="stylesheet" href="css/typography.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/main.css">

		<script>
			document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';
		</script><!-- Responsive images -->
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<nav>
			<div class="top-ribbon"></div>
			
				
			<ul class="nav-font clearfix">
				
				<li><a href="gallery-hex.html">Gallery</a></li>
				<li><a href="About_us.html">About Us</a></li>
				<li><a href="index.html">Kuber Gemological Lab</a></li>
			</ul>
			
		</nav>

		<div></div>
		
		
		
			
				<!--
		<section class="about-me">
			<article class="about about-font">
				<p>You can learn more about my creative process at my <a href="#from-my-blog">blog <i class="icon-pencil"></i></a>, also you can follow me on <a href="http://www.twitter.com">twitter <i class="icon-twitter"></i></a> and <a href="http://www.facebook.com">facebook <i class="icon-facebook-sign"></i></a>.</p>
				<p>I have some cool programming projects on <a href="http://www.github.com">github <i class="icon-github"></i></a> and my cats' blog on <a href="http://www.tumblr.com">tumblr</a>.</p>
				<p>Hey, I just met you and this is crazy, but here's my <a href="mailto:santuchal@gmail.com">e-mail <i class="icon-envelope-alt"></i></a>, so write me, maybe. Or just call <a href="tel:4213-45-710">4213-45-710 <i class="icon-phone"></i></a> I'd love to talk :)</p>
			</article>text-->
			<!--twitter-stream<article class="twitter-stream">
				<header><p><a href="">@Santu</a> on twitter <i class="icon-twitter"></i></p></header>
				<div class="tweets meta-info-font"></div>
			</article>
		</section>-->

<div>
		<?php
$action="";#$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="mail" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit"><font face="verdana" color="green">
    Your name:<br>
    <input name="name" type="text" value="" size="30" style="background-color:blue; 
              border: solid 1px #FFFFFF;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px" /><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30" style="background-color:pink; 
              border: solid 1px #FFFFFF;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px"><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30" style="background-color:pink; 
              border: solid 1px #FFFFFF;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message from Kuber Gemological Lab Website ";
        mail("bappaghosh95@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>
	
</div>
<div>
 <style>
      #map {
        width: 100%;
        height: 400px;
      }
    </style>
 <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(23.1734667, 88.5674167),
          zoom: 20,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</div>
<div id="map"></div>
		
			
			

		<footer class="site-footer site-footer-font">
			<div class="sparator"></div>
			<div class="contact">
				<a href="mailto:bappaghosh95@gmail.com"><i class="icon-envelope-alt"></i> bappaghosh95@gmail.com</a> &middot;
				<a href="tel:+919732565168"><i class="icon-phone"></i>+919732565168</a> &middot;
				
			</div>
			<div class="copyright">Copyright &#64; 2015 Kuber Gemological Lab. Made by <a href="mailto:santuchal@gmail.com"> Santu Chall</a> </div>
		</footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.8.0.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script> -->
	</body>
</html>
