<?php 
include "./conexion.php";
 
    $name = $_POST ['name'];
    $descripcion = $_POST ['descripcion'];
    $precio = $_POST ['precio'];
    $categoria = $_POST ['categoria'];
    $file=$_FILES['imagen']['name'];
    $temp = explode(".",$file);
    $ext = end($temp);
    $destino="../../img/Productos/";
    $file_name=date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
    if(move_uploaded_file($_FILES["imagen"]['tmp_name'],$destino.$file_name)){
      echo "Archivo subido correctamente ";
       $consulta="INSERT INTO productos (nombre, descripcion, precio, categoria, imagen)
        VALUES ('$name', '$descripcion', $precio, '$categoria', '$file_name');";

   
    $conexion->query($consulta) or die($conexion->error);
     echo "Registro insertado correctamente";
     header ("location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/productos.php?status=1");
     header ("location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/shop.php?status=1");

    }else{ 
      echo "Algo fallo en tu subida del archivo";
      header ("location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/productos.php?status=0");
      header ("location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/shop.php?status=0");
    }
    //echo $file;

    //$fehca=date('Y-m-d');

   // if($password1==$password2){
 //}
    
    //die();
   
?>