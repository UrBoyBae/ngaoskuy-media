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
        } else {
            mainSidebar.removeClass("fixed").addClass("hidden");
        }
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

// Search kitab
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

// Search artikel
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

// Close modal profile ketika klik diluar
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

// Close modal download ketika klik diluar
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

// Modal delete artikel
var triggerModalDelete = document.querySelectorAll("div#trigger-delete-article");
triggerModalDelete.forEach(function(buttonDelete) {
    buttonDelete.onclick = function() {
        // Show modal delete artikel
        var dataModalDelete = buttonDelete.getAttribute("data-modal-delete");
        document.getElementById(dataModalDelete).classList.remove("hidden");
        document.getElementById(dataModalDelete).classList.add("flex");
        
        // Close modal delete artikel ketika klik diluar
        var modalDelete = document.getElementById(dataModalDelete);
        modalDelete.addEventListener("click", function (event) {
            if (event.target == modalDelete) {
                modalDelete.classList.remove("flex");
                modalDelete.classList.add("hidden");
            } 
        });
    }
})

// All close modal delete
var closeModal = document.querySelectorAll("div#close-modal-delete-article");
closeModal.forEach(function(buttonClose) {
    buttonClose.onclick = function () {
        buttonClose.closest(".z-50").classList.remove("flex");
        buttonClose.closest(".z-50").classList.add("hidden");
    };
});

// Close sidebar ketika klik diluar
var mainSidebar = document.getElementById("main-sidebar");
var backdropSidebar = document.getElementById("backdrop-sidebar");
mainSidebar.addEventListener("click", function (event) {
    if (event.target == backdropSidebar) {
        mainSidebar.classList.remove("fixed");
        mainSidebar.classList.add("hidden");
    }
});

// Close setting ketika klik diluar
var mainSettingProfile = document.getElementById("main-setting-profile");
var backdropSettingProfile = document.getElementById("backdrop-setting-profile");
mainSettingProfile.addEventListener("click", function (event) {
    if (event.target == backdropSettingProfile) {
        mainSettingProfile.classList.remove("fixed");
        mainSettingProfile.classList.add("hidden");
    }
});

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
                title: "TAFSIR ALMUNIR",
                daysOfWeek: [0],
            },
            {
                title: "TAHDZIBUL AKHLAQ",
                daysOfWeek: [1],
            },
            {
                title: "FATHUL BAARI': KITABUL ADAB",
                daysOfWeek: [2],
            },
            {
                title: "TAHDZIBUL AKHLAQ",
                daysOfWeek: [2],
            },
            {
                title: "DALILULFAALIHIN",
                daysOfWeek: [3],
            },
            {
                title: "FATHUL BAARI': KITABUL IMAN",
                daysOfWeek: [4],
            },
            {
                title: "FATHUL BAARI': KITABUL MANAQIB",
                daysOfWeek: [5],
            },
            {
                title: "TAFSIR ALMUNIR",
                daysOfWeek: [6],
            },
            {
                title: "FATHUL BAARI': KITABUL FITAN",
                daysOfWeek: [6],
            },
        ],
        eventContent: function (arg) {
            var dayOfWeek = arg.event.start.getDay();
            var eventTitle = arg.event.title;
            var eventTime = "";
            var eventLocation = "";
            var backgroundCard = "";
            
            switch (dayOfWeek) {
                case 0: // Ahad
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 20:00 - 22:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">MASJID SABILUSSALAM</span></div>';
                    backgroundCard = "bg-fuchsia-400";
                    break;
                case 1: // Senin
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 20:00 - 22:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">PST. TAHDZIBUL WASHIYYAH</span></div>';
                    backgroundCard = "bg-purple-400";
                    break;
                case 2: // Selasa
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 20:00 - 22:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">MASJID ALQURANU IMAMI</span></div>';
                    backgroundCard = "bg-blue-400";
                    break;
                case 3: // Rabu
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 20:00 - 22:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">MASJID SABILUSSALAM</span></div>';
                    backgroundCard = "bg-teal-400";
                    break;
                case 4: // Kamis
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 20:00 - 22:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">MASJID ALQURANU IMAMI</span></div>';
                    backgroundCard = "bg-green-400";
                    break;
                case 5: // Jumat
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 20:00 - 22:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">PST. TAHDZIBUL WASHIYYAH</span></div>';
                    backgroundCard = "bg-orange-400";
                    break;
                case 6: // Sabtu
                    eventTime = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="time-outline"></ion-icon><span class="fc-time text-white font-semibold text-sm">Pukul 09:00 - 11:00</span></div>';
                    eventLocation = '<div class="flex items-center gap-1"><ion-icon class="font-semibold text-base" name="location-outline"></ion-icon><span class="fc-time text-white font-semibold text-xs">MASJID ADZ-DZIKRA</span></div>';
                    backgroundCard = "bg-red-400";
                    break;
            }
            
            return { html: '<div class="fc-content w-full rounded-lg px-2 pt-1 pb-2 text-white font-semibold mb-2 text-wrap '+ backgroundCard +'">' + eventTitle + eventTime + eventLocation + '</div>' };
        },
        // weekends: false,
        dayHeaderFormat: {
            weekday: 'long',
        },
    });
    
    calendar.render();
    
    if (window.matchMedia("(max-width: 768px)").matches) {
        calendar.setOption('dayHeaderFormat', {
            weekday: 'short',
        });
    }
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
