var timerStart = Date.now();

$(document).ready(function() {

})


function debug_times () {
    window.onload = function () {
        var loadTime = window.performance.timing.domContentLoadedEventEnd-window.performance.timing.navigationStart;console.log('Page load time: '+ loadTime/1000 + ' seconds');
        }
    $(document).ready(function() {
    });

}

function bs_breakpoint() {

    $('body').prepend('<div class=\"bs_bp fixed-bottom \" style="z-index:9999"><div class=\"d-block d-sm-none p-2 bg-primary text-white text-center\">XS</div><div class=\"d-none d-sm-block d-md-none p-2 bg-success text-white text-center\">SM</div><div class=\"d-none d-md-block d-lg-none p-2 bg-info text-white text-center\">MD</div><div class=\"d-none d-lg-block d-xl-none p-2 bg-warning text-white text-center\">L</div><div class=\"d-none d-xl-block p-2 bg-danger text-white text-center\">XL</div></div>');
}

function bs_breakpoint_remove() {
    $('div.bs_bp').remove();
}
