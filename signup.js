const passwordInput = document.getElementById('password');
const eyeIcon = document.getElementById('eye-icon');

eyeIcon.addEventListener('click', () => {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    eyeIcon.src = type === 'password' ? 'eye-open.png' : 'eye-close.png';
});

