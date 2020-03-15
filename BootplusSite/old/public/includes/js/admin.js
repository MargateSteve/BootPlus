// Adds a class of 'small-screen' to the left side bar when off-screen



function isSmallScreen (size) {
    var showSize;
	var target = $("#top-nav-trigger").css('display');

    if(size=='sm') {
        if( target == 'none') {
            showSize = true;
        } else {
            showSize = false;
        }
    } else {
        if($(window).width() <= 600) {
            showSize = false;

        } else {
            showSize = true;
        }
    }



    if (showSize){
        $('body').removeClass ('small-screen');
        $('body').addClass ('nav-open');
    } else {
        $('body').addClass ('small-screen');
        $('body').removeClass ('nav-open');


    }

}




function sideMenuStuff (first_load = null, type = null) {
//alert ($(window).width());
    var sidebar_visible;


    if($("body").hasClass('nav-multi-state')) {
        //alert ('Extra Small');
        isSmallScreen ('xs');
    } else {
        //alert ('Small');
        isSmallScreen ('sm');
    }


}

// Fire at start


$(document).ready(function() {

	sideMenuStuff ();

        addToken ();
    



    $(window).resize(function(){
        sideMenuStuff ();
    });

    // If the page has loaded with 'nav-open' add open to the left
    // sidebar to ensure they work in unison
//    if( $('body').hasClass( "nav-open" )) {
    //    $('.left-sidebar').addClass ('open');
//    }

    $("#main-nav-trigger").click(function() {
        $('body').toggleClass ('nav-open');
        //$('.left-sidebar').toggleClass ('open');
    });

    $( "#right-nav-trigger").click(function() {

        if($('.right-sidebar').toggleClass('open'));

    });

	$("#menu-content li[data-toggle='collapse']").click(function() {
        $(this).children('a').children('i.fa-pull-right').toggleClass('fa-chevron-down fa-chevron-up');
    });



});
