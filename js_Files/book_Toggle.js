document.addEventListener("DOMContentLoaded", function() {
    tog = document.getElementById("main");
});

function togglelogin(){
    if (tog.style.display == "block") {
        tog.style.display = "none";
    } else {
        tog.style.display = "block";
    }
}