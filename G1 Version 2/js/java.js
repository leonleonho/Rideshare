$(document).ready(function() {
<<<<<<< HEAD
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
=======
var Height = $('#footer').height() + $('#bodyContent').height() + $('#header').height();
var newHeight = ($(window).height() - Height) + ($('#bodyWrapper').height());
    if(Height < $(window).height()) {
            $('#bodyWrapper').css('height', newHeight  + 'px');
}
});
>>>>>>> origin/Leon-Ho
