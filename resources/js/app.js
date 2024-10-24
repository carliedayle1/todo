import "./bootstrap";
import 'preline';

document.addEventListener('DOMContentLoaded', function () {
    const html = document.querySelector('html');
    const darkModeButton = document.querySelector('button[data-hs-theme-click-value="dark"]');
    const lightModeButton = document.querySelector('button[data-hs-theme-click-value="light"]');
  
    darkModeButton.addEventListener('click', function () {
      html.classList.add('dark');
      localStorage.setItem('hs_theme', 'dark');
    });
  
    lightModeButton.addEventListener('click', function () {
      html.classList.remove('dark');
      localStorage.setItem('hs_theme', 'light');
    });
  
    // Check and apply the current theme from localStorage on page load
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);
  
    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
});