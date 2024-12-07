document.getElementById('loginForm')?.addEventListener('submit', function (e) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (!username || !password) {
        e.preventDefault();
        alert('Tous les champs doivent être remplis !');
    }
});

// Validation du formulaire d'enregistrement
document.getElementById('registerForm')?.addEventListener('submit', function (e) {
    const username = document.getElementById('regUsername').value;
    const password = document.getElementById('regPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (!username || !password || !confirmPassword) {
        e.preventDefault();
        alert('Tous les champs doivent être remplis !');
    } else if (password !== confirmPassword) {
        e.preventDefault();
        alert('Les mots de passe ne correspondent pas !');
    }
});