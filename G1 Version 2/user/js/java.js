$(document).ready(function() {
var Height = $('#footer').height() + $('#bodyContent').height() + $('#header').height();
var newHeight = ($(window).height() - Height) + ($('#bodyContent').height());
    if(Height < $(window).height()) {
            $('#bodyWrapper').css('min-height', newHeight  + 1 + 'px');
}
});