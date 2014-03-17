$(document).ready(function() {

var docHeight = $(window).height();
var footerHeight = $('#footer').height();
var headerHeight = $('#header').height();
var contentHeight = $('#bodyWrapper').height()
var footerTop = $('#footer').position().top + footerHeight;
var Height = (docHeight - footerHeight - headerHeight);

if  (contentHeight < Height){
$('#bodyWrapper').css('height', Height  + 'px');
}

});
