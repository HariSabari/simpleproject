var app = angular.module('login',[]);
app.controller('logincontroller',function($scope,$http){
$scope.number = 5;
	$scope.login = function(){
		$http({
			url: baseurl + 'login/login',
			method: "POST",
			data:{
				'username' : $scope.user.email,
				'password' : $scope.user.password
			}
		}).success(function(response){
			if(response != null)
				window.location.href = baseurl + 'home';
		});
	}
	
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