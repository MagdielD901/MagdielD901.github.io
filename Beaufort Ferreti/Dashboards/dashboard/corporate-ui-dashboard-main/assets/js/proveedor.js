document.getElementById("btnGuardarprov").onclick= (event)=>{
    event.preventDefault()//evita recargar la pagina
    document.getElementById("formAgregarProveedor").classList.add('was-validated')
    document.querySelector("#divAlerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Ups",
        text: "algo salio mal!",
        //footer: '<a href="#">Why do I have this issue?</a>'
      });
  }
  
  