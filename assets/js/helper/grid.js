// 60-column grid debugger
export const gridHelper = () => {
  const grid = document.querySelector(".js-helper-grid");
  const lines = document.querySelectorAll(".js-helper-grid-line");
  let isDebug = false;

  const renderLinePosition = () => {
    lines.forEach((line, index) => {
      if (document.documentElement.clientWidth > 767) {
        line.style.left = `calc(${index + 1} * 100vw / 60)`;
      } else {
        line.style.left = `calc(${index + 1} * 100vw / 25)`;
      }
    });
  };
  renderLinePosition();

  window.addEventListener("resize", () => {
    renderLinePosition();
  });

  document.addEventListener("keypress", (e) => {
    if (e.code == "KeyD" && isDebug == false) {
      grid.classList.remove("invisible");
      isDebug = true;
    } else {
      grid.classList.add("invisible");
      isDebug = false;
    }
  });
};
