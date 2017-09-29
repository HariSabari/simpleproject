var app = angular.module("myapp",[]);
app.controller("mycontroller",function($scope,$http){
	var video = document.getElementById('video');
	var canvas = document.getElementById('canvas');
	var context = canvas.getContext('2d');

	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mediaDevices.getUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia;

	if(navigator.getUserMedia){
		navigator.getUserMedia({video:true}, streamWebCam, throwError);
	}

	function streamWebCam (stream) {
		video.src = window.URL.createObjectURL(stream);
		video.play();
	}

	function throwError (e) {
		alert(e.name);
	}

	$scope.snap = function() {
		canvas.width = video.clientWidth;
		canvas.height = video.clientHeight;
		context.drawImage(video, 0, 0);
	}
	function download() {
	    var dataUrl = canvas.toDataURL();
	    $http({
			url: baseurl + 'login/saveCanvas',
			method: "POST",
			data:{
				img: dataUrl
			}
		}).success(function(response){
			if(response != null)
				$scope.response = response;
				console.log($scope.response);
		});
	    //this.href = dt; //this may not work in the future..
	}
	document.getElementById('download').addEventListener('click', download, false);
});
	