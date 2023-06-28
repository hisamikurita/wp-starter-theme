export const tab = () => {
  const btns = document.querySelectorAll(".js-tab-btn");

  btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const target = e.currentTarget;
      const tabId = target.dataset.tab;
      const targetContents = document.querySelector(`#${tabId}`);
      const tabContents = document.querySelectorAll(".js-tab-contents");

      btns.forEach((btn) => {
        btn.classList.remove("is-active");
      });
      tabContents.forEach((tabContent) => {
        tabContent.classList.remove("is-active");
      });

      targetContents.classList.add("is-active");
      target.classList.add("is-active");
    });
  });
};
