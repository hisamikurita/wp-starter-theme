import { slider } from "./modules/slider";
import { anchorLink } from "./modules/anchor-link";
import { tab } from "./modules/tab";
import { modal } from "./modules/modal";
import { hamburgerMenu } from "./modules/hamburger-menu";
import { accordion } from "./modules/accordion";
import { viewportFix, viewportSize } from "./utils/viewport";
import { gridHelper } from "./utils/grid-helper";
import { IS_TYPE_LOCAL } from "./constants";

/**
 * viewportに関する処理
 */
window.addEventListener("DOMContentLoaded", () => {
	viewportSize();
	viewportFix();
});

window.addEventListener("resize", () => {
	viewportSize();
	viewportFix();
});

/**
 * modules
 */
hamburgerMenu();
slider();
anchorLink();
tab();
modal();
accordion();

// グリッドシステムを使用しない場合は、以下のコードをコメントアウトしてください。
if (IS_TYPE_LOCAL) gridHelper();
