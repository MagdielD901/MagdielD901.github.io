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
    var btn = evt.target
    var nombre=btn.getAttribute("data-nombre")
    document.getElementById("txtname").value=nombre

    var descripcion=btn.getAttribute("data-descripcion")
    document.getElementById("txtdescripcion").value=descripcion
    
    var categoria=btn.getAttribute("data-categoria")
    document.getElementById("txtcategoria").value=categoria
    
    var precio=btn.getAttribute("data-precio")
    document.getElementById(" txtprecio").value=precio


   

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
        location.href="../../../../Admin/php/remove-productos.php?id="+id
      }
    });
  }
}
