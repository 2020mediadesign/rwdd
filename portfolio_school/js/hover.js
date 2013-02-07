$(function() {
    $(".baThumbnail img")
        .mouseover(function() { 
            var src = $(this).attr("src").match(/[^\.]+/) + "-over.png";
            $(this).attr("src", src);
        })
        .mouseout(function() {
            var src = $(this).attr("src").replace("-over", "");
            $(this).attr("src", src);
        });
});