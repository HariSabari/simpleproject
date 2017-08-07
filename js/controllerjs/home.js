var app = angular.module('homepage',[]);
app.controller('homepagecontroller',function($scope,$http){
$scope.number = 5;
	
	$scope.logout = function(){
		$http({
			url: baseurl + 'login/logout',
			method: "GET"
		}).success(function(response){
			if(response == 'logout')
				window.location.href = baseurl + 'login';
		});
	}
});