// validation.js

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registration-form");

    form.addEventListener("submit", (event) => {
        const errors = [];
        const firstName = document.getElementById("first-name");
        const lastName = document.getElementById("last-name");
        const age = document.getElementById("age");
        const email = document.getElementById("email");
        const confirmationEmail = document.getElementById("confirmation-email");
        const password = document.getElementById("password");
        const confirmationPassword = document.getElementById("confirmation-password");
        const role = document.getElementById("client-lawyer");
        const photo = document.getElementById("user-photo");
        const lawyerInfo = document.getElementById("lawyer-informations");
        
        // Clear previous errors
        document.querySelectorAll(".error-msg").forEach(msg => msg.textContent = "");

        // First Name Validation
        if (firstName.value.trim() === "") {
            errors.push({ id: "first-name-error", message: "Le prénom est obligatoire." });
        }

        // Last Name Validation
        if (lastName.value.trim() === "") {
            errors.push({ id: "last-name-error", message: "Le nom est obligatoire." });
        }

        // Age Validation
        if (isNaN(age.value) || age.value < 18) {
            errors.push({ id: "age-error", message: "Vous devez avoir au moins 18 ans." });
        }

        // Email Validation
        const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        if (!emailRegex.test(email.value)) {
            errors.push({ id: "email-error", message: "L'email est invalide." });
        } else if (email.value !== confirmationEmail.value) {
            errors.push({ id: "confirmation-email-error", message: "Les emails ne correspondent pas." });
        }

        // Password Validation
        if (password.value.length < 8) {
            errors.push({ id: "password-error", message: "Le mot de passe doit contenir au moins 8 caractères." });
        } else if (password.value !== confirmationPassword.value) {
            errors.push({ id: "confirmation-password-error", message: "Les mots de passe ne correspondent pas." });
        }

        // Role Validation
        if (role.value === "") {
            errors.push({ id: "role-error", message: "Veuillez choisir un rôle." });
        }

        // Photo Validation
        if (!photo.files[0]) {
            errors.push({ id: "user-photo-error", message: "Une photo est obligatoire." });
        }

        // Display Errors
        if (errors.length > 0) {
            event.preventDefault();
            errors.forEach(error => {
                const errorMsg = document.getElementById(error.id);
                errorMsg.textContent = error.message;
                errorMsg.style.display = "inline-block";
                errorMsg.classList.add("fade-in");
            });
        }
    });
});

const style = document.createElement('style');
style.textContent = `
.fade-in {
    animation: fadeIn 0.5s ease-in;
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
`;
document.head.appendChild(style);
