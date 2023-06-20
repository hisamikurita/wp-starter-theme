// ブレイクポイント
export const BREAKPOINT = 768;
export const BESTVIEW = {
  x: 1280,
  y: 800,
};

// デバイス判定
export const DEVICE = {
  isSp: () => {
    if (window.innerWidth < BREAKPOINT) return true;
    else return false;
  },
};

export const IS_TYPE_LOCAL =
  document.querySelector("body").dataset.type === "local" ? true : false;
