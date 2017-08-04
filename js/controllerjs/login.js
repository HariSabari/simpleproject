var app = angular.module('login',[]);
app.controller('logincontroller',function($scope,$http){
$scope.number = 5;
	$scope.click = function(){
		$http({
			url: baseurl + 'index.php/welcome/data',
			method: "POST"
		}).success(function(response){
			$scope.result = response;
		});
	}
});