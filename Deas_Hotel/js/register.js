function registered($scope, $http) {
	$http.get('js/register.json')
	.success(function(data) { $scope.registeredppl = data.registeredppl; })
	.error(function(data) { console.log('error');});
}
