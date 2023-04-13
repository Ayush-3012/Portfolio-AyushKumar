/* INPUT VALIDATION */
let isValidEmail = false;
let isMessage = false;
const email = document.querySelector("#email");
const message = document.querySelector("#message");
const form = document.querySelector(".contact-form");

email.addEventListener("blur", (e) => {
  if (
    !(e.target.value.indexOf(".") > 0 && e.target.value.indexOf("@") > 0) ||
    /[^a-zA-z0-9.@_-]/.test(e.target.value)
  ) {
    alert("Invalid Email Address");
    isValidEmail = false;
  } else isValidEmail = true;
});

message.addEventListener("blur", (e) => {
  if (e.target.value == "") {
    alert("Message cannot be blank");
    isMessage = false;
  } else isMessage = true;
});

form.addEventListener("submit", (e) => {
  if (!isValidEmail && !isMessage) {
    alert("Required Input Fields");
    e.preventDefault();
  }
});
