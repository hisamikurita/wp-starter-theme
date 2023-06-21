import { slider } from "./module/slider";
import { anchorLink } from "./module/anchor-link";
import { tab } from "./module/tab";
import { modal } from "./module/modal";
import { accordion } from "./module/accordion";
import { viewportFix, viewportSize } from "./utility/viewport";
import { gridHelper } from "./helper/grid";
import { IS_TYPE_LOCAL } from "./variables";

// modules
slider();
anchorLink();
tab();
modal();
accordion();

// event
window.addEventListener("load", () => {
  if (IS_TYPE_LOCAL) gridHelper();
  viewportSize();
  viewportFix();
});

window.addEventListener("resize", () => {
  viewportSize();
  viewportFix();
});
