function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
}

// Handle the visibility of the menu button based on screen size
window.onload = function() {
    toggleMenuButton();
};

window.onresize = function() {
    toggleMenuButton();
};

function toggleMenuButton() {
    if (window.innerWidth >= 992) {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("menuBtn").style.display = "none";
    } else {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("menuBtn").style.display = "block";
    }
}