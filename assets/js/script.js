$(document).ready(function(){


    let headerHeight = $('nav.navbar').outerHeight();
    $('#heroSec .container').css({
        height: 'calc( 100vh - '+headerHeight+'px - 2.5rem)'
    });

    $('#filterBtn').click(function(){
        console.log('hello');
        $("#filterSec").slideToggle();
    });


    
});

var toggleInputContainer = function (input) {
    if (input.value != "") {
        input.classList.add('filled');
    } else {
        input.classList.remove('filled');
    }
}

var labels = document.querySelectorAll('#redeemSec .label');
for (var i = 0; i < labels.length; i++) {
    labels[i].addEventListener('click', function () {
        this.previousElementSibling.focus();
    });
}

window.addEventListener("load", function () {
    var inputs = document.getElementsByClassName("input");
    for (var i = 0; i < inputs.length; i++) {
        console.log('looped');
        inputs[i].addEventListener('keyup', function () {
            toggleInputContainer(this);
        });
        toggleInputContainer(inputs[i]);
    }
});