// script.js - lightweight animations & interactivity

document.addEventListener('DOMContentLoaded', function () {
  // Mobile nav toggle
  const nav = document.getElementById('nav');
  const navToggle = document.getElementById('navToggle');
  navToggle && navToggle.addEventListener('click', () => nav.classList.toggle('open'));

  // Smooth anchor scroll for internal links
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (href.length > 1) {
        e.preventDefault();
        const el = document.querySelector(href);
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        // if nav open on mobile, close it
        if (nav.classList.contains('open')) nav.classList.remove('open');
      }
    });
  });

  // Lazy loading images (data-src)
  const lazyImgs = document.querySelectorAll('img.lazy');
  const imgObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        const src = img.dataset.src;
        if (src) { img.src = src; img.classList.remove('lazy'); }
        observer.unobserve(img);
      }
    });
  }, { rootMargin: "200px 0px" });
  lazyImgs.forEach(img => imgObserver.observe(img));

  // Reveal on scroll
  const reveals = document.querySelectorAll('.reveal');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  reveals.forEach(r => revealObserver.observe(r));

  // Count-up animation for stats
  const counters = document.querySelectorAll('.count');
  const counterObserver = new IntersectionObserver((entries, o) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = +el.dataset.target || 0;
        let start = 0;
        const duration = 1200;
        const stepTime = Math.abs(Math.floor(duration / (target || 1)));
        const timer = setInterval(() => {
          start += Math.ceil(target / 30);
          if (start >= target) {
            el.textContent = target;
            clearInterval(timer);
          } else {
            el.textContent = start;
          }
        }, stepTime);
        o.unobserve(el);
      }
    });
  }, { threshold: 0.2 });
  counters.forEach(c => counterObserver.observe(c));

  // Portfolio modal (simple)
  function openModal(title, image) {
    const m = document.createElement('div');
    m.className = 'pm-modal';
    m.innerHTML = `
      <div class="pm-inner">
        <button class="pm-close" aria-label="Close">&times;</button>
        <h3>${title}</h3>
        <img src="${image}" alt="${title}" />
      </div>
    `;
    document.body.appendChild(m);
    document.body.style.overflow = 'hidden';
    m.querySelector('.pm-close').addEventListener('click', () => {
      document.body.removeChild(m);
      document.body.style.overflow = '';
    });
    m.addEventListener('click', (e) => {
      if (e.target === m) { document.body.removeChild(m); document.body.style.overflow = ''; }
    });
  }

  document.querySelectorAll('.view-project, .portfolio-item').forEach(el => {
    el.addEventListener('click', (ev) => {
      // if clicked on child button or the item, find dataset
      const item = ev.currentTarget.closest('.portfolio-item') || ev.currentTarget;
      const title = item.dataset.title || item.querySelector('h4')?.textContent || 'Project';
      const image = item.dataset.image || item.querySelector('img')?.src || '';
      openModal(title, image);
    });
  });

  // Active nav highlight on scroll
  const navLinks = document.querySelectorAll('.nav a[href^="#"]');
  const sections = Array.from(navLinks).map(a => document.querySelector(a.getAttribute('href'))).filter(Boolean);
  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = '#' + entry.target.id;
        document.querySelectorAll('.nav a').forEach(a => a.classList.toggle('active', a.getAttribute('href') === id));
      }
    });
  }, { threshold: 0.4 });
  sections.forEach(sec => sectionObserver.observe(sec));

});
