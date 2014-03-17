$(document).ready(function() {
var winHeight = $(window).height();
var footerHeight = $('#footer').height();
var headerHeight = $('#header').height();
var contentHeight = $('#bodyContent').height();
var docHeight = (footerHeight + headerHeight + contentHeight);
var Height = (winHeight - footerHeight - headerHeight);

if  (docHeight < winHeight){
	$('#bodyWrapper').css('height', Height + 1 + 'px');
	}

});
