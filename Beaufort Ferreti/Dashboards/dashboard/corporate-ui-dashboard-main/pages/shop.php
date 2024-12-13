<?php
  include "../../../../Admin/php/conexion.php";

  $sql2="select * from productos order by id_producto DESC";
  $res2= $conexion->query($sql2) or die($conexion->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="../../../../css/shop.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../../../../css/index.css">
</head>
<body>

     <?php include "./menu.html"?>
   
    <section class="section__container musthave__container">
        <h2 class="section__title">BEAUFORT FERRETI</h2>
        <div class="musthave__nav">
          <a href="#">TODO</a>
          <a href="#">HOMBRE</a>
          <a href="#">MUJER</a>
          <a href="#">NIÑOS</a>
          <a href="#">BEBES</a>
          <a href="#">ACCESORIOS</a>
          <a href="#">DESCUENTOS</a>
          <a href="#">COLECCIONES</a>
        </div>

        <div class="musthave__grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <?php
            while($fila = mysqli_fetch_array($res2)) {
        ?>
            <div class="combined-card">
                <div class="tarjeta-coleccion">
                    <a href="./prueba2.html">
                        <!-- Imagen redimensionada con clases de Bootstrap -->
                        <a href="shop_producto.php?id=<?php echo $fila['id_producto']; ?>">
                        <img src="../../../../img/Productos/<?php echo $fila['imagen']?>" alt="verano" class="img-fluid" style="object-fit: cover; width: 100%; height: 260px;" />
                    </a>
                    <div class="contenido-tarjeta">
                        <h4><?php echo $fila['nombre']; ?></h4>
                        <label class="ui-like">
                            <input type="checkbox">
                            <div class="like">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="">
                                    <path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path>
                                </svg>
                            </div>
                        </label>
                        <p><del>$45.00</del>  $<?php echo $fila ['precio'] ?></p>

                        <form action="../../../../Admin/php/add-carrito.php" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $fila['id_producto']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $fila['nombre']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fila['precio']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fila['imagen']; ?>">
                            <button type="submit" class="button">
                                <p id="butt">Agregar al carrito</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
      </section>

      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script src="../assets/js/productos.js"></script>
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script src="../assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
