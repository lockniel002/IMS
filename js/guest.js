
  document.addEventListener('DOMContentLoaded', function () {
    var nav = document.querySelector('.navbar');
    var pageBodyHead = document.querySelector('.page-body-head');

    function updateNavbar() {
      var scrollPosition = window.scrollY;

      // Adjust the value based on when you want the color change to happen
      var triggerPoint = pageBodyHead.offsetTop + pageBodyHead.offsetHeight;

      if (scrollPosition > triggerPoint) {
        nav.classList.add('navbar-scrolled');
      } else {
        nav.classList.remove('navbar-scrolled');
      }
    }

    window.addEventListener('scroll', updateNavbar);

    // Call the function initially to set the initial state
    updateNavbar();
  });

