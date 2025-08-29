window.addEventListener('scroll', function() {
  const header = document.getElementById('header');
  if (window.scrollY > 50) { 
    header.classList.add('scrolled'); // se fija y se superpone
  } else {
    header.classList.remove('scrolled'); // vuelve a ocupar su espacio
  }
});

// Toggle de tema claro/oscuro con persistencia
document.addEventListener('DOMContentLoaded', function() {
  const root = document.documentElement;
  const checkbox = document.getElementById('themeCheckbox');

  const saved = localStorage.getItem('theme');
  const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  const initial = saved || (prefersDark ? 'dark' : 'light');
  root.setAttribute('data-theme', initial === 'dark' ? 'dark' : 'light');
  if (checkbox) checkbox.checked = initial === 'dark';

  checkbox?.addEventListener('change', () => {
    const next = checkbox.checked ? 'dark' : 'light';
    root.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
  });
});