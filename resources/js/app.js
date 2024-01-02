$(document).ready(function () {
    // Login Validation
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
    $("#toggleSidebar, #closeSidebar").on("click", () => {
        const mainSidebar = $("#mainSidebar");

        if (mainSidebar.hasClass("hidden")) {
            mainSidebar.removeClass("hidden").addClass("fixed");
        } else {
            mainSidebar.removeClass("fixed").addClass("hidden");
        }
    });
    $("#toggleNavProfile").on("click", () => {
        const navProfile = $("#navProfile");

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
    const navProfile = $("#navProfile");
    const toggleNavProfile = $("#toggleNavProfile");

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
