<?php
  include "../../../../Admin/php/conexion.php";

  $sql2="select * from productos order by id_producto DESC";
  $res2= $conexion->query($sql2) or die($conexion->error);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Productos
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>

<body class="g-sidenav-show  bg-gray-100">

  


<?php include "../../../../layouts/aside.php"?>


  

<style>
  /* Estilos adicionales para eliminar la barra de desplazamiento */
  #sidenav-main {
    overflow-y: hidden;
    height: 100vh;
  }
  
  /* Asegura que el contenido del navbar colapse correctamente en altura */
  #sidenav-collapse-main {
    max-height: calc(100vh - 60px); /* Ajusta para dejar espacio para la cabecera */
    overflow-y: auto;
  }

  /* Ajustes de estilo */
  .nav-link {
    display: flex;
    align-items: center;
    color: #ffffff;
  }
  .nav-link:hover, .nav-link.active {
    background-color: #1a202c; /* Fondo para el elemento activo */
  }
</style>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   


  <?php include "../../../../layouts/header.php"?>





    <div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-12">
          <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
            <div class="full-background" style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
            <div class="card-body text-start p-4 w-100">
              <h3 class="text-white mb-2">Tablas </h3>
              <p class="mb-4 font-weight-semibold">
                Navega para saber más
              </p>
              
              <img src="../assets/img/3d-cube.png" alt="3d-cube" class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
            </div>
          </div>
        </div>
      </div>


      <!-- LISTA DE PRODUCTOS -->
      <div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">Lista de productos</h6>
                  <p class="text-sm">Ver información acerca de todos los productos</p>
                </div>
                <div class="ms-auto d-flex">
                  <button type="button" class="btn btn-sm btn-white me-2">
                    Ver todo
                  </button>
                  <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="btn-inner--icon">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                      </svg>
                    </span>
                    <span class="btn-inner--text">Añadir producto</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="card-body px-0 py-0">
              <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1" autocomplete="off" checked>
                  <label class="btn btn-white px-3 mb-0" for="btnradiotable1">Todo</label>
                  <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2" autocomplete="off">
                  <label class="btn btn-white px-3 mb-0" for="btnradiotable2">...</label>
                  <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3" autocomplete="off">
                  <label class="btn btn-white px-3 mb-0" for="btnradiotable3">...</label>
                </div>
                <div class="input-group w-sm-25 ms-auto">
                  <span class="input-group-text text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                  </span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Producto</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Categoria</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Precio</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">ID </th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  <?php
                    while($fila = mysqli_fetch_array($res2) ){

                      ?>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex align-items-center">
                          <img src="../../../../img/Productos/<?php echo $fila['imagen']?>" class="avatar avatar-sm rounded-circle me-2" alt="producto1">
                          </div>
                          <div class="d-flex flex-column justify-content-center ms-1">
                            <h6 class="mb-0 text-sm font-weight-semibold"> <?php echo $fila ['nombre'] ?> </h6>
                            <p class="text-sm text-secondary mb-0"><?php echo $fila ['descripcion'] ?> </p>
                          </div>
                      </td>
                      <td>
                        <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo $fila ['categoria'] ?></p>
                        <p class="text-sm text-secondary mb-0"><?php echo $fila ['nombre'] ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm border border-success text-success bg-success">$<?php echo $fila ['precio'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"><?php echo $fila ['id_producto'] ?></span>
                      </td>
                      <td class="align-middle" >
                        <a href="javascript:;"  class="btneditar"
                        data-nombre="<?php echo $fila ['nombre'] ?>"
                        data-descripcion="<?php echo $fila ['descripcion'] ?>"
                        data-precio="<?php echo $fila ['precio'] ?>"
                        data-categoria="<?php echo $fila ['categoria'] ?>"
                        
                        
                         data-bs-target="modaleditar" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Editar usuario">
                          <svg  width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                      </td>
                      <td class="align-middle" >
                        <a href="javascript:;" data-id="<?php echo $fila ['id_producto'] ?>" class="btnEliminar text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Eliminar usuario">
                        <svg  data-id="<?php echo $fila ['id_producto'] ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                          </svg>
                        </a>
                      </td>
                    </tr>

                    <?php  } ?>

                       
                
                  </tbody>
                </table>
              </div>
              
              <div class="border-top py-3 px-3 d-flex align-items-center">
                <p class="font-weight-semibold mb-0 text-dark text-sm">Pagina 1 de 3</p>
                <div class="ms-auto">
                  <button class="btn btn-sm btn-white mb-0">Previsualizar</button>
                  <button class="btn btn-sm btn-white mb-0">Siguiente</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- LISTA DE PRODUCTOS -->

      <!-- MODAL PRODUCTOS -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../../../Admin/php/add-productos.php" enctype="multipart/form-data" method="post" class="needs-validation" novalidate id="form">

           <div class="modal-body"> 
           <div class="row">
           <div class="col-6">
          <label  for="">Nombre del producto</label>
          <input name="name" required type="text" class="form-control" placeholder="Inserta el nombre del producto">
          <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> Nombre no valido</div>
          </div>

          <div class="col-6">
              <label for="">Descripcion</label>
              <input name="descripcion" required type="text" class="form-control" placeholder="Descripción del producto">
              <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> Descripcion no valido</div>
              </div>

        </div>

        <div class="row">
          <div class="col-6">
         <label for=""> Categoria</label>
         <input name="categoria"  type="text" class="form-control" placeholder="Inserta la categoria del producto">
         <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> Usuario no valido</div>
         </div>

         <div class="col-6">
             <label for="">Precio</label>
             <input name="precio"required type="numeric" class="form-control" placeholder="Ingresa precio">
             <div class="valid-feedback"> Correcto</div>
             <div class="invalid-feedback"> Usuario no valido</div>
             </div>

       </div>

    

         <div class="row">
          <div class="col-6">
         <label for="">Foto del producto</label>
         <input accept="image/*"  name="imagen" required type="file" class="form-control" placeholder="Ingresa la foto del producto">
         <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> No valido</div>
         </div>

      
       </div>

        
       <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
          ¡Favor de llenar los campos!
        </div>

           </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnGuardar1">Guardar</button>
           </div>
      </form>

    </div>
  </div>
</div>
<!-- MODAL PRODUCTOS -->


<!-- MODAL PRODUCTOS 2 -->
<div class="modal fade modal-lg" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../../../Admin/php/add-productos.php" enctype="multipart/form-data" method="post" class="needs-validation" novalidate id="form">

           <div class="modal-body"> 
           <div class="row">
           <div class="col-6">
          <label  for="">Nombre del producto</label>
          <input id="txtname" name="name" required type="text" class="form-control" placeholder="Inserta el nombre del producto">
          <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> Nombre no valido</div>
          </div>

          <div class="col-6">
              <label for="">Descripcion</label>
              <input id="txtdescripcion" name="descripcion" required type="text" class="form-control" placeholder="Descripción del producto">
              <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> Descripcion no valido</div>
              </div>

        </div>

        <div class="row">
          <div class="col-6">
         <label for=""> Categoria</label>
         <input  id="txtcategoria" name="categoria"  type="text" class="form-control" placeholder="Inserta la categoria del producto">
         <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> Usuario no valido</div>
         </div>

         <div class="col-6">
             <label for="">Precio</label>
             <input id="txtprecio" name="precio"required type="text" class="form-control" placeholder="Ingresa precio">
             <div class="valid-feedback"> Correcto</div>
             <div class="invalid-feedback"> Usuario no valido</div>
             </div>

       </div>

    

         <div class="row">
          <div class="col-6">
         <label for="">Foto de perfil</label>
         <input accept="image/*"  name="imagen" required type="file" class="form-control" placeholder="Ingresa tu foto de perfil">
         <div class="valid-feedback"> Correcto</div>
          <div class="invalid-feedback"> No valido</div>
         </div>

      
       </div>

        
       <div class="alert alert-danger mt-4 d-none" id="divAlerta" role="alert">
          ¡Favor de llenar los campos!
        </div>

           </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnGuardar1">Guardar</button>
           </div>
      </form>

    </div>
  </div>
</div>
<!-- MODAL PRODUCTOS 2 -->



      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-xs text-muted text-lg-start">
                Copyright
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                Beaufort Ferreti
                <a href="https://magdield901.github.io/" class="text-secondary" target="_blank"></a>.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://magdield901.github.io/" class="nav-link text-xs text-muted" target="_blank">Beaufort Ferreti</a>
                </li>
              
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  
       
        
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../assets/js/usuarios.js"></script>
  <script src="../assets/js/stock.js"></script>
  <script src="../assets/js/proveedor.js"></script>
  <script src="../assets/js/productos.js"></script>
  <?php 
      if(isset($_GET['status'])){
        $message="";
        if($_GET['status']==1){
          //insertado correctamente
          $message="Registro insertado correctamente";

        }else if ($_GET['status']==2){
          //actualizado correcto
          $message="Registro actualizado correctamente";

        }else if ($_GET['status']==3){
          //eliminado correcto
          $message="Registro eliminado correctamente";

        }
        ?> 
          <script>
            Swal.fire({
  icon: "success",
  title: "Correcto",
  text: "<?php echo $message ?>",
  footer: '<a href="#">Why do I have this issue?</a>'
});
          </script>
        <?php
      }
  ?>



  <?php 
    if(isset($_GET['status'])){
      if($_GET['status']==1){
        ?>


<script> 
           Swal.fire({
           icon: "success",
           title: "Todo bien",
           text: "Esta correcto todo!",
           footer: '<a href="./stock.php">¿ir al stock?</a>'
              });
          </script>
        <?php
      }else{
        ?>
        <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Algo esta mal!",
            footer: '<a href="#">Por que tengo este problema?</a>'
              });
</script> 
        
           
        <?php


      }
    }
  ?>
</body>

</html>