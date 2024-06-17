var navlinks = document.getElementById("navlinks");
function showmenu() {
    navlinks.style.right = "0";
}
function hidemenu() {
    navlinks.style.right = "-200px";
}


var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
    loader.style.display = "none";
})

//pdf date publish

document.getElementById('publishDate').textContent = new Date().toLocaleDateString();