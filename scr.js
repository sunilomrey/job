
$(document).ready(function() {
$('div.buttons').on('click', 'input', function() {
    var divs = $('div.showThese').children();

    divs.eq($(this).index()).show().siblings().hide();
});
});
