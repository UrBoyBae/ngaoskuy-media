$(document).ready(function () {
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