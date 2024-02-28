let accordians = document.querySelectorAll(".accordian");
// accordian.forEach(accordian) => {
//   let icon = document.querySelector(".icon");
//   let content = document.querySelector(".answer");
//   accordian.addEventListener("click", () => {
//     content.classList.toggle("active");
//   });
// });
accordians.forEach((accordian) => {
  let icon = accordian.querySelector(".icon-right");
  let content = accordian.querySelector(".answer");

  accordian.addEventListener("click", () => {
    icon.classList.toggle("active");
    content.classList.toggle("active");
  });
});
