// WHY: tiny vanilla-JS mobile nav toggle - no framework/build step needed for one interaction.
document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.getElementById('navToggle');
  var nav = document.getElementById('siteNav');
  if (!toggle || !nav) return;

  toggle.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });

  // Close the mobile menu after tapping a link
  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      nav.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });

  // ---- Header mega-menus (Marketing / Technology / Industry) --------------
  // WHY: a <button> (not a link) toggles each one, so it works the same way on
  // a desktop click, a desktop hover (handled purely in CSS), and a mobile tap,
  // without the "close menu on link click" handler above ever firing on it.
  var dropdowns = nav.querySelectorAll('.nav-item--dropdown');
  dropdowns.forEach(function (item) {
    var trigger = item.querySelector('.nav-drop-trigger');
    if (!trigger) return;

    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      var willOpen = !item.classList.contains('is-open');
      // Close any other open dropdown first so only one mega-menu is open at a time
      dropdowns.forEach(function (other) {
        if (other !== item) {
          other.classList.remove('is-open');
          var otherTrigger = other.querySelector('.nav-drop-trigger');
          if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
        }
      });
      item.classList.toggle('is-open', willOpen);
      trigger.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
    });
  });

  // Close any open dropdown when clicking elsewhere on the page
  document.addEventListener('click', function (e) {
    dropdowns.forEach(function (item) {
      if (!item.contains(e.target)) {
        item.classList.remove('is-open');
        var trigger = item.querySelector('.nav-drop-trigger');
        if (trigger) trigger.setAttribute('aria-expanded', 'false');
      }
    });
  });

  // Close with Escape too
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      dropdowns.forEach(function (item) {
        item.classList.remove('is-open');
        var trigger = item.querySelector('.nav-drop-trigger');
        if (trigger) trigger.setAttribute('aria-expanded', 'false');
      });
    }
  });
});
