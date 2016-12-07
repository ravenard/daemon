// Initialize app
var myApp = new Framework7();

var globalVar = {};

// If we need to use custom DOM library, let's save it to $$ variable:
var $ = Dom7;

//alert('1');

		
//Укороченный ajax.
		
var ajax = function(url, data, onSuccess){
	$.ajax({
		method : 'POST',
		url: url,
		data: data,
		success: onSuccess,
		error: function(xhr, stat){
			alert(stat);
		}
	});
};