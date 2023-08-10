/*!stories.js | Friendkit | © Css Ninja. 2019-2020*/
"use strict";
function _typeof(e) {
    return _typeof = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function(e) {
        return void 0 === e ? "undefined" : _typeof(e)
    }
    : function(e) {
        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : void 0 === e ? "undefined" : _typeof(e)
    }
    ,
    _typeof(e)
}
function _defineProperty(e, t, i) {
    return (t = _toPropertyKey(t))in e ? Object.defineProperty(e, t, {
        value: i,
        enumerable: !0,
        configurable: !0,
        writable: !0
    }) : e[t] = i,
    e
}
function _toPropertyKey(e) {
    var t = _toPrimitive(e, "string");
    return "symbol" === (void 0 === t ? "undefined" : _typeof(t)) ? t : String(t)
}
function _toPrimitive(e, t) {
    if ("object" !== (void 0 === e ? "undefined" : _typeof(e)) || null === e)
        return e;
    var i = e[Symbol.toPrimitive];
    if (void 0 !== i) {
        var o = i.call(e, t || "default");
        if ("object" !== (void 0 === o ? "undefined" : _typeof(o)))
            return o;
        throw new TypeError("@@toPrimitive must return a primitive value.")
    }
    return ("string" === t ? String : Number)(e)
}
function initAutoTag() {
    $(".demo option").remove(),
    $.ajax({
        url: "assets/data/api/users/users.json",
        async: !0,
        dataType: "json",
        success: function(e) {
            for (var t = 0; t < e.length; t++) {
                var i, o = '\n                    <option value="' + e[t].user_id + '">@' + e[t].first_name + " " + e[t].last_name + "</option>\n                ";
                if ($(".demo").append(o),
                t < e.length - 1)
                    $(".demo").tokenize2((_defineProperty(i = {
                        tokensMaxItems: 0,
                        tokensAllowCustom: !1,
                        dropdownMaxItems: 6,
                        searchMinLength: 0,
                        searchMaxLength: 0,
                        searchFromStart: !0,
                        searchHighlight: !0,
                        delimiter: ",",
                        displayNoResultsMessage: !1,
                        noResultsMessageText: 'No results mached "%s"'
                    }, "delimiter", ","),
                    _defineProperty(i, "dataSource", "select"),
                    _defineProperty(i, "debounce", 0),
                    _defineProperty(i, "placeholder", "@"),
                    _defineProperty(i, "sortable", !1),
                    _defineProperty(i, "tabIndex", 0),
                    _defineProperty(i, "allowEmptyValues", !1),
                    _defineProperty(i, "zIndexMargin", 500),
                    i))
            }
        }
    })
}
$(document).ready((function() {
    if ($(".stories-sidebar").length) {
        var e = function() {
            window.matchMedia("(max-width: 767px)").matches || window.matchMedia("(max-width: 768px)").matches ? $(".stories-sidebar").removeClass("is-active") : $(".stories-sidebar").addClass("is-active")
        };
        $(".mobile-sidebar-trigger").on("click", (function() {
            $(".stories-sidebar").addClass("is-active")
        }
        )),
        $(".close-stories-sidebar").on("click", (function() {
            $(this).closest(".stories-sidebar").removeClass("is-active")
        }
        )),
        e(),
        $(window).on("resize", (function() {
            e()
        }
        ))
    }
    function t() {
        $(".delete-preview-item").off().on("click", (function() {
            $(".preview-image-container").remove(),
            $(".upload-placeholder, .image-upload-placeholder").removeClass("is-hidden"),
            $("#story-upload, #image-story-upload").val("")
        }
        ))
    }
    initAutoTag(),
    $(".new-story-modal .selection-box").on("click", (function() {
        $(this).closest(".modal").removeClass("is-active")
    }
    )),
    $("#story-upload").length && document.getElementById("story-upload").addEventListener("change", (function(e) {
        var i = e.target.files[0]
          , o = new FileReader;
        i.type.match("image") ? (toasts.service.info("", "mdi mdi-video", "Please upload a video file", "bottomRight", 2500),
        document.getElementById("story-upload").value = null) : (o.onload = function() {
            var e = new Blob([o.result],{
                type: i.type
            })
              , n = URL.createObjectURL(e)
              , a = document.createElement("video")
              , r = function e() {
                d() && (a.removeEventListener("timeupdate", e),
                a.pause())
            };
            a.addEventListener("loadeddata", (function() {
                d() && a.removeEventListener("timeupdate", r)
            }
            ));
            var d = function() {
                var e = document.createElement("canvas");
                e.width = a.videoWidth,
                e.height = a.videoHeight,
                e.getContext("2d").drawImage(a, 0, 0, e.width, e.height);
                var i = e.toDataURL()
                  , o = i.length > 1e5;
                if (o) {
                    var r = '\n                                <div id="video-preview-container" class="preview-image-container">\n                                    <button class="delete delete-preview-item"></button>\n                                    <img class="preview-image" src="' + i + '" alt="">\n                                </div>\n                            ';
                    document.getElementById("video-upload-placeholder").classList.add("is-hidden"),
                    document.getElementById("preview").insertAdjacentHTML("beforeend", r),
                    t(),
                    URL.revokeObjectURL(n)
                }
                return o
            };
            a.addEventListener("timeupdate", r),
            a.preload = "metadata",
            a.src = n,
            a.muted = !0,
            a.playsInline = !0,
            a.play()
        }
        ,
        o.readAsArrayBuffer(i));
        var n = document.getElementById("story-upload");
        console.log(n.files)
    }
    )),
    $("#story-image-upload").length && document.getElementById("image-story-upload").addEventListener("change", (function(e) {
        var i = e.target.files[0]
          , o = new FileReader;
        i.type.match("image") ? (o.onload = function() {
            var e = '\n                        <div id="image-preview-container" class="preview-image-container">\n                            <button class="delete delete-preview-item"></button>\n                            <img class="preview-image" src="' + o.result + '" alt="">\n                        </div>\n                    ';
            document.getElementById("image-upload-placeholder").classList.add("is-hidden"),
            document.getElementById("image-preview").insertAdjacentHTML("beforeend", e),
            t()
        }
        ,
        o.readAsDataURL(i)) : (toasts.service.info("", "mdi mdi-image-outline", "Please upload an image", "bottomRight", 2500),
        document.getElementById("image-story-upload").value = null);
        var n = document.getElementById("image-story-upload");
        console.log(n.files)
    }
    ))
}
));
