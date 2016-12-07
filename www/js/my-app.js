
var myApp = new Framework7();

var globalVar = {};

var $ = Dom7;

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