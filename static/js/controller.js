'use strict';
var app = angular.module('app.Controller',[]);

app.controller('LoginController', function($scope, $location){
	$scope.usuario = {email: "", senha: ""};
	$scope.alerts = {erro: ""};
	
	$scope.login = function($http){
			$http({
            url: 'http://upicweb.com.br/imo/backend/usuario.php',
            method: "POST",
            headers: {'Content-Type': 'text/plain'}
    }).success(function (data, status, headers, config) {
                $scope.usuarios = data;
                console.log(data); 
    }).error(function (data, status, headers, config) {
    	    $scope.alerts.erro = "Email ou Senha Errada";
    	    console.log(status); 
    });
    };
    for (var i = 0; i <= $scope.usuarios.length; i++) {
		if ($scope.usuario.email === $scope.usuarios.email[i] && $scope.usuario.senha === $scope.usuarios.senha[i]){
			$location.path('/usuario');
		};
	};

	$scope.cadastro = function(){

	};

});
app.controller('CadastroController',function($scope,$location){
	
	$location.path('/cadastro');
});

app.controller('UsuarioController',function(Imoveis,$scope){
	$scope.imoveis = Imoveis.imo;
});
app.controller('HomeController', function(Imoveis,$scope, $http){
	$scope.imoveis = Imoveis.imo;
});
app.controller('PrecoController', function($scope){
	$scope.tipocontrato = [{
		css: 'basico',
		tipo: 'Básico',
		valor: 'R$ 100,00'
	},
	{
		css: 'inter',
		tipo: 'Intermediário',
		valor: 'R$ 200,00'
	},
	{
		css: 'full',
		tipo: 'Full',
		valor: 'R$ 300,00'
	}];
});

app.controller('FinanciamentoController', function($scope, $routeParams, $location, Imoveis){
	$scope.imoveis = Imoveis.imo;
	$scope.imovel = $scope.imoveis[$routeParams.id];
	console.log($scope.imovel);
});
