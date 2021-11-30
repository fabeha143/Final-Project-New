
$(document).ready(function(){

var realtime = "on";
function initRealTimeChart() {
    "use strict";
    //Real time ==========================================================================================
    var plot = $.plot("#real_time_chart", [getRandomData()], {
        series: {
            shadowSize: 0,
            color: "rgb(0, 188, 212)",
        },
        grid: {
            borderColor: "#f3f3f3",
            borderWidth: 1,
            tickColor: "#f3f3f3",
        },
        lines: {
            fill: true,
        },
        yaxis: {
            min: 0,
            max: 100,
        },
        xaxis: {
            min: 0,
            max: 100,
        },
    });

    function updateRealTime() {
        plot.setData([getRandomData()]);
        plot.draw();

        var timeout;
        if (realtime === "on") {
            timeout = setTimeout(updateRealTime, 320);
        } else {
            clearTimeout(timeout);
        }
    }

    updateRealTime();

    $("#realtime").on("change", function () {
        realtime = this.checked ? "on" : "off";
        updateRealTime();
    });
    //====================================================================================================
}

function initSparkline() {
    $(".sparkline").each(function () {
        var $this = $(this);
        $this.sparkline("html", $this.data());
    });
}

function initDonutChart() {
    "use strict";
    Morris.Donut({
        element: "donut_chart",
        data: [
            {
                label: "Chrome",
                value: 37,
            },
            {
                label: "Firefox",
                value: 30,
            },
            {
                label: "Safari",
                value: 18,
            },
            {
                label: "Opera",
                value: 12,
            },
            {
                label: "Other",
                value: 3,
            },
        ],
        colors: [
            "rgb(233, 30, 99)",
            "rgb(0, 188, 212)",
            "rgb(255, 152, 0)",
            "rgb(0, 150, 136)",
            "rgb(96, 125, 139)",
        ],
        formatter: function (y) {
            return y + "%";
        },
    });
}

var data = [],
    totalPoints = 110;
function getRandomData() {
    if (data.length > 0) data = data.slice(1);

    while (data.length < totalPoints) {
        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5;
        if (y < 0) {
            y = 0;
        } else if (y > 100) {
            y = 100;
        }

        data.push(y);
    }

    var res = [];
    for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]]);
    }

    return res;
}

("use strict");

$(function () {
    new Chart(
        document.getElementById("line_chart").getContext("2d"),
        getChartJs("line")
    );
});

function getChartJs(type) {
    var config = null;

    if (type === "line") {
        config = {
            type: "line",
            data: {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                ],
                datasets: [
                    {
                        label: "My First dataset",
                        data: [65, 59, 80, 81, 56, 55, 40],
                        borderColor: "rgba(0, 188, 212, 0.75)",
                        backgroundColor: "rgba(0, 188, 212, 0.3)",
                        pointBorderColor: "rgba(0, 188, 212, 0)",
                        pointBackgroundColor: "rgba(0, 188, 212, 0.9)",
                        pointBorderWidth: 1,
                    },
                    {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 86, 27, 90],
                        borderColor: "rgba(233, 30, 99, 0.75)",
                        backgroundColor: "rgba(233, 30, 99, 0.3)",
                        pointBorderColor: "rgba(233, 30, 99, 0)",
                        pointBackgroundColor: "rgba(233, 30, 99, 0.9)",
                        pointBorderWidth: 1,
                    },
                    {
                        label: "My Third dataset",
                        data: [80, 60, 67, 20, 20, 55, 22],
                        borderColor: "rgba(0, 188, 212, 0.75)",
                        backgroundColor: "rgba(0, 188, 212, 0.3)",
                        pointBorderColor: "rgba(0, 188, 212, 0)",
                        pointBackgroundColor: "rgba(0, 188, 212, 0.9)",
                        pointBorderWidth: 1,
                    },
                ],
            },
            options: {
                responsive: true,
                legend: false,
            },
        };
    }
    return config;
}

////////////////////////////////////// website js////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

(function ($) {
    "use strict";
    jQuery(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $(".header").addClass("sticky");
        } else {
            $(".header").removeClass("sticky");
        }
    });
    $("select").niceSelect();
    $(function () {
        $("#datepicker").datepicker();
    });
    $(".mobile-menu").slicknav({
        prependTo: ".mobile-nav",
        label: "",
        duration: 500,
    });
    $(".hero-slider").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        autoplay: 6000,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        merge: true,
        nav: true,
        navText: [
            '<i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>',
            '<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>',
        ],
        dots: false,
    });
    $(".partner-slider").owlCarousel({
        items: 6,
        autoplay: true,
        loop: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 500,
        merge: true,
        nav: false,
        dots: false,
        margin: 30,
        responsive: {
            300: { items: 2 },
            480: { items: 2 },
            768: { items: 3 },
            1170: { items: 6 },
        },
    });
    $(".testimonial-slider").owlCarousel({
        items: 3,
        autoplay: false,
        loop: true,
        margin: 30,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 500,
        merge: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        dots: true,
        responsive: {
            300: { items: 1 },
            480: { items: 1 },
            768: { items: 2 },
            1170: { items: 3 },
        },
    });
    $(".doctors-slider").owlCarousel({
        items: 4,
        autoplay: false,
        loop: true,
        margin: 30,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        smartSpeed: 500,
        merge: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        dots: false,
        responsive: {
            300: { items: 1 },
            480: { items: 1 },
            768: { items: 2 },
            1170: { items: 4 },
        },
    });
    $(".counter").counterUp({ time: 1000 });
    $(".video-popup").magnificPopup({
        type: "iframe",
        removalDelay: 300,
        mainClass: "mfp-fade",
    });
    var window_width = $(window).width();
    if (window_width > 767) {
        new WOW().init();
    }
    $.scrollUp({
        scrollName: "scrollUp",
        scrollDistance: 500,
        scrollFrom: "top",
        scrollSpeed: 1000,
        animation: "fade",
        animationSpeed: 50,
        scrollTrigger: false,
        scrollTarget: false,
        easing: "easeInOut",
        scrollText: ["<i class='far fa-angle-double-up'></i>"],
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 1,
    });
    $(window).on("load", function (event) {
        $(".preloader").delay(800).fadeOut(500);
    });
    $(".search-btn").on("click", function (event) {
        $(".popup-search-box").addClass("show");
    });
    $(".searchClose").on("click", function (event) {
        $(".popup-search-box").removeClass("show");
    });
})(jQuery);

})
