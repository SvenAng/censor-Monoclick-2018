var $ = jQuery;


//start of referens modal

var modalIndex = 1;

var slides = document.getElementsByClassName("transaction-modal");
var slides_content = document.getElementsByClassName("modal-wrapper");
var header = document.querySelector(".header");
var tomb = document.querySelectorAll('.col-md-4.gravsten.popup');


function closeModal() {
    slides[modalIndex-1].style.display = "none";
    slides_content[modalIndex-1].style.display = "none";
    header.style.display = "block";


}

function plusIndex(n){
    slides[modalIndex-1].style.display = "none";
    slides_content[modalIndex-1].style.display = "none";

    for (var x = 0; x < tomb.length; x++) {

    }
    //console.log(x);
    //console.log(modalIndex);
    if (modalIndex == 1 && n == -1){
        modalIndex = x
        showSlides(modalIndex);
    }

    else if (modalIndex == x && n == 1){
        modalIndex = 1
        showSlides(modalIndex);
    }

    else {
        showSlides(modalIndex += n);
    }

}

function currentSlides(n) {
    showSlides(modalIndex = n)
}

function showSlides(modalIndex) {
    slides[modalIndex-1].style.display = "flex";
    slides_content[modalIndex-1].style.display = "flex";
    header.style.display = "none";

}

function hideContainers(){
    var container = document.querySelectorAll('.gravsten');
    for (var x = 0; x < container.length; x++) {
        $(container[x]).addClass("hidden ").removeClass("is-animated");
    }}

function filterTAX(s){
    var container = document.querySelectorAll('.gravsten');
    var currentFilter = document.querySelectorAll('.' + s);


    if (currentFilter) {
        hideContainers()

        for (var x = 0; x < currentFilter.length; x++) {
            currentFilter[x].styleopacity =1;
            $(currentFilter[x]).addClass("is-animated").removeClass("hidden");
        }
    }

    else if (s == "all"){
        var container = document.querySelectorAll('.gravsten');
        hideContainers()
        for (var x = 0; x < container.length; x++) {
            $(container[x]).addClass("is-animated").removeClass("hidden");
        }
    }

    else{
        var container = document.querySelectorAll('.gravsten');
        hideContainers()
        for (var x = 0; x < container.length; x++) {
            $(container[x]).addClass("is-animated").removeClass("hidden");
        }
    }

}

function readMore(){
    var row = document.querySelectorAll('.news-container');
    for (var x = 0; x < row.length; x++) {
        row[x].className = "news-container";
    }
}

// function to display back to top button on scroll
window.onscroll = function() {scrollFunction()};

// scroll to top button append's in CSS & HTML when user scrolls
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
        document.querySelector(".toTheTopWrapper").style.display = "block";

    } else {
        // Default is display none
        document.querySelector(".toTheTopWrapper").style.display = "none";

    }

    var hd = document.getElementById('header');


    if((hd.className === "header") && (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5)){
        document.querySelector(".header-logo").style.width = "215px";
        //document.querySelector(".fa-bars").style.margin = "74px 0 0 0";

    }
    else  if((hd.className === "header affix") && (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5)) {
        document.querySelector(".header-logo").style.width = "215px";
        //document.querySelector(".fa-bars").style.padding = "74px 0 0 0";
    }

    else {
        document.querySelector(".header-logo").style.width = "24%";
        //document.querySelector(".fa-bars").style.margin= "120px 0 0 0";
    }





}

var toTop = document.querySelector(".toTheTopButton");

// click function to scroll to top
toTop.addEventListener('click', function(event) {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
});




function menuShow(menuarrow){
    //console.log(menuarrow.className);

    var menu = menuarrow.parentNode.childNodes;


    if (menuarrow.className == "no-transform arrow-display") {
        menuarrow.className = "transform arrow-display";

        for (var i = 0; i < menu.length; i++) {
            if (menu[i].className == 'sub-menu') {   //or use toUpperCase()
                menu[i].className += ' sub-display';
                //menu[i].style.display = "block";
                //console.log(menu[i].className);


            }
        }
    }

    else if(menuarrow.className == "transform arrow-display"){
        menuarrow.className = "no-transform arrow-display";

        for (var i = 0; i < menu.length; i++) {
            if (menu[i].className == 'sub-menu sub-display') {   //or use toUpperCase()
                menu[i].className = 'sub-menu';
                //menu[i].style.display = "none";
                // console.log(menu[i].className);


            }
        }
    }





}








