function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}

// Registration form validation
document.addEventListener("DOMContentLoaded", () => {
    const registerForm = document.querySelector("#register-form form");
    const loginForm = document.querySelector("#login-form form");

    if (registerForm) {
        registerForm.addEventListener("submit", (e) => {
            const email = registerForm.querySelector("input[name='email']");
            const password = registerForm.querySelector("input[name='password']");
            const confirmPassword = registerForm.querySelector("input[name='confirm_password']");

            // Email format check
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value)) {
                alert("Please enter a valid email address.");
                e.preventDefault();
                return;
            }

            // Password match check
            if (password.value !== confirmPassword.value) {
                alert("Passwords do not match.");
                e.preventDefault();
                return;
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener("submit", (e) => {
            const username = loginForm.querySelector("input[name='username']");
            const password = loginForm.querySelector("input[name='password']");

            if (username.value.trim() === "" || password.value.trim() === "") {
                alert("Both fields are required.");
                e.preventDefault();
            }
        });
    }
});

