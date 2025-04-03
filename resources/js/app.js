// Manejo de la transición entre las vistas de login y registro
document.querySelector('.login-btn').addEventListener('click', function() {
    document.querySelector('.container').classList.add('active');
});

document.querySelector('.register-btn').addEventListener('click', function() {
    document.querySelector('.container').classList.remove('active');
});
