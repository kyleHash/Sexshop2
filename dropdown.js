document.addEventListener("DOMContentLoaded", function () {
    const toggleDropdownButton = document.getElementById("toggle-dropdown");
    const dropdownContent = document.getElementById("dropdown-content");

    toggleDropdownButton.addEventListener("click", function () {
        dropdownContent.classList.toggle("active");
    });
});
// JavaScript Document