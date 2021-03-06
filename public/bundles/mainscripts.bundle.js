if ("undefined" == typeof jQuery)
    throw new Error("jQuery plugins need to be before this file");
($.AdminSwift = {}),
    ($.AdminSwift.options = {
        colors: {
            red: "#ec3b57",
            pink: "#E91E63",
            purple: "#ba3bd0",
            deepPurple: "#673AB7",
            indigo: "#3F51B5",
            blue: "#457fca",
            lightBlue: "#03A9F4",
            cyan: "#01b4ae",
            green: "#78b83e",
            lightGreen: "#8BC34A",
            yellow: "#ffe821",
            orange: "#FF9800",
            deepOrange: "#f83600",
            grey: "#9E9E9E",
            blueGrey: "#607D8B",
            black: "#000000",
            blush: "#F15F79",
            white: "#ffffff",
        },
        leftSideBar: {
            scrollColor: "rgba(0,0,0,0.5)",
            scrollWidth: "4px",
            scrollAlwaysVisible: !1,
            scrollBorderRadius: "0",
            scrollRailBorderRadius: "0",
        },
        dropdownMenu: { effectIn: "fadeIn", effectOut: "fadeOut" },
    }),
    ($.AdminSwift.leftSideBar = {
        activate: function () {
            var t = this,
                a = $("body"),
                r = $(".overlay");
            $(window).click(function (e) {
                var i = $(e.target);
                "i" === e.target.nodeName.toLowerCase() &&
                    (i = $(e.target).parent()),
                    !i.hasClass("bars") &&
                        t.isOpen() &&
                        0 === i.parents("#leftsidebar").length &&
                        (i.hasClass("js-right-sidebar") || r.fadeOut(),
                        a.removeClass("overlay-open"));
            }),
                $.each($(".menu-toggle.toggled"), function (e, i) {
                    $(i).next().slideToggle(0);
                }),
                $.each($(".menu .list li.active"), function (e, i) {
                    var t = $(i).find("a:eq(0)");
                    t.addClass("toggled"), t.next().show();
                }),
                $(".menu-toggle").on("click", function (e) {
                    var i = $(this),
                        t = i.next();
                    if ($(i.parents("ul")[0]).hasClass("list")) {
                        var a = $(e.target).hasClass("menu-toggle")
                            ? e.target
                            : $(e.target).parents(".menu-toggle");
                        $.each(
                            $(".menu-toggle.toggled").not(a).next(),
                            function (e, i) {
                                $(i).is(":visible") &&
                                    ($(i).prev().toggleClass("toggled"),
                                    $(i).slideUp());
                            }
                        );
                    }
                    i.toggleClass("toggled"), t.slideToggle(320);
                }),
                t.setMenuHeight(),
                t.checkStatuForResize(!0),
                $(window).resize(function () {
                    t.setMenuHeight(), t.checkStatuForResize(!1);
                }),
                Waves.attach(".menu .list a", ["waves-block"]),
                Waves.init();
        },
        setMenuHeight: function () {
            if (void 0 !== $.fn.slimScroll) {
                var e = $.AdminSwift.options.leftSideBar,
                    i =
                        $(window).height() -
                        ($(".legal").outerHeight() +
                            $(".user-info").outerHeight() +
                            $(".navbar").innerHeight()),
                    t = $("");
                t.slimScroll({ destroy: !0 }).height("auto"),
                    t.parent().find(".slimScrollBar, .slimScrollRail").remove(),
                    t.slimscroll({
                        height: i + "px",
                        color: e.scrollColor,
                        size: e.scrollWidth,
                        alwaysVisible: e.scrollAlwaysVisible,
                        borderRadius: e.scrollBorderRadius,
                        railBorderRadius: e.scrollRailBorderRadius,
                    });
            }
        },
        checkStatuForResize: function (e) {
            var i = $("body"),
                t = $(".navbar .navbar-header .bars"),
                a = i.width();
            e &&
                i
                    .find(".content, .sidebar")
                    .addClass("no-animate")
                    .delay(1e3)
                    .queue(function () {
                        $(this).removeClass("no-animate").dequeue();
                    }),
                a < 1170
                    ? (i.addClass("ls-closed"), t.fadeIn())
                    : (i.removeClass("ls-closed"), t.fadeOut());
        },
        isOpen: function () {
            return $("body").hasClass("overlay-open");
        },
    }),
    $(".sidebar .menu .list").slimscroll({
        height: "calc(100vh - 184px)",
        color: "rgba(0,0,0,0.2)",
        size: "4px",
        alwaysVisible: !1,
        borderRadius: "0",
        railBorderRadius: "0",
    }),
    ($.AdminSwift.rightSideBar = {
        activate: function () {
            var t = this,
                a = $("#rightsidebar"),
                r = $(".overlay");
            $(window).click(function (e) {
                var i = $(e.target);
                "i" === e.target.nodeName.toLowerCase() &&
                    (i = $(e.target).parent()),
                    !i.hasClass("js-right-sidebar") &&
                        t.isOpen() &&
                        0 === i.parents("#rightsidebar").length &&
                        (i.hasClass("bars") || r.fadeOut(),
                        a.removeClass("open"));
            }),
                $(".js-right-sidebar").on("click", function () {
                    a.toggleClass("open"),
                        t.isOpen() ? r.fadeIn() : r.fadeOut();
                });
        },
        isOpen: function () {
            return $(".right-sidebar").hasClass("open");
        },
    }),
    ($.AdminSwift.navbar = {
        activate: function () {
            var e = $("body"),
                i = $(".overlay");
            $(".bars").on("click", function () {
                e.toggleClass("overlay-open"),
                    e.hasClass("overlay-open") ? i.fadeIn() : i.fadeOut();
            }),
                $('.nav [data-close="true"]').on("click", function () {
                    var e = $(".navbar-toggle").is(":visible"),
                        i = $(".navbar-collapse");
                    e &&
                        i.slideUp(function () {
                            i.removeClass("in").removeAttr("style");
                        });
                });
        },
    }),
    ($.AdminSwift.input = {
        activate: function () {
            $(".form-control").focus(function () {
                $(this).parent().addClass("focused");
            }),
                $(".form-control").focusout(function () {
                    var e = $(this);
                    e.parents(".form-group").hasClass("form-float")
                        ? "" == e.val() &&
                          e.parents(".form-line").removeClass("focused")
                        : e.parents(".form-line").removeClass("focused");
                }),
                $("body").on(
                    "click",
                    ".form-float .form-line .form-label",
                    function () {
                        $(this).parent().find("input").focus();
                    }
                );
        },
    }),
    ($.AdminSwift.select = {
        activate: function () {
            $.fn.selectpicker && $("select:not(.ms)").selectpicker();
        },
    });
