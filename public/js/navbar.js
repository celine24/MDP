$(function() {

    var $el, leftPos, newWidth,
        $mainNav = $("#mdp-navbar");

    $mainNav.append("<li id='mdp-navbar-arrow'></li>");
    var $arrow = $("#mdp-navbar-arrow");

    $arrow
        //.width($(".current_page_item").width())
        .css("left", ($(".current_page_item a").width()/2))
        .data("origLeft", $arrow.position().left)
        .data("origWidth", $arrow.width());

    $("#mdp-navbar li a").hover(function() {
        $el = $(this);
        leftPos = ($el.position().left) + (($el.parent().width()/2) - 10);
        newWidth = $el.parent().width();
        $arrow.stop().animate({
            left: leftPos
            //,width: newWidth
        });
    }, function() {
        $arrow.stop().animate({
            left: $arrow.data("origLeft")
            //,width: $arrow.data("origWidth")
        });
    });
});