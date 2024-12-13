<?php
include "./conexion.php";
if(isset ($_GET['id'])){
    $consulta="delete from productos where id_producto=".$_GET['id'];
    $conexion->query($consulta) or die($conexion->error);
    echo "Registro eliminado correctamente";
    
}
header("Location:../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/productos.php?status=3");
?>