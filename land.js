// script.js
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const menuItems = document.querySelectorAll('.menu-item');
  
    menuItems.forEach(item => {
      item.addEventListener('click', () => {
        menuToggle.checked = false;
      });
    });
  });
  