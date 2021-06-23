




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