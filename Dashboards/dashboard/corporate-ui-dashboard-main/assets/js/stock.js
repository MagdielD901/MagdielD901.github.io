document.getElementById("btnGuardarStock").onclick = (event) => {
    event.preventDefault(); // evita recargar la página
  
    // Añadir validación al formulario dentro del modal con el id del formulario actualizado
    document.getElementById("formS").classList.add('was-validated');
    document.querySelector("#divAlerta").classList.remove("d-none");
  
    // Mostrar alerta con SweetAlert
    Swal.fire({
        icon: "error",
        title: "Ups...",
        text: "Algo salió mal!",
        // footer: '<a href="#">Why do I have this issue?</a>'
    });
  };
  