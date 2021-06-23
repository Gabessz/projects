





$("#showgal").click(function() {
    // Start showing the divs
    showDiv();
    $(".hiddenh1").fadeIn();
});






$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 130) {
        $(".hamburger").addClass("scrolled-hamburger");
    } else {
        $(".hamburger").removeClass("scrolled-hamburger");
    }
});










$(document).ready(function(){
  $(".hamburger").click(function(){
    $("#mySidenav").fadeToggle(500);
    $("#mySidenav").css("width","100%");
  });
});
function myFunction(x) {
  x.classList.toggle("change");}







$("#showgal").click(function() {
    // Start showing the divs
    showDiv();
    $(".hiddenh1").fadeIn();
});

function showDiv() {
    // If there are hidden divs left
    if($('a:hidden').length) {
        // Fade the first of them in
        $('a:hidden:first').fadeIn();
        // And wait one second before fading in the next one
        setTimeout(showDiv, 10);
    }
}