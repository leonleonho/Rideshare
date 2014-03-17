
$(document).ready(function() {
var Height = $('#footer').height() + $('#bodyContent').height() + $('#header').height();
    if(Height < $(window).height()) {
            alert("Too short");
}
});