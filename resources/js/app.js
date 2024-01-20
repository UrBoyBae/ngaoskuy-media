$(document).ready(function () {
    // Splash Screen
    $("#masuk-splashscreen").on("click", function () {
        window.location.href = "/user/dashboard";
    });

    $("#login-splashscreen").on("click", function () {
        window.location.href = "/login";
    });

    $("#register-splashscreen").on("click", function () {
        window.location.href = "/registrasi";
    });

    // Login Page
    $("#login-form").submit(function (e) {
        if ($("#username").val() === "" && $("#password").val() === "") {
            e.preventDefault();
            var parent = $("#username").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#username").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#username").removeClass("placeholder-[#808080]");
            $("#username").addClass("placeholder-red-700");
            $("#error-username").removeClass("hidden");
            $("#error-username").addClass("flex");
            var parent = $("#password").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#password").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#password").removeClass("placeholder-[#808080]");
            $("#password").addClass("placeholder-red-700");
            $("#error-password").removeClass("hidden");
            $("#error-password").addClass("flex");
        } else if ($("#username").val() === "") {
            e.preventDefault();
            var parent = $("#username").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#username").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#username").removeClass("placeholder-[#808080]");
            $("#username").addClass("placeholder-red-700");
            $("#error-username").removeClass("hidden");
            $("#error-username").addClass("flex");
        } else if ($("#password").val() === "") {
            e.preventDefault();
            var parent = $("#password").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#password").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#password").removeClass("placeholder-[#808080]");
            $("#password").addClass("placeholder-red-700");
            $("#error-password").removeClass("hidden");
            $("#error-password").addClass("flex");
        }
    });
    $("#username").on("input", function () {
        if ($(this).val().trim() !== "") {
            var parent = $("#username").parent();
            parent.addClass("border-[#808080]");
            parent.removeClass("border-red-700");
            var ionIcon = $("#username").closest("div").find("ion-icon");
            ionIcon.addClass("text-[#808080]");
            ionIcon.removeClass("text-red-700");
            $("#username").addClass("placeholder-[#808080]");
            $("#username").removeClass("placeholder-red-700");
            $("#error-username").addClass("hidden");
            $("#error-username").removeClass("flex");
        }
    });
    $("#password").on("input", function () {
        if ($(this).val().trim() !== "") {
            var parent = $("#password").parent();
            parent.addClass("border-[#808080]");
            parent.removeClass("border-red-700");
            var ionIcon = $("#password").closest("div").find("ion-icon");
            ionIcon.addClass("text-[#808080]");
            ionIcon.removeClass("text-red-700");
            $("#password").addClass("placeholder-[#808080]");
            $("#password").removeClass("placeholder-red-700");
            $("#error-password").addClass("hidden");
            $("#error-password").removeClass("flex");
        }
    });

    // Sidebar
    $("#toggle-sidebar, #close-sidebar").on("click", () => {
        const mainSidebar = $("#main-sidebar");

        if (mainSidebar.hasClass("hidden")) {
            mainSidebar.removeClass("hidden").addClass("fixed");
            window.addEventListener("click", clickOutsideSidebar);
        } else {
            mainSidebar.removeClass("fixed").addClass("hidden");
            window.addEventListener("click", clickOutsideSidebar);
        }

        event.stopPropagation();
    });

    // Profile
    $("#toggle-navbar-profile").on("click", () => {
        const navProfile = $("#navbar-profile");

        if (navProfile.hasClass("hidden")) {
            navProfile.removeClass("hidden").addClass("block");
            window.addEventListener("click", clickOutsideNavProfile);
        } else {
            navProfile.removeClass("block").addClass("hidden");
            window.removeEventListener("click", clickOutsideNavProfile);
        }

        event.stopPropagation();
    });
});

function clickOutsideNavProfile(event) {
    const navProfile = $("#navbar-profile");
    const toggleNavProfile = $("#toggle-navbar-profile");

    if (
        !navProfile.hasClass("hidden") &&
        !navProfile.is(event.target) &&
        !navProfile.has(event.target).length &&
        !toggleNavProfile.is(event.target) &&
        !toggleNavProfile.has(event.target).length
    ) {
        navProfile.removeClass("block").addClass("hidden");
        window.removeEventListener("click", clickOutsideNavProfile);
    }
}

function clickOutsideSidebar(event) {
    const mainSidebar = $("#main-sidebar");
    const toggleSidebar = $("#toggle-sidebar");

    if (
        !mainSidebar.hasClass("hidden") &&
        !mainSidebar.is(event.target) &&
        !mainSidebar.has(event.target).length &&
        !toggleSidebar.is(event.target) &&
        !toggleSidebar.has(event.target).length
    ) {
        mainSidebar.removeClass("block").addClass("hidden");
        window.removeEventListener("click", clickOutsideSidebar);
    }
}

// Slider
var TrandingSlider = new Swiper(".tranding-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 2.5,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        clickable: true,
    },
});

// FullCalender
document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar-dashboard");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
            start: "prev",
            center: "title",
            end: "next",
        },
        events: [
            {
                title: "Event Senin",
                daysOfWeek: [1],
                color: "#31499C",
            },
            {
                title: "Event Kamis",
                daysOfWeek: [4],
                description: "Ini adalah deskripsi event Kamis.",
                color: "#315B3D",
            },
            {
                title: "Event Sabtu",
                daysOfWeek: [6],
                description: "Ini adalah deskripsi event Sabtu.",
                color: "#B03737",
            },
        ],
    });
    calendar.render();
});
