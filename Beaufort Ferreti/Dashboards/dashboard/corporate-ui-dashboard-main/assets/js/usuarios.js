//document.getElementById("btnGuardar").onclick= (event)=>{
 // event.preventDefault()//evita recargar la pagina
 // document.getElementById("form").classList.add('was-validated')
 // document.querySelector("#divAlerta").classList.remove("d-none")
  //Swal.fire({
   //   icon: "error",
   //   title: "Ups",
   //   //footer: '<a href="#">Why do I have this issue?</a>'
   // });
//}


var botones=document.getElementsByClassName("btnEliminar")
var botoneseditar=document.getElementsByClassName("btneditar")
for(var i=0;i<botoneseditar.length;i++){
  botoneseditar[i].onclick= (evt)=>{
    var btn = evt.target.closest("a")
    var email=btn.getAttribute("data-email")
    document.getElementById("txtemailedit").value=email 

    var funcion=btn.getAttribute("data-funcion")
    document.getElementById("txtfuncionedit").value=funcion 
    
    var name=btn.getAttribute("data-name")
    document.getElementById("txtnameedit").value=name
    
    var users=btn.getAttribute("data-users")
    //document.getElementById(" txtusersedit").value=users


   

  }
}



for(var i=0;i<botones.length;i++){
  botones[i].onclick= (evt)=>{
    var btn = evt.target
    var id= btn.getAttribute('data-id')
    //alert("ID: "+id)
    Swal.fire({
      title: "¿Eliminar?",
      text: "¿Deseas eliminar el usuario y los datos relacionados?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Eliminar!"
    }).then((result) => {
      if (result.isConfirmed) {
        location.href="../../../../Admin/php/remove-user.php?id="+id
      }
    });
  }
}
