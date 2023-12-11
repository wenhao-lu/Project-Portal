console.log("JavaScript has been loaded!");

// toggle the side nav menu for mobile devices
document.addEventListener("DOMContentLoaded", function () {
    var mobileMenu = document.getElementById("mobile-menu");
    var sideNavi = document.getElementById("side-navi");

    // Add a click event listener to the mobile-menu element only for small screens
    if (window.innerWidth <= 500) {
        mobileMenu.addEventListener("click", function () {
            // Toggle the display property of side-navi
            sideNavi.style.display =
                sideNavi.style.display === "block" ? "none" : "block";
        });
    } else {
        console.log("Desktop mode: mobile-menu will not be displayed.");
    }
});
