<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
	<link rel="stylesheet" href="<?php print base_url();?>css/style.css">
</head>
<body>
	<div class="container" ng-app="login" ng-controller="logincontroller">
		<section id="content">
			<form>
				<h1>Login Form</h1>
				<div>
					<input type="text" placeholder="Username" id="username" ng-model="user.email"/>
				</div>
				<div>
					<input type="password" placeholder="Password" id="password" ng-model="user.password"/>
				</div>
				<div>
					<input type="submit" value="Log in"/ ng-click="login()">
				</div>
				{{result}}
			</form><!-- form -->
		</section><!-- content -->
	</div><!-- container -->
	<script type="text/javascript">
		var baseurl = '<?php print base_url();?>';
	</script>
	<script type="text/javascript" src="<?php print base_url();?>js/angularjs/angular.min.js"></script>
	<script type="text/javascript" src="<?php print base_url();?>js/controllerjs/login.js"></script>
</body>
</html>