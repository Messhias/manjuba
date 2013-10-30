'use strict';
var app = angular.module('app.Directive',[]);
app.directive('menulogout', function(){
	    return {
      restrict: 'E',
      transclude: true,
      template:  '<div class="navbar">'+
	'<div class="navbar-inner">'+
			'<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">'+
				'<span class="icon-bar"></span>'+
				'<span class="icon-bar"></span>'+
				'<span class="icon-bar"></span>'+
			'</a>'+
			'<div class="nav-collapse">'+
				'<ul class="nav pull">'+
				'<li><a href="#/"><i class=""></i> IMOINFO</a></li>'+
				'<li><a href="#/sobre"><i class="icon-file"></i> Sobre</a></li>'+
				'<li><a href="#/preco"><i class="icon-dollar"></i> Preço</a></li>'+
				'<li><a href="#/contato"><i class="icon-envelope"></i> Contato</a></li>'+
				'</ul>'+
				'<ul class="nav pull-right">'+
					'<li><a href="#/cadastro">Cadastro</a>'+
					'</li>'+
					'<li><a href="#/login">Login</a>'+
					'</li>'+
				'</ul>'+
			'</div>'+
		'</div>'+
	'</div>'+
'</div>',
      replace: true
    };
});

app.directive('menulogin', function(){
	    return {
      restrict: 'E',
      transclude: true,
      template:
     '<div class="navbar">'+
	'<div class="navbar-inner">'+
			'<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">'+
				'<span class="icon-bar"></span>'+
				'<span class="icon-bar"></span>'+
				'<span class="icon-bar"></span>'+
			'</a>'+
			'<div class="nav-collapse">'+
				'<ul class="nav pull">'+
				'<li><a href="#/"><i class=""></i> IMOINFO</a></li>'+
				'<li><a href="#/sobre"><i class="icon-file"></i> Sobre</a></li>'+
				'<li><a href="#/preco"><i class="icon-dollar"></i> Preço</a></li>'+
				'<li><a href="#/contato"><i class="icon-envelope"></i> Contato</a></li>'+
				'</ul>'+
				'<ul class="nav pull-right">'+
					'<li><a href="#/login">Cadastro</a>'+
					'</li>'+
					'<li><a href="#/login">Login</a>'+
					'</li>'+
				'</ul>'+
			'</div>'+
		'</div>'+
	'</div>'+
'</div>',
      replace: true
    };
});

app.directive('menulateral', function(){
	    return {
      restrict: 'E',
      transclude: true,
      template:
     	'<div class="span3">'+
		'<div class="sidebar-nav">'+
		'<div class="well">'+
		'<ul class="nav nav-list">' +
		'<li class="nav-header">Menu</li>'+
		'<li><a><i class="icon-home" ></i> <span ng-click="tipoimovel = {tipo: "Apartamento"}">Apartamentos</span></a></li>'+
		'<li><a><i class="icon-home" ></i> <span ng-click="tipoimovel = {tipo: "Casa"}">Casas</span></a></li>'+
		'</ul>'+
		'</div>'+
		'</div>'+
		'</div>',
      replace: true
    };
});

app.directive('imovel', function(){
	    return {
      restrict: 'E',
      transclude: true,
      template:
     	'<ul class="thumbnails"'+
		'<li class="span4" ng-repeat="imovel in imoveis | filter: estado | filter: cidade | filter: valor | filter: area">'+
  		'<div class="thumbnail">'+
    	'<img src="{{ imovel.imageurl }}" alt="ALT NAME">'+
    	'<div class="caption">'+
      	'<h3>{{ imovel.empresa }}</h3>'+
      	'<p>{{ imovel.tipo }}</p>'+
      	'<p><i class="icon icon-map-marker"></i> {{ imovel.bairro }}</p>'+
      	'<p><a href="#" class="btn btn-primary btn-block text-center">Veja mais</a></p>'+
    	'</div>'+
  		'</div>'+
		'</li>'+
		'</ul>',
      replace: true
    };
});