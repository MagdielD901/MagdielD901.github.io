<?php
include "./conexion.php";

// Recibe los datos del formulario (nombre, cantidad, etc.)
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];
$fecha_actualizacion = date('Y-m-d H:i:s');

// Primero, verificamos si el producto ya existe en la tabla productos
$consulta_producto = "SELECT id_producto FROM productos WHERE nombre = '$nombre'";
$resultado = $conexion->query($consulta_producto);

// Si el producto ya existe, obtenemos su id_producto
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $id_producto = $row['id_producto'];

    // Insertamos el stock con el id_producto y el nombre obtenido
    $consulta_stock = "INSERT INTO stock (id_producto, nombre, cantidad, estado, fecha_actualizacion)
                       VALUES ('$id_producto', '$nombre', '$cantidad', '$estado', '$fecha_actualizacion')";

    if ($conexion->query($consulta_stock)) {
        echo '<div class="alert alert-success" role="alert">
                Stock insertado correctamente.
              </div>';
        header("Location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/stock.php?status=1");
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Error al insertar el stock: ' . $conexion->error . '
              </div>';
        header("Location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/stock.php?status=0");
    }
} else {
    // Si el producto no existe, mostramos un mensaje de alerta
    echo '<div class="alert alert-warning" role="alert">
            El producto no existe. Por favor, agréguelo primero en la tabla productos.
          </div>';
    header("Location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/stock.php?status=2");
}

?>
