window.addEventListener('load', function() {
    // Asegurarse de que el preloader se mantenga visible mientras se carga la página
    const preloader = document.getElementById('preloader');
    
    // Añadir un pequeño retraso para que el preloader desaparezca suavemente
    setTimeout(function() {
        preloader.style.opacity = '0'; // Hace que el preloader se desvanezca
        setTimeout(function() {
            preloader.style.display = 'none'; // Oculta el preloader completamente
            document.body.classList.add('scrollable'); // Habilita el scroll
        }, 1000); // Espera a que termine la animación de desvanecimiento (1 segundo)
    }, 5000); // Asegura que el preloader se vea por al menos 2 segundos
});
