export function initReveal(selector = '.reveal') {
  const items = document.querySelectorAll(selector);

  if (!('IntersectionObserver' in window)) {
    items.forEach((el) => el.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(({ target, isIntersecting }) => {
      if (!isIntersecting) return;
      target.classList.add('is-visible');
      obs.unobserve(target);
    });
  }, { threshold: 0.15 });

  items.forEach((el) => observer.observe(el));
}