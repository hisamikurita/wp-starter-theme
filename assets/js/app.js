import { example } from "./module/example";
import { viewportFix, viewportSize } from "./utility/viewport";
import { gridHelper } from "./helper/grid";
import { IS_TYPE_LOCAL } from "./variables";

example();

window.addEventListener("load", () => {
  if (IS_TYPE_LOCAL) gridHelper();
  viewportSize();
  viewportFix();
});

window.addEventListener("resize", () => {
  viewportSize();
  viewportFix();
});
