'use strict';
var app = angular.module('app.Factory',[]);


app.factory('Imoveis', function() {  
    return {
       imo  : [{
       	id: 1,
		empresa: 'Rossi',
		imageurl: 'http://www.atlantycaimoveis.com.br/imoveis/4_7.jpg',
		bairro: 'Asturias',
		tipo: 'Casa',
		area: '50',
		estado: 'São Paulo',
		cidade: 'Guaruja'
	},
	{
		id: 2,
		empresa: 'XPTO',
		imageurl: 'http://www.atlantycaimoveis.com.br/imoveis/4_7.jpg',
		bairro: 'Vila Antartica',
		tipo: 'Casa',
		area: '100',
		estado: 'São Paulo',
		cidade: 'Praia Grande'
	},
	{
		id: 3,
		empresa: 'XPTO',
		imageurl: 'http://www.atlantycaimoveis.com.br/imoveis/4_7.jpg',
		bairro: 'Vila Antartica',
		tipo: 'Apartamento',
		area: '100',
		estado: 'Rio de Janeiro',
		cidade: 'Praia Grande'
	}]
    };
});