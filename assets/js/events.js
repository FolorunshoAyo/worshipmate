"use strict";
/*!events.js | Friendkit | © Css Ninja. 2019-2020*/
$(document).ready((function() {
    $("#events-page").length && $(".scroll-link").on("click", (function(t) {
        t.preventDefault(),
        $(this).siblings(".scroll-link").removeClass("is-active"),
        $(this).addClass("is-active");
        var e = $(this).attr("data-event-id");
        $("#event-list");
        $("html, body").animate({
            scrollTop: $("#" + e).offset().top - 58
        }, 500)
    }
    ))
}
));
