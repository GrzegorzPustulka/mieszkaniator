document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // W tym miejscu można dodać logikę weryfikacji danych logowania
    // Na potrzeby przykładu, przyjmujemy, że poprawne dane to "user" i "password123"

    if (username === 'user' && password === 'password123') {
        window.location.href = 'success.html'; // Przekierowanie po poprawnym zalogowaniu
    } else {
        const errorMessage = document.getElementById('error-message');
        errorMessage.textContent = 'Błędna nazwa użytkownika lub hasło. Spróbuj ponownie.';
    }
});
