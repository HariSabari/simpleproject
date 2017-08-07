<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/requiredcss/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/requiredcss/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/requiredcss/component.css" />
	</head>
	<body ng-app="homepage" ng-controller="homepagecontroller">
		<div id="perspective" class="perspective effect-rotateleft">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					<div class="codrops-top clearfix">
						<span class="right"><label id="showMenu"><a id="nav-toggle" href="#">&#9776;</a></span>
					</div>
					<div class="main clearfix">
						Hello World
					</div>
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav right vertical">
				<!--<a href="index5" class="icon-home">Home</a>
				<a href="#" class="icon-news">News</a>
				<a href="#" class="icon-image">Images</a>
				<a href="#" class="icon-upload">Uploads</a>
				<a href="#" class="icon-star">Favorites</a>
				<a href="#" class="icon-mail">Messages</a>	
				<a href="#" class="icon-lock">Security</a>-->
				<ul style="list-style: none; ">
					<li class="side" ><a href="index5" class="icon-home">Home</a></li>
					<li><a href="#" class="icon-news">News</a></li>
					<li><a href="#" class="icon-image">Images</a></li>
					<li><a href="#" class="icon-upload">Uploads</a></li>
					<li><a href="#" class="icon-star">Favorites</a></li>
					<li><a href="#" class="icon-mail">Messages</a></li>
					<li><a href="#" class="icon-lock">Security</a></li>
					<li><a href=""  class="icon-logout" ng-click="logout($event.target);$event.preventDefault();" class="icon-lock">logout</a></li>
				</ul>
			</nav><!-- $event.preventDefault();logout($event.target.href); -->
		</div><!-- /perspective -->
		<script type="text/javascript">
			var baseurl = '<?php print base_url();?>';
		</script>
		<script type="text/javascript" src="<?php print base_url();?>js/requiredjs/modernizr.custom.25376.js"></script>
		<script type="text/javascript" src="<?php print base_url();?>js/requiredjs/classie.js"></script>
		<script type="text/javascript" src="<?php print base_url();?>js/requiredjs/menu.js"></script>
		<script type="text/javascript" src="<?php print base_url();?>js/angularjs/angular.min.js"></script>
		<script type="text/javascript" src="<?php print base_url();?>js/controllerjs/home.js"></script>
	</body>
</html>