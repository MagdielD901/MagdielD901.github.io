<?php
include "./conexion.php";
if(isset ($_GET['id'])){
    $consulta="delete from carrito where id_producto=".$_GET['id'];
    $conexion->query($consulta) or die($conexion->error);
    echo "Registro eliminado correctamente";
    
}
header("Location:../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/carrito.php?status=3");
?>