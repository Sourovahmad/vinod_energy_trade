function toggleBody(e) {
  let open = e.dataset["open"];
  let body = e.nextElementSibling;

  if (open === "false") {
    e.setAttribute("data-open", "true");
    body.classList.remove("collapse");
  } else {
    e.setAttribute("data-open", "false");
    body.classList.add("collapse");
  }
}

// Add Modal
const modal = document.querySelector(".modal-add");
document.querySelector("#add_btn").addEventListener("click", (e) => {
  modal.classList.add("show-modal");
});
document.querySelector(".modal-close-btn").addEventListener("click", (e) => {
  modal.classList.remove("show-modal");
});
