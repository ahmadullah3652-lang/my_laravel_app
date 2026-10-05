
document.addEventListener("DOMContentLoaded", function () {

   const form = document.getElementById("registerForm");

   // ===== REGISTER =====
   form.addEventListener("submit", function (e) {
      e.preventDefault();

      const fullname = document.getElementById("fullname").value;
      const address = document.getElementById("address").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      eye.addEventListener("click", function () {

   if (password.type === "password") {
      password.type = "text";
      eye.innerHTML = "🙈";
   } else {
      password.type = "password";
      eye.innerHTML = "👁";
   }
});

      if (!fullname || !address || !email || !password) {
         alert("ټول معلومات داخل کړه");
         return;
      }

      if (password.length < 6) {
         alert("پاسورډ باید لږ تر لږه 6 حروف وي");
         return; 
      }
      if (!email.includes("@") || !email.includes(".")) {
   alert("سم ایمیل داخل کړه");
   return;
}


      let users = JSON.parse(localStorage.getItem("users")) || [];

      const newUser = {
       fullname: fullname,
       email: email,
       address: address,
       password: password
      };

      users.push(newUser);

      localStorage.setItem("users",
      JSON.stringify(users));

      alert("Registration Successful ✔");

      window.location.href = "index.html";
   });

});
// ================= ELEMENTS =================
const password = document.getElementById("password");
const eye = document.getElementById("eye");
const userInput = document.getElementById("user");
const loginMessage = document.getElementById("loginMessage");

// ================= SHOW / HIDE PASSWORD =================
eye.addEventListener("click", function () {

   if (password.type === "password") {
      password.type = "text";
      eye.innerHTML = "🙈";
   } else {
      password.type = "password";
      eye.innerHTML = "👁";
   }

});
const loginForm = document.getElementById("loginForm");

loginForm.addEventListener("submit", function (e) {

   e.preventDefault();

   const fullname = document.getElementById("user").value.trim();
   const password = document.getElementById("password").value.trim();

   if (!fullname || !password) {
      alert("نوم او پاسورډ داخل کړئ");
      return;
   }

   // localStorage څخه users رااخلو
   let users = JSON.parse(localStorage.getItem("users")) || [];

   // user پیدا کوو
   const foundUser = users.find(user =>
      user.fullname === fullname &&
      user.password === password
   );

   if (foundUser) {

      alert("ننوتل بریالي شول ✔");

      window.location.href = "index.html";

   } else {

      alert("نوم یا پاسورډ غلط دی");
   }

});

