<?php session_start();
  if(!isset($_SESSION['user_data'])){
    header("Location: ../pages/sign-in.php");

  }
  $user_data = $_SESSION['user_data'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Beaufort Ferreti
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
        <div class="col-md-12">
          <div class="d-md-flex align-items-center mb-3 mx-2">
            <div class="mb-md-0 mb-3">
              <h3 class="font-weight-bold mb-0">Hola Magdiel</h3>
              <p class="mb-0">Tu dashboard esta listo!</p>
            </div>
            <button type="button" class="btn btn-sm  btn-icon d-flex align-items-center mb-0 ms-md-auto mb-sm-0 mb-2 me-2">
             
            </button>
            
            <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0">
              <span class="btn-inner--icon">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
              </span>
              <span class="btn-inner--text">Actualizar</span>
            </button>
          </div>
        </div>
      </div>

      <hr class="my-0">
      <div class="row">
        <div class="position-relative overflow-hidden">
          <div class="swiper mySwiper mt-4 mb-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div>
                  <div class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                    <div class="full-background bg-cover" style="background-image: url('../assets/img/otoño3.jpg')"></div>
                    <div class="card-body text-start px-3 py-0 w-100">
                      <div class="row mt-12">
                        <div class="col-sm-3 mt-auto">
                          <h4 class="text-white font-weight-bolder">#2</h4>
                          <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Actualizacion</p>
                          <h5 class="text-white font-weight-bolder">Septiembre 2024</h5>

                          
                        </div>
                        <div class="col-sm-3 ms-auto mt-auto">
                          <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Categoria</p>
                          <h5 class="text-white font-weight-bolder">Otoño</h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                  <div class="full-background bg-cover" style="background-image: url('../assets/img/invierno.jpg')"></div>
                  <div class="card-body text-start px-3 py-0 w-100">
                    <div class="row mt-12">
                      <div class="col-sm-3 mt-auto">
                        <h4 class="text-dark font-weight-bolder">#1</h4>
                          <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Actualizacion</p>
                          <h5 class="text-dark font-weight-bolder">Noviembre 2024</h5>
                      </div>
                      <div class="col-sm-3 ms-auto mt-auto">
                        <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Categoria</p>
                          <h5 class="text-white font-weight-bolder">Invierno</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                  <div class="full-background bg-cover" style="background-image: url('../assets/img/verano.jpg')"></div>
                  <div class="card-body text-start px-3 py-0 w-100">
                    <div class="row mt-12">
                      <div class="col-sm-3 mt-auto">
                        <h4 class="text-white font-weight-bolder">#3</h4>
                        <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Actualizacion</p>
                        <h5 class="text-white font-weight-bolder">Junio 2024</h5>
                      </div>
                      <div class="col-sm-3 ms-auto mt-auto">
                        <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Categoria</p>
                        <h5 class="text-white font-weight-bolder">Verano</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                  <div class="full-background bg-cover" style="background-image: url('../assets/img/primavera.jpg')"></div>
                  <div class="card-body text-start px-3 py-0 w-100">
                    <div class="row mt-12">
                      <div class="col-sm-3 mt-auto">
                        <h4 class="text-white font-weight-bolder">#4</h4>
                        <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Actualizacion</p>
                        <h5 class="text-white font-weight-bolder">Marzo 2024</h5>
                      </div>
                      <div class="col-sm-3 ms-auto mt-auto">
                        <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Categoria</p>
                        <h5 class="text-white font-weight-bolder">Primavera</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                  <div class="full-background bg-cover" style="background-image: url('../assets/img/accesorios.jpg')"></div>
                  <div class="card-body text-start px-3 py-0 w-100">
                    <div class="row mt-12">
                      <div class="col-sm-3 mt-auto">
                        <h4 class="text-dark font-weight-bolder">#5</h4>
                        <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Actualizacion</p>
                        <h5 class="text-dark font-weight-bolder">Pendiente</h5>
                      </div>
                      <div class="col-sm-3 ms-auto mt-auto">
                        <p class="text-white opacity-6 text-xs font-weight-bolder mb-0">Categoria</p>
                        <h5 class="text-white font-weight-bolder">Accesorios</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
          <div class="card shadow-xs border h-100">
            <div class="card-header pb-0">
              <h6 class="font-weight-semibold text-lg mb-0">Balances recientes</h6>
              <p class="text-sm">Aqui tienes los detalles acerca de tus balances.</p>
              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-white px-3 mb-0" for="btnradio1">12 meses</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-white px-3 mb-0" for="btnradio2">30 dias</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-white px-3 mb-0" for="btnradio3">7 dias</label>
              </div>
            </div>
            <div class="card-body py-3">
              <div class="chart mb-2">
                <canvas id="chart-bars" class="chart-canvas" height="240"></canvas>
              </div>
              <button class="btn btn-white mb-0 ms-auto">Ver reporte</button>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="card shadow-xs border">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center mb-3">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">Transacciones recientes</h6>
                  <p class="text-sm mb-sm-0 mb-2">Aqui tienes los detalles acerca de las ultimas transacciones</p>
                </div>
                <div class="ms-auto d-flex">
                  <button type="button" class="btn btn-sm btn-white mb-0 me-2">
                    Ver reporte
                  </button>
                  <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0">
                    <span class="btn-inner--icon">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                      </svg>
                    </span>
                    <span class="btn-inner--text">Actualizar</span>
                  </button>
                </div>
              </div>
              <div class="pb-3 d-sm-flex align-items-center">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1" autocomplete="off" checked>
                  <label class="btn btn-white px-3 mb-0" for="btnradiotable1">Todo</label>
                  <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2" autocomplete="off">
                  <label class="btn btn-white px-3 mb-0" for="btnradiotable2">...</label>
                  <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3" autocomplete="off">
                  <label class="btn btn-white px-3 mb-0" for="btnradiotable3">...</label>
                </div>
               
              </div>
            </div>
            <div class="card-body px-0 py-0">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Transacccion</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Cantidad</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Dia</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Cuenta</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                            <img src="../assets/img/small-logos/camisas.svg" class="w-80" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Camisas</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$2,500</p>
                      </td>
                      <td>
                        <span class="text-sm font-weight-normal">Martes 3:00pm</span>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <div class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                            <img src="../assets/img/logos/visa.png" class="w-90 mx-auto" alt="visa">
                          </div>
                          <div class="ms-2">
                            <p class="text-dark text-sm mb-0">Visa 1234</p>
                            <p class="text-secondary text-sm mb-0">Expiración 05/2026</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="ver información">
                          <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                            <img src="../assets/img/small-logos/pantalones.svg" class="w-80" alt="invision">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Pantalones</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$5,000</p>
                      </td>
                      <td>
                        <span class="text-sm font-weight-normal">Miercoles 1:00pm</span>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <div class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                            <img src="../assets/img/logos/mastercard.png" class="w-90 mx-auto" alt="mastercard">
                          </div>
                          <div class="ms-2">
                            <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                            <p class="text-secondary text-sm mb-0">Expiración 01/2025</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="ver información">
                          <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                            <img src="../assets/img/small-logos/accesorios.svg" class="w-80" alt="jira">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Joyeria</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$3,400</p>
                      </td>
                      <td>
                        <span class="text-sm font-weight-normal">Lunes 7:40am</span>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <div class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                            <img src="../assets/img/logos/mastercard.png" class="w-90 mx-auto" alt="mastercard">
                          </div>
                          <div class="ms-2">
                            <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                            <p class="text-secondary text-sm mb-0">Expiración 03/2028</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="ver información">
                          <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                            <img src="../assets/img/small-logos/estilocomp.svg" class="w-80" alt="slack">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Estilo completo</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-normal mb-0">$1,000</p>
                      </td>
                      <td>
                        <span class="text-sm font-weight-normal">Viernes 5:00pm</span>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <div class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                            <img src="../assets/img/logos/visa.png" class="w-90 mx-auto" alt="visa">
                          </div>
                          <div class="ms-2">
                            <p class="text-dark text-sm mb-0">Visa 1234</p>
                            <p class="text-secondary text-sm mb-0">Expiración 09/2029</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="ver información">
                          <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-start p-3 w-100">
              <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path fill-rule="evenodd" d="M7.5,5C5.6,5,4,6.6,4,8.5S5.6,12,7.5,12S11,10.4,11,8.5S9.4,5,7.5,5z M16.5,5C14.6,5,13,6.6,13,8.5s1.6,3.5,3.5,3.5 S20,10.4,20,8.5S18.4,5,16.5,5z M7.5,14C2.6,14,1,18,1,18v2h13v-2C14,18,12.4,14,7.5,14z M16.5,14c-1.5,0-2.7,0.4-3.6,0.9 c1.4,1.2,2,2.6,2.1,2.7l0.1,0.2V20h8v-2C23,18,21.4,14,16.5,14z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-secondary mb-1">Usuarios registrados este mes</p>
                    <h4 class="mb-2 font-weight-bold">38,118</h4>
                    <div class="d-flex align-items-center">
                      <span class="text-sm text-success font-weight-bolder">
                        <i class="fa fa-chevron-up text-xs me-1"></i>10.5%
                      </span>
                      <span class="text-sm ms-1">al mes anterior</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-start p-3 w-100">
              <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" >
                
                  <path d="M8.25013 6.01489C8.25003 6.00994 8.24998 6.00498 8.24998 6V5C8.24998 2.92893 9.92892 1.25 12 1.25C14.0711 1.25 15.75 2.92893 15.75 5V6C15.75 6.00498 15.7499 6.00994 15.7498 6.01489C17.0371 6.05353 17.8248 6.1924 18.4261 6.69147C19.2593 7.38295 19.4787 8.55339 19.9177 10.8943L20.6677 14.8943C21.2849 18.186 21.5934 19.8318 20.6937 20.9159C19.794 22 18.1195 22 14.7704 22H9.22954C5.88048 22 4.20595 22 3.30624 20.9159C2.40652 19.8318 2.71512 18.186 3.33231 14.8943L4.08231 10.8943C4.52122 8.55339 4.74068 7.38295 5.57386 6.69147C6.17521 6.1924 6.96287 6.05353 8.25013 6.01489ZM9.74998 5C9.74998 3.75736 10.7573 2.75 12 2.75C13.2426 2.75 14.25 3.75736 14.25 5V6C14.25 5.99999 14.25 6.00001 14.25 6C14.1747 5.99998 14.0982 6 14.0204 6H9.97954C9.90176 6 9.82525 6 9.74998 6.00002C9.74998 6.00002 9.74998 6.00003 9.74998 6.00002V5Z" />
                </svg>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-secondary mb-1">Ventas realizadas este mes</p>
                    <h4 class="mb-2 font-weight-bold">73,970</h4>
                    <div class="d-flex align-items-center">
                      <span class="text-sm text-success font-weight-bolder">
                        <i class="fa fa-chevron-up text-xs me-1"></i>55%
                      </span>
                      <span class="text-sm ms-1">al mes anterior</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-start p-3 w-100">
              <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M51.551,0H1.928C0.864,0,0,0.859,0,1.918v9.675h53.477V1.918C53.477,0.859,52.617,0,51.551,0z"></path> <path d="M0,32.566c0,1.056,0.863,1.913,1.928,1.914h49.624c1.066,0,1.925-0.858,1.925-1.914V14.263H0V32.566z"></path> 
                </svg>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-secondary mb-1">Dinero ganado este mes</p>
                    <h4 class="mb-2 font-weight-bold">$583,970.53</h4>
                    <div class="d-flex align-items-center">
                      <span class="text-sm text-success font-weight-bolder">
                        <i class="fa fa-chevron-up text-xs me-1"></i>72%
                      </span>
                      <span class="text-sm ms-1">al mes anterior</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card border shadow-xs mb-4">
            <div class="card-body text-start p-3 w-100">
              <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="w-100">
                    <p class="text-sm text-secondary mb-1">Nueva colección</p>
                    <h4 class="mb-2 font-weight-bold">Pendiente</h4>
                    <div class="d-flex align-items-center">
                      <span class="text-sm text-success font-weight-bolder">
                        <i class="fa fa-chevron-up text-xs me-1"></i>
                      </span>
                      <span class="text-sm ms-1"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-xs border">
            <div class="card-header pb-0">
              <div class="d-sm-flex align-items-center mb-3">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">Ganancias este mes</h6>
                  <p class="text-sm mb-sm-0 mb-2">Aqui tienes los detalles acerca de las ganancias</p>
                </div>
                <div class="ms-auto d-flex">
                  <button type="button" class="btn btn-sm btn-white mb-0 me-2">
                    Ver reporte
                  </button>
                </div>
              </div>
              <div class="d-sm-flex align-items-center">
                <h3 class="mb-0 font-weight-semibold">$583,970.53</h3>
                <span class="badge badge-sm border border-success text-success bg-success border-radius-sm ms-sm-3 px-2">
                  <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z" fill="#67C23A"></path>
                  </svg>
                  72%
                </span>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart mt-n6">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-xs text-muted text-lg-start">
                Copyright
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                Beaufort Ferreri
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
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/swiper-bundle.min.js" type="text/javascript"></script>
  <script>
    if (document.getElementsByClassName('mySwiper')) {
      var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: 1,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    };


    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
        datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderSkipped: false,
            backgroundColor: "#2ca8ff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500, 200],
            maxBarThickness: 6
          },
          {
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderSkipped: false,
            backgroundColor: "#7c3aed",
            data: [200, 300, 200, 420, 400, 200, 300, 430, 400, 300],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            backgroundColor: '#fff',
            titleColor: '#1e293b',
            bodyColor: '#1e293b',
            borderColor: '#e9ecef',
            borderWidth: 1,
            usePointStyle: true
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            stacked: true,
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4],
            },
            ticks: {
              beginAtZero: true,
              padding: 10,
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            },
          },
          x: {
            stacked: true,
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(45,168,255,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(45,168,255,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(45,168,255,0)'); //blue colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(119,77,211,0.4)');
    gradientStroke2.addColorStop(0.7, 'rgba(119,77,211,0.1)');
    gradientStroke2.addColorStop(0, 'rgba(119,77,211,0)'); //purple colors

    new Chart(ctx2, {
      plugins: [{
        beforeInit(chart) {
          const originalFit = chart.legend.fit;
          chart.legend.fit = function fit() {
            originalFit.bind(chart.legend)();
            this.height += 40;
          }
        },
      }],
      type: "line",
      data: {
        labels: ["Nov 01", "Nov 02", "Nov 03", "Nov 04", "Nov 05", "Nov 06", "Nov 07", "Nov 08", "Nov 09", "Nov 10", "Nov 11", "Nov 12", "Nov 13", "Nov 14", "Nov 15", "Nov 16", "Nov 17", "Nov 18"],
        datasets: [{
            label: "Ganancias",
            tension: 0,
            borderWidth: 2,
            pointRadius: 3,
            borderColor: "#2ca8ff",
            pointBorderColor: '#2ca8ff',
            pointBackgroundColor: '#2ca8ff',
            backgroundColor: gradientStroke1,
            fill: true,
            data: [2028, 10291, 30360, 32923, 1630, 9080, 2059, 30092, 1831, 10842, 1902, 10478, 1123, 2444, 20636, 2593, 2885, 19764],
            maxBarThickness: 6

          },
         
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: true,
            position: 'top',
            align: 'end',
            labels: {
              boxWidth: 6,
              boxHeight: 6,
              padding: 20,
              pointStyle: 'circle',
              borderRadius: 50,
              usePointStyle: true,
              font: {
                weight: 400,
              },
            },
          },
          tooltip: {
            backgroundColor: '#fff',
            titleColor: '#1e293b',
            bodyColor: '#1e293b',
            borderColor: '#e9ecef',
            borderWidth: 1,
            pointRadius: 2,
            usePointStyle: true,
            boxWidth: 8,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [4, 4]
            },
            ticks: {
              callback: function(value, index, ticks) {
                return parseInt(value).toLocaleString() + ' MXN';
              },
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [4, 4]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 12,
                family: "Noto Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#64748B"
            }
          },
        },
      },
    });
  </script>
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
</body>

</html>