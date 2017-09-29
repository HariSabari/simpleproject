<div class="right_col" role="main" ng-app="myapp" ng-controller="mycontroller">	
	<div>
		<video id="video" width="400" height="300" autoplay="true"></video>
		<canvas id="canvas"></canvas><br>
		<button ng-click="snap();">Snap</button>
		<a id="download" download="CanvasDemo.png">Download as image</a>
	</div>
</div>	
<script src="<?php print base_url();?>js/controllerjs/controllerjs.js"></script>