var clicked = "not-clicked";

function burgerFunction() {
    var m = document.querySelector(".menu-main-menu-container");
    var a = document.querySelector("#icon");

    if (clicked == "not-clicked") {
        $('body > :not(.header)').hide(); //hide all nodes directly under the body
        //$('.header').prependTo('body');  // move #myDiv up to the body
        clicked = "clicked";
        m.className = "menu-main-menu-container shown";
        a.className = "fa fa-bars affix open";
    }

    else if (clicked == "clicked") {

        $('body > :not(script)') .show();

        /*
         var elements = document.querySelectorAll( 'body > *' );
         elements.style.display = "block";*/
        clicked = "not-clicked";
        a.className = "fa fa-bars affix closed";

        m.className = "menu-main-menu-container not-shown";

    }


    var x = document.getElementById("menu-huvudmeny");
    console.log("x " + x);
    if (x.className == "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }

    /*
     var b = document.getElementById("icon");
     if (b.className === "fa fa-bars affix") {
     b.className += " burger";
     b.style.margin = "37px 0 0 0"

     } else {
     b.className = "fa fa-bars affix";
     b.style.margin = "77px 0 0 0"

     }
     */
//alert('hej');
    var h = document.getElementById("header");
    if ((h.className === "header") || (h.className === "header affix")) {
        h.className = "header burger affix";

    } else {
        h.className = "header bajs";

    }


    var menuitem = document.querySelectorAll('.menu-item-has-children');
    var submenu = document.querySelectorAll('ul.sub-menu');


    if (h.className == "header burger affix") {

        for (var y = 0; y < menuitem.length; y++) {
            menuitem[y].childNodes[1].className = 'no-transform arrow-display';
            menuitem[y].childNodes[1].childNodes[0].className = 'fa fa-angle-right arrow-display';
            //menuitem[y].childNodes[1].style.display = "flex";
            //menuitem[y].childNodes[1].childNodes[0].style.display = "flex";
        }
    }
    else {

        for (var y = 0; y < menuitem.length; y++) {
            menuitem[y].childNodes[1].className = "transform";

            //menuitem[y].childNodes[1].style.display = "none";

            menuitem[y].childNodes[1].childNodes[0].classame = 'fa fa-angle-right';
        }
        for (var i = 0; i < submenu.length; i++) {

            //submenu[i].style.display = "none";
            submenu[i].className = "sub-menu";
        }
    }


}



$(document).ready(function () {
    $('.no-fouc').removeClass('no-fouc');
    
        var menu = document.querySelector('.menu-huvudmeny-container');
    menu.className = "menu-main-menu-container";




    var toggleAffix = function (affixElement, scrollElement, wrapper) {

        var height = affixElement.outerHeight(),
            top = wrapper.offset().top;

        if (scrollElement.scrollTop() > top) {
            wrapper.height(height);
            affixElement.addClass("affix");
        }
        else {
            affixElement.removeClass("affix");
            wrapper.height('auto');
        }

    };


    $('[data-toggle="affix"]').each(function () {
        var ele = $(this),
            wrapper = $('<div id="wrapper"></div>');

        ele.before(wrapper);
        $(window).on('scroll resize', function () {
            toggleAffix(ele, $(this), wrapper);
        });

        // init
        toggleAffix(ele, $(window), wrapper);
    });

});





// Function for menu doubleclick
/*

 ;(function( $, window, document, undefined )
 {
 $.fn.doubleTapToGo = function( params )
 {
 if( !( 'ontouchstart' in window ) &&
 !navigator.msMaxTouchPoints &&
 !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

 this.each( function()
 {
 var curItem = false;

 $( this ).on( 'click', function( e )
 {
 var item = $( this );
 if( item[ 0 ] != curItem[ 0 ] )
 {
 e.preventDefault();
 curItem = item;
 }
 });

 $( document ).on( 'click touchstart MSPointerDown', function( e )
 {
 var resetItem = true,
 parents	  = $( e.target ).parents();

 for( var i = 0; i < parents.length; i++ )
 if( parents[ i ] == curItem[ 0 ] )
 resetItem = false;

 if( resetItem )
 curItem = false;
 });
 });
 return this;
 };
 })( jQuery, window, document );

 $( '.menu li:has(ul)' ).doubleTapToGo();

 // End doubleclickfunction
 */