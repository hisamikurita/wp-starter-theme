import { example } from './module/example'
import { viewportFix, viewportSize } from './utility/viewport'

example();

window.addEventListener('load', () => {
  viewportSize();
  viewportFix();
});

window.addEventListener('resize', () => {
  viewportSize();
  viewportFix();
});