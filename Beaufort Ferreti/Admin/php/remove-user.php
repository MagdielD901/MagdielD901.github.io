<?php
include "./conexion.php";
if(isset ($_GET['id'])){
    $consulta="delete from usuarios where id_usuario=".$_GET['id'];
    $conexion->query($consulta) or die($conexion->error);
    echo "Registro eliminado correctamente";
    
}
header("Location:../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/tables.php?status=3");
?>