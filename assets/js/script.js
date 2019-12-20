$(document).ready(function(){


    let headerHeight = $('nav.navbar').outerHeight();
    
    $('#heroSec .container').css({
        height: 'calc( 100vh - '+headerHeight+'px - 2.5rem)'
    });
});