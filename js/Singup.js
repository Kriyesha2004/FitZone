 //  validation
 document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); 
    
    // Get input values
    let fullName = document.getElementById("fullName").value.trim();
    let email = document.getElementById("email").value.trim();
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirmPassword = document.getElementById("confirmPassword").value.trim();
    let errorMessage = document.getElementById("error-message");

    // Validate form
    if (fullName === "" || email === "" || username === "" || password === "" || confirmPassword === "") {
        errorMessage.textContent = "All fields are required!";
        return;
    }

    if (password.length < 6) {
        errorMessage.textContent = "Password must be at least 6 characters long!";
        return;
    }

    if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match!";
        return;
    }

    // If validation passes
    errorMessage.textContent = "";
    alert("Sign-up successful!");
    document.getElementById("signup-form").reset(); // Clear form
});