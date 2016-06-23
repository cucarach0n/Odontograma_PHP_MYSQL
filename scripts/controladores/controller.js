app.controller('dientes',['$scope',function($scope){
		var jsonArmado;

		var adultoArriva = [];
		for (var i = 1; i < 17; i++) {
			if (i > 3 && i < 14) {
				jsonArmado = {id:i,tipoDiente:'decidua mixta'};
				adultoArriva.push(jsonArmado);
			}
			else
			{
				jsonArmado = {id:i,tipoDiente:'decidua'};
				adultoArriva.push(jsonArmado);
			}
			
		}
		$scope.adultoArriva = adultoArriva;

		var adultoAbajo = [];
		for (var i = 17; i < 33; i++) {
			if (i > 19 && i < 30) {
				jsonArmado = {id:i,tipoDiente:'decidua mixta'};
				adultoAbajo.push(jsonArmado);
			}
			else
			{
				jsonArmado = {id:i,tipoDiente:'decidua'};
				adultoAbajo.push(jsonArmado);
			}
		}
		$scope.adultoAbajo = adultoAbajo;
		
		var ninoArriva = [];
		for (var i = 33; i < 43; i++) {
			jsonArmado = {id:i,tipoDiente:'nino'};
			ninoArriva.push(jsonArmado);
		}
		$scope.ninoArriva = ninoArriva;

		var ninoAbajo = [];
		for (var i = 43; i < 53; i++) {
			jsonArmado = {id:i,tipoDiente:'nino'};
			ninoAbajo.push(jsonArmado);
		}
		$scope.ninoAbajo = ninoAbajo;
                
	}]);