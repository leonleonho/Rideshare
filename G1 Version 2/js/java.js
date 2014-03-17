$(document).ready(function() {
var docHeight = $('body').height();
var winHeight = $(window).height();
var footerHeight = $('#footer').height();
var headerHeight = $('#header').height();
var contentHeight = $('#bodyContent').height();
var Height = (winHeight - footerHeight - headerHeight);

if  (docHeight < winHeight){
	$('#bodyWrapper').css('height', Height + 1 + 'px');
	}

});
