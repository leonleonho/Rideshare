$(document).ready(function() {

var docHeight = $(window).height();
var footerHeight = $('#footer').height();
var headerHeight = $('#header').height();
var contentHeight = $('#bodyContent').height();
var Height = (docHeight - footerHeight - headerHeight);

if  (contentHeight > Height){
$('#bodyWrapper').css('height', Height  + 'px');
}

});