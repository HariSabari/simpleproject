<div ng-app="login" ng-controller="logincontroller">
	<h1>Welcome to CodeIgniter!</h1>
	{{number}}
	<button ng-click="click()">Click</button>
	<script type="text/javascript">
		var baseurl = '<?php print base_url();?>';
	</script>
	<script type="text/javascript" src="<?php print base_url();?>js/angularjs/angular.min.js"></script>
	<script type="text/javascript" src="<?php print base_url();?>js/controllerjs/login.js"></script>
</div>