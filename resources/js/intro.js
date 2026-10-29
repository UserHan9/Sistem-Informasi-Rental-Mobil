const wait = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

const EASE_OUT   = 'cubic-bezier(.22, 1, .36, 1)';
const EASE_INOUT = 'cubic-bezier(.76, 0, .24, 1)';

export async function initIntro({ onDone } = {}) {
  const intro  = document.getElementById('intro');
  const bg     = document.getElementById('intro-bg');
  const brand  = document.getElementById('intro-brand');
  const target = document.getElementById('nav-brand');
  const root   = document.documentElement;
  
  let revealed = false;
  const reveal = () => {
    if (revealed) return;
    revealed = true;
    onDone?.();
  };

  const finish = () => {
    target?.classList.remove('opacity-0');
    requestAnimationFrame(() => {
      intro?.remove();
      root.classList.remove('overflow-hidden');
    });
    reveal();
  };

  const skip =
    !intro || !bg || !brand || !target ||
    matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (skip) return finish();

  root.classList.add('overflow-hidden');
  await document.fonts?.ready;
  const enter = brand.animate(
    [
      { opacity: 0, transform: 'translateY(24px)' },
      { opacity: 1, transform: 'translateY(0)' },
    ],
    { duration: 900, easing: EASE_OUT, fill: 'forwards' }
  );
  await enter.finished;
  await wait(700);

  const from  = brand.getBoundingClientRect();
  const to    = target.getBoundingClientRect();
  const dx    = to.left - from.left;
  const dy    = to.top - from.top;
  const scale = to.width / from.width;

  const fly = brand.animate(
    [
      { transform: 'translate(0, 0) scale(1)', color: '#ffffff' },
      { transform: `translate(${dx}px, ${dy}px) scale(${scale})`, color: '#171717' },
    ],
    { duration: 1100, easing: EASE_INOUT, fill: 'forwards' }
  );

 
  bg.animate(
    [{ opacity: 1 }, { opacity: 0 }],
    { duration: 900, delay: 150, easing: 'ease', fill: 'forwards' }
  );


  setTimeout(reveal, 550);

  await fly.finished;
  finish();
}