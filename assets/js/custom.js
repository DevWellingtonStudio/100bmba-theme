/* Custom Javascript and jQuery
------------------------------------------------------- */

/* Animation for SideBar navigation */
function openNav() {
  document.getElementById("bmbaSidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("bmbaSidenav").style.width = "0";
}


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
