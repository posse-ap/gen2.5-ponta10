const headerButton = document.querySelector(".header-body_button");
const modal = document.querySelector(".modal")
const filter = document.querySelector(".filter")

//modalの表示
headerButton.addEventListener("click",modalDisplay)

function modalDisplay() {
    modal.classList.add("display");
    filter.classList.add("display");
}

//modalの非表示
const closeButton = document.querySelector(".modal-close");
closeButton.addEventListener("click",modalClose)

function modalClose() {
    modal.classList.remove("display");
    filter.classList.remove("display");
}

//ローディング表示
const modalButton = document.querySelector(".modal-button")
const modalBody = document.querySelector(".modal-body")
const loader = document.querySelector(".loader")
modalButton.addEventListener("click",record)

function record() {
    loader.classList.add("display")
    modalButton.classList.remove("display");
    modalBody.classList.remove("display");
}
