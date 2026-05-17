function validateName(input, feedback) {
  const nameRegex = /^[A-Za-z'-]{2,}$/;
  if (!input.value.trim()) {
    feedback.textContent = "This field cannot be empty.";
    input.classList.add("is-invalid");
  } else if (!nameRegex.test(input.value.trim())) {
    feedback.textContent = "Must be at least 2 letters (A-Z), may include hyphens or apostrophes.";
    input.classList.add("is-invalid");
  } else {
    feedback.textContent = "Looks good!";
    feedback.classList.replace("text-danger", "text-success");
    input.classList.remove("is-invalid");
  }
}

function validateUserPass(input, feedback, minLen) {
  if (!input.value.trim()) {
    feedback.textContent = "This field cannot be empty.";
    input.classList.add("is-invalid");
  } else if (input.value.trim().length < minLen) {
    feedback.textContent = `Must be at least ${minLen} characters.`;
    input.classList.add("is-invalid");
  } else {
    feedback.textContent = "Looks good!";
    feedback.classList.replace("text-danger", "text-success");
    input.classList.remove("is-invalid");
  }
}

function validateEmail(input, feedback) {
  const validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!input.value.trim()) {
    feedback.textContent = "Email cannot be empty.";
    input.classList.add("is-invalid");
  } else if (!validRegex.test(input.value.trim())) {
    feedback.textContent = "Invalid email format.";
    input.classList.add("is-invalid");
  } else {
    feedback.textContent = "Looks good!";
    feedback.classList.replace("text-danger", "text-success");
    input.classList.remove("is-invalid");
  }
}

function validatePhone(input, feedback) {
  const phoneRegex = /^\d{10}$/;
  if (!input.value.trim()) {
    feedback.textContent = "Phone number cannot be empty.";
    input.classList.add("is-invalid");
  } else if (!phoneRegex.test(input.value.trim())) {
    feedback.textContent = "Must be exactly 10 digits, no symbols or spaces.";
    input.classList.add("is-invalid");
  } else {
    feedback.textContent = "Looks good!";
    feedback.classList.replace("text-danger", "text-success");
    input.classList.remove("is-invalid");
  }
}

function validateComments(input, feedback) {
  if (!input.value.trim()) {
    feedback.textContent = "Comments cannot be empty.";
    input.classList.add("is-invalid");
  } else {
    feedback.textContent = "Looks good!";
    feedback.classList.replace("text-danger", "text-success");
    input.classList.remove("is-invalid");
  }
}

document.addEventListener("DOMContentLoaded", function() {
  const firstName = document.getElementById("firstName");
  const lastName = document.getElementById("lastName");
  const email = document.getElementById("email");
  const phone = document.getElementById("phone");
  const username = document.getElementById("username");
  const password = document.getElementById("password");
  const comments = document.getElementById("comments");

  firstName.addEventListener("blur", () => validateName(firstName, document.getElementById("firstFeedback")));
  lastName.addEventListener("blur", () => validateName(lastName, document.getElementById("lastFeedback")));
  email.addEventListener("blur", () => validateEmail(email, document.getElementById("emailFeedback")));
  phone.addEventListener("blur", () => validatePhone(phone, document.getElementById("phoneFeedback")));
  username.addEventListener("blur", () => validateUserPass(username, document.getElementById("userFeedback"), 6));
  password.addEventListener("blur", () => validateUserPass(password, document.getElementById("pwdFeedback"), 6));
  comments.addEventListener("blur", () => validateComments(comments, document.getElementById("commentFeedback")));


  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault(); 
    alert("Form submitted if all validations passed!");
  });
});
