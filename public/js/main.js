$(document).ready(function(){
	$("#demosMenu").change(function(){
	  window.location.href = $(this).find("option:selected").attr("id") + '.html';
	});
});
var wallyApp = angular.module('wallyApp',  []);
wallyApp.controller('adminCtrl', function($scope, $http, $templateRequest, $sce, $compile) {
$scope.newSumm=5000000;
	$scope.saveSumm= function(ns){
		$http({
			method: 'POST',
			url: '/admin/saveSumm'
		}).then(function success(response) {
			console.log(response);
			$scope.summSaved=true;
		});
	};
	$scope.opt='1';
	$scope.saveSumm= function(){
		var arrF={
			'_token': $scope.csrf_token,
			'name_type': $scope.name_type,
			'name': $scope.name,
			'showName': $scope.showName,
			'logo': $scope.logo,
			'email': $scope.email,
			'fund': $scope.fund,
			'showFund': $scope.showFund,
		};
		$http({
			method: 'POST',
			url: '/admin/addPayment',
			data: arrF,
		}).then(function success(response) {
			console.log(response);
			$scope.fundSaved=true;
		});
	};








});