var edge = "Microsoft Edge",
    ie10 = "Internet Explorer 10",
    ie11 = "Internet Explorer 11",
    opera = "Opera",
    firefox = "Mozilla Firefox",
    chrome = "Google Chrome",
    safari = "Safari";
function skinChanger() {
    $(".right-sidebar .demo-choose-skin li").on("click", function () {
        var e = $("body"),
            i = $(this),
            t = $(".right-sidebar .demo-choose-skin li.active").data("theme");
        $(".right-sidebar .demo-choose-skin li").removeClass("active"),
            e.removeClass("theme-" + t),
            i.addClass("active"),
            e.addClass("theme-" + i.data("theme"));
    });
}
function setSkinListHeightAndScroll() {
    var e =
            $(window).height() -
            ($(".navbar").innerHeight() +
                $(".right-sidebar .nav-tabs").outerHeight()),
        i = $(".demo-choose-skin");
    i.slimScroll({ destroy: !0 }).height("auto"),
        i.parent().find(".slimScrollBar, .slimScrollRail").remove(),
        i.slimscroll({
            height: e + "px",
            color: "rgba(0,0,0,0.5)",
            size: "4px",
            alwaysVisible: !1,
            borderRadius: "0",
            railBorderRadius: "0",
        });
}
function setSettingListHeightAndScroll() {
    var e =
            $(window).height() -
            ($(".navbar").innerHeight() +
                $(".right-sidebar .nav-tabs").outerHeight()),
        i = $(".right-sidebar .demo-settings");
    i.slimScroll({ destroy: !0 }).height("auto"),
        i.parent().find(".slimScrollBar, .slimScrollRail").remove(),
        i.slimscroll({
            height: e + "px",
            color: "rgba(0,0,0,0.5)",
            size: "4px",
            alwaysVisible: !1,
            borderRadius: "0",
            railBorderRadius: "0",
        });
}
function activateNotificationAndTasksScroll() {
    $(".navbar-right .dropdown-menu .body .menu").slimscroll({
        height: "254px",
        color: "rgba(0,0,0,0.5)",
        size: "4px",
        alwaysVisible: !1,
        borderRadius: "0",
        railBorderRadius: "0",
    });
}
($.AdminSwift.browser = {
    activate: function () {
        "" !== this.getClassName() && $("html").addClass(this.getClassName());
    },
    getBrowser: function () {
        var e = navigator.userAgent.toLowerCase();
        return /edge/i.test(e)
            ? edge
            : /rv:11/i.test(e)
            ? ie11
            : /msie 10/i.test(e)
            ? ie10
            : /opr/i.test(e)
            ? opera
            : /chrome/i.test(e)
            ? chrome
            : /firefox/i.test(e)
            ? firefox
            : navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)
            ? safari
            : void 0;
    },
    getClassName: function () {
        var e = this.getBrowser();
        return e === edge
            ? "edge"
            : e === ie11
            ? "ie11"
            : e === ie10
            ? "ie10"
            : e === opera
            ? "opera"
            : e === chrome
            ? "chrome"
            : e === firefox
            ? "firefox"
            : e === safari
            ? "safari"
            : "";
    },
}),
    $(function () {
        $.AdminSwift.browser.activate(),
            $.AdminSwift.leftSideBar.activate(),
            $.AdminSwift.rightSideBar.activate(),
            $.AdminSwift.navbar.activate(),
            $.AdminSwift.input.activate(),
            $.AdminSwift.select.activate(),
            setTimeout(function () {
                $(".page-loader-wrapper").fadeOut();
            }, 50);
    }),
    $(window).scroll(function () {
        30 <= $(window).scrollTop()
            ? $(".clearHeader").addClass("n-top")
            : $(".clearHeader").removeClass("n-top"),
            30 <= $(window).scrollTop()
                ? $(".morphsearch").addClass("m-top")
                : $(".morphsearch").removeClass("m-top");
    }),
    $(function () {
        skinChanger(),
            activateNotificationAndTasksScroll(),
            setSkinListHeightAndScroll(),
            setSettingListHeightAndScroll(),
            $(window).resize(function () {
                setSkinListHeightAndScroll(), setSettingListHeightAndScroll();
            });
    }),
    $(function () {
        $(".control").click(function () {
            $("body").addClass("mode-search"), $(".input-search").focus();
        }),
            $(".icon-close").click(function () {
                $("body").removeClass("mode-search");
            });
    }),
    $(function () {
        var i = document.getElementById("morphsearch"),
            t = i.querySelector("input.morphsearch-input"),
            e = i.querySelector("span.morphsearch-close"),
            a = (isAnimating = !1),
            r = function (e) {
                if ("focus" === e.type.toLowerCase() && a) return !1;
                morphsearch.getBoundingClientRect();
                a
                    ? (classie.remove(i, "open"),
                      "" !== t.value &&
                          setTimeout(function () {
                              classie.add(i, "hideInput"),
                                  setTimeout(function () {
                                      classie.remove(i, "hideInput"),
                                          (t.value = "");
                                  }, 300);
                          }, 500),
                      t.blur())
                    : classie.add(i, "open"),
                    (a = !a);
            };
        t.addEventListener("focus", r),
            e.addEventListener("click", r),
            document.addEventListener("keydown", function (e) {
                27 === (e.keyCode || e.which) && a && r(e);
            }),
            i
                .querySelector('button[type="submit"]')
                .addEventListener("click", function (e) {
                    e.preventDefault();
                });
    });

    $(document).ready(function() {
        $('selector').click(function() {
           $('selector.active').removeClass("active");
           $(this).addClass("active");
        });
     });
