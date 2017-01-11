angular.module('app', [])
  	.controller('ctrl', ['$scope', '$http', function($scope, $http) {

  		$scope.inputX = 1;

  		$scope.InputChanged = function(){ 
            $http.get("http://localhost/DummyRestService/index/"+ $scope.inputX)
				.then(function(response) {
					$scope.rest = response.data.result;
			});
        };  

        $scope.InputChanged();

		
	}]);

  			
	

  			

				