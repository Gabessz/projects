$(window).scroll(function () {

    var windowMaxHeight = $(window).height();
    var topofScreen = $(window).scrollTop();
    var screenMid = topofScreen + Math.floor(windowMaxHeight / 2);
    
    var aboutTop = $('#about').offset().top;
    var galTop = Math.floor($('#gallery').offset().top);
    var contactTop = Math.floor($('#contact').offset().top);

    var aboutBot = Math.floor($('#aboutBot').offset().top);
    var galBot = Math.floor($('#galBot').offset().top);
    var contactBot = Math.floor($('#contactBot').offset().top);
  
    $(".height").text(windowMaxHeight);
    $(".scroll").text(topofScreen);
    $(".middle").text(screenMid);
    $(".aboutPos").text(aboutTop);
    $(".galPos").text(galTop);
    $(".contactPos").text(contactTop);
    $(".aboutBot").text(aboutBot);
    $(".galBot").text(galBot);
    $(".contactBot").text(contactBot);

// GALLERY PART
    if (screenMid > galTop && screenMid < galBot){
      $(".home").addClass(".current_page_item_two");
    }
     else if (screenMid < galTop || screenMid > galBot ) {
      $(".current_page_item_two").removeClass();
    }

}); 

var el, leftPos, newWidth;
mainNav = $("#example-two");

mainNav.append("<li id='magic-line-two'></li>");

var magicLine = $("#magic-line-two");

magicLine
    .width($(".current_page_item_two").width())
    .height(mainNav.height())
    .css("left", $(".current_page_item_two a").position().left)
    .data("origLeft", $(".current_page_item_two a").position().left)
    .data("origWidth", magicLine.width())
    .data("origColor", $(".current_page_item_two a").attr("rel"));

$("#example-two a").hover(

      function() {
          el = $(this);
          leftPos = el.position().left;
          newWidth = el.parent().width();
          magicLine.stop().animate({
              left: leftPos,
              width: newWidth,
              backgroundColor: el.attr("rel")
        });
      },
);

$(".current_page_item_two a").mouseenter();

$(function() {
        $('#navbar a').click(function() {
           $('#navbar a').removeClass();
           $(this).addClass('active');
        });
     });

$(document).ready(function(){
    $( "#showgal" ).click(function() {
       $( "#personal-gallery" ).show();
    });
});

$(document).ready(function(){
    $("a").click(function(){
       $("img").animate({left: '250px'});
    });
});