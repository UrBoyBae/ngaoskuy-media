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
        if (
            $("#name").val() === "" &&
            $("#username").val() === "" &&
            $("#password").val() === "" &&
            $("#email").val() === ""
        ) {
            e.preventDefault();
            var parent = $("#name").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#name").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#name").removeClass("placeholder-[#808080]");
            $("#name").addClass("placeholder-red-700");
            $("#error-name").removeClass("hidden");
            $("#error-name").addClass("flex");
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
            var parent = $("#email").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#email").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#email").removeClass("placeholder-[#808080]");
            $("#email").addClass("placeholder-red-700");
            $("#error-email").removeClass("hidden");
            $("#error-email").addClass("flex");
        } else if ($("#name").val() === "") {
            e.preventDefault();
            var parent = $("#name").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#name").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#name").removeClass("placeholder-[#808080]");
            $("#name").addClass("placeholder-red-700");
            $("#error-name").removeClass("hidden");
            $("#error-name").addClass("flex");
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
        } else if ($("#email").val() === "") {
            e.preventDefault();
            var parent = $("#email").parent();
            parent.removeClass("border-[#808080]");
            parent.addClass("border-red-700");
            var ionIcon = $("#email").closest("div").find("ion-icon");
            ionIcon.removeClass("text-[#808080]");
            ionIcon.addClass("text-red-700");
            $("#email").removeClass("placeholder-[#808080]");
            $("#email").addClass("placeholder-red-700");
            $("#error-email").removeClass("hidden");
            $("#error-email").addClass("flex");
        }
    });
    $("#name").on("input", function () {
        if ($(this).val().trim() !== "") {
            var parent = $("#name").parent();
            parent.addClass("border-[#808080]");
            parent.removeClass("border-red-700");
            var ionIcon = $("#name").closest("div").find("ion-icon");
            ionIcon.addClass("text-[#808080]");
            ionIcon.removeClass("text-red-700");
            $("#name").addClass("placeholder-[#808080]");
            $("#name").removeClass("placeholder-red-700");
            $("#error-name").addClass("hidden");
            $("#error-name").removeClass("flex");
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
    $("#email").on("input", function () {
        if ($(this).val().trim() !== "") {
            var parent = $("#email").parent();
            parent.addClass("border-[#808080]");
            parent.removeClass("border-red-700");
            var ionIcon = $("#email").closest("div").find("ion-icon");
            ionIcon.addClass("text-[#808080]");
            ionIcon.removeClass("text-red-700");
            $("#email").addClass("placeholder-[#808080]");
            $("#email").removeClass("placeholder-red-700");
            $("#error-email").addClass("hidden");
            $("#error-email").removeClass("flex");
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

    // Setting Profile
    $("#setting-profile").on("click", () => {
        const navProfile = $("#navbar-profile");
        const settingProfile = $("#main-setting-profile");

        navProfile.removeClass("block").addClass("hidden");
        if (settingProfile.hasClass("hidden")) {
            settingProfile.removeClass("hidden").addClass("fixed");
        }
    });
    $("#close-main-setting-profile").on("click", () => {
        const settingProfile = $("#main-setting-profile");

        if (settingProfile.hasClass("fixed")) {
            settingProfile.removeClass("fixed").addClass("hidden");
        }
    });

    // Download Dropdown
    $("#toggle-download-dropdown").on("click", () => {
        const mainDownloadDropdown = $("#main-download-dropdown");

        if (mainDownloadDropdown.hasClass("hidden")) {
            mainDownloadDropdown.removeClass("hidden").addClass("block");
            window.addEventListener("click", clickOutsideDownloadDropdown);
        } else {
            mainDownloadDropdown.removeClass("block").addClass("hidden");
            window.addEventListener("click", clickOutsideDownloadDropdown);
        }

        event.stopPropagation();
    });

    // Send Message
    $("#message").on("keyup", () => {
        var message = $("#message").val();
        var send = $("#send");
        var submitMessage = $("#submit-message");

        if (message.length > 0) {
            send.removeClass("text-gray-400").addClass("text-black");
            submitMessage.prop("disabled", false);
        } else {
            send.removeClass("text-black").addClass("text-gray-400");
            submitMessage.prop("disabled", true);
        }
    });

    // Search Kitab
    $("#search-kitab").keyup(() => { searchKitab() });
    
    // Search Article
    $("#search-article").keyup(() => { searchArticle() });
});

function searchKitab() { 
    const searchBox = document.getElementById("search-kitab").value.toLowerCase();
    const kitabList = document.getElementById("kitab-list");
    const kitab = document.querySelectorAll("#kitab");
    const titleKitab = kitabList.getElementsByTagName("h5");
    for (let i = 0; i < titleKitab.length; i++) {
        const match = kitab[i].getElementsByTagName("h5")[0];
        if (match) {
            let textValue = match.textContent || match.innerHTML
            if (textValue.toLowerCase().indexOf(searchBox) > -1) {
                kitab[i].classList.remove("hidden");
            } else {
                kitab[i].classList.add("hidden");
            }
        }
    }
}

function searchArticle() { 
    const searchBox = document.getElementById("search-article").value.toLowerCase();
    const articleList = document.getElementById("article-list");
    const article = document.querySelectorAll("#article");
    const titleArticle = articleList.querySelectorAll("span#article-title");
    for (let i = 0; i < titleArticle.length; i++) {
        const match = article[i].querySelectorAll("span#article-title")[0];
        if (match) {
            let textValue = match.textContent || match.innerHTML
            if (textValue.toLowerCase().indexOf(searchBox) > -1) {
                article[i].classList.remove("hidden");
            } else {
                article[i].classList.add("hidden");
            }
        }
    }
}

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

function clickOutsideDownloadDropdown(event) {
    const mainDownloadDropdown = $("#main-download-dropdown");
    const toggleDownloadDropdown = $("#toggle-download-dropdown");

    if (
        !mainDownloadDropdown.hasClass("hidden") &&
        !mainDownloadDropdown.is(event.target) &&
        !mainDownloadDropdown.has(event.target).length &&
        !toggleDownloadDropdown.is(event.target) &&
        !toggleDownloadDropdown.has(event.target).length
    ) {
        mainDownloadDropdown.removeClass("block").addClass("hidden");
        window.removeEventListener("click", clickOutsideDownloadDropdown);
    }
}

// Slider
var TrandingSlider = new Swiper(".tranding-slider", {
    effect: "coverflow",
    grabCursor: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
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

// tab about us
document.addEventListener("DOMContentLoaded", function () {
    // Get all tab buttons
    const tabButtons = document.querySelectorAll("[data-tab]");

    // Get all tab content elements
    const tabContents = document.querySelectorAll(".tab-content");

    // Add click event listener to each tab button
    tabButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const tabId = this.dataset.tab;

            // Remove 'hidden' class from the selected tab content
            tabContents.forEach((content) => {
                content.classList.add("hidden");
            });
            document.getElementById(tabId).classList.remove("hidden");
        });
    });
});
