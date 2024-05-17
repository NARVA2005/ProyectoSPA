let txtPassword = document.querySelector("#password");
let verPassword = document.querySelector("#passwordvisibility");

verPassword.addEventListener("click", () => {
  if (txtPassword.type === "password") {
    verPassword.innerHTML = `
        <i class="fa-regular fa-eye-slash"></i>`;
    txtPassword.type = "text";
  } else {
    verPassword.innerHTML = `
        <i class="fa-regular fa-eye"></i>`;
    txtPassword.type = "password";
  }
});
