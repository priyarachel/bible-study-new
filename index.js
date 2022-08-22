$(document).ready(function(){
  const primaryNav = document.querySelector("#primary-navigation");
  const navToggle = document.querySelector(".mobile-nav-toggle");

navToggle.addEventListener('click', () => {
  const visibility = primaryNav.getAttribute('data-visible');
  if (visibility === "false") {
    primaryNav.setAttribute('data-visible',true);
  }
  else {
    primaryNav.setAttribute('data-visible',false)
  }
})

$('a').click(() => {
  primaryNav.setAttribute('data-visible',false);
})
  });

