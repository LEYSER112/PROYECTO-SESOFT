// INICIO VALIDACION DE CONTRASEÑA

const passwordInput = document.getElementById('password');
const confirmInput = document.getElementById('confirm_password');
const icons = {
    length: document.getElementById('icon-length'),
    uppercase: document.getElementById('icon-uppercase'),
    lowercase: document.getElementById('icon-lowercase'),
    number: document.getElementById('icon-number')
};
const submitButton = document.querySelector('button[type="submit"]');

passwordInput.addEventListener('input', validatePassword);
confirmInput.addEventListener('input', validatePassword);

function validatePassword() {
    const password = passwordInput.value;
    const confirm = confirmInput.value;
    const validations = {
        length: password.length >= 5,
        uppercase: /[A-Z]/.test(password),
        lowercase: /[a-z]/.test(password),
        number: /[0-9]/.test(password),
        match: password === confirm
    };

    for (const [key, value] of Object.entries(validations)) {
        if (key !== 'match') {
            if (value) {
                icons[key].classList.remove('fa-circle-xmark');
                icons[key].classList.add('fa-circle-check', 'valid');
            } else {
                icons[key].classList.remove('fa-circle-check', 'valid');
                icons[key].classList.add('fa-circle-xmark');
            }
        }
    }

    const allValid = Object.values(validations).every(value => value);
    submitButton.disabled = !allValid;
}

// FIN
