
const register = document.querySelector(".register-link");
const forgot = document.querySelector(".forgot-link");
const close = document.querySelector(".close");
const loginSection = document.querySelector(".login");
const registerSection = document.querySelector(".register");
const forgotSection = document.querySelector(".forgot");


forgot.addEventListener("click", () => {
    loginSection.style.display = "none";
    forgotSection.style.display = "flex";
  });
  close.addEventListener("click", () => {
    forgotSection.style.display = "none";
    loginSection.style.display = "flex";
  });