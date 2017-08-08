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
});