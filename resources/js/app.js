import { initIntro } from './intro';
import { initReveal } from './reveal';

document.addEventListener('DOMContentLoaded', () => {
  initIntro({ onDone: initReveal }); 
});