'use strict';
var app = angular.module('App',[]).config(function($routeProvider){
	$routeProvider.when('/', {
		templateUrl: 'templates/home.html',	controller: 'HomeController'
	});

	$routeProvider.otherwise({ redirectTo: '/'});
});


