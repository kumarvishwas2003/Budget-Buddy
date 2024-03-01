let accordians = document.querySelectorAll(".accordian");
accordians.forEach((accordian) => {
  let icon = accordian.querySelector(".icon-right");
  let content = accordian.querySelector(".answer");

  accordian.addEventListener("click", () => {
    icon.classList.toggle("active");
    content.classList.toggle("active");
  });
});
