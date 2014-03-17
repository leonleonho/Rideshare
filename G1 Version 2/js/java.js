$(document).ready(function() {

var Height = $('#footer').height() + $('#bodyContent').height() + $('#header').height();
var newHeight = ($(window).height() - Height) + ($('#bodyWrapper').height());
    if(Height < $(window).height()) {
            $('#bodyContent').css('height', newHeight  + 'px');
}
});
