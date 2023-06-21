// ブレイクポイント
export const BREAKPOINT = 768;
export const BESTVIEW = {
  x: 1280,
  y: 800,
};

export const IS_TYPE_LOCAL =
  document.querySelector("body").dataset.type === "local" ? true : false;
