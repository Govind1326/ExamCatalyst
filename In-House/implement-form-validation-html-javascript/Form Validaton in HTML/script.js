// Selecting form and input elements
const form = document.querySelector("form");
const passwordInput = document.getElementById("password");
const passToggleBtn = document.getElementById("pass-toggle-btn");
const cpasswordInput = document.getElementById("cpassword");

// Function to display error messages
const showError = (field, errorText) => {
    field.classList.add("error");
    const errorElement = document.createElement("small");
    errorElement.classList.add("error-text");
    errorElement.innerText = errorText;
    field.closest(".form-group").appendChild(errorElement);
}
// Function to display pass messages
// const showPass = (field, passText) => {
//     field.classList.add("pass");
//     const passElement = document.createElement("small1");
//     passElement.classList.add("pass-text");
//     passElement.innerText = passText;
//     field.closest(".form-group").appendChild(passElement);
// }

// Function to handle form submission
const handleFormData = (e) => {
    e.preventDefault();

    // Retrieving input elements
    const fullnameInput = document.getElementById("fullname");
    const emailInput = document.getElementById("email");
    const dateInput = document.getElementById("date");
    const genderInput = document.getElementById("gender");
    const phoneInput = document.getElementById("phone");
    const seatInput = document.getElementById("seatno");

    // Getting trimmed values from input fields
    const fullname = fullnameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    const date = dateInput.value;
    const gender = genderInput.value;
    const phone = phoneInput.value.trim();
    const seat = seatInput.value.trim();
    const cpassword = cpasswordInput.value.trim();

    // Regular expression pattern for email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Clearing previous error messages
    document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Performing validation checks
    if (fullname === "") {
        showError(fullnameInput, "Enter your full name");
    }else if(fullname.length<6){
        showError(fullnameInput, "minimum char 6");
    }else{
        // showPass(fullnameInput, "");
    }
    if (!emailPattern.test(email)) {
        showError(emailInput, "Enter a valid email address");
    }else{
        // showPass(emailInput, "");
    }
    if (password === "") {
        showError(passwordInput, "Enter your password");
    }
    if (cpassword === "") {
        showError(cpasswordInput, "Enter your password");
    }else if(password!==cpassword){
        showError(cpasswaordInput, "both password is not matched");
    }else{
        // showPass(cpasswordInput, "");
    }
    if (date === "") {
        showError(dateInput, "Select date of birth");
    }
    if (gender === "") {
        showError(genderInput, "Select gender");
    }
    if(phone===""){
        showError(phoneInput,"Enter phone number")
    }
    else if(phone.length<10){
        showError(phoneInput,"Phone number cant be less than 10 number")
    }
    if(seat===""){
        showError(seatInput,"Enter seat no")
    }
    if(seat.length>5){
        showError(seatInput,"Seat no cant be greater than 5")
    }

    // Checking for any remaining errors before form submission
    const errorInputs = document.querySelectorAll(".form-group .error");
    if (errorInputs.length > 0) return;

    // Submitting the form
    form.submit();
}

// Toggling password visibility
passToggleBtn.addEventListener('click', () => {
    passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});

// Handling form submission event
form.addEventListener("submit", handleFormData);