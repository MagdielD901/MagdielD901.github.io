<?php 
include "./conexion.php";
 
    $name = $_POST ['name'];
    $namea = $_POST ['namea'];
    $usuario = $_POST ['nomusuario'];
    $nivel = $_POST ['nivelusuario'];
    $email = $_POST ['email'];
    $password1 = $_POST ['password1'];
    $password2 = $_POST ['password2'];
    $file=$_FILES['imagen']['name'];
    $temp = explode(".",$file);
    $ext = end($temp);
    $destino="../../img/Usuarios/";
    $file_name=date('Y_m_d_h_i_s')."_".rand(10000,99999).".".$ext;
    if(move_uploaded_file($_FILES["imagen"]['tmp_name'],$destino.$file_name)){
      echo "Archivo subido correctamente ";
       $consulta="INSERT INTO usuarios ( users, password, email, name,level, ap, am, funcion, img)
    VALUES
    ('$usuario', '$password1', '$email', '$name','$nivel', '$namea', '$namea', '$nivel','$file_name')";

   
    $conexion->query($consulta) or die($conexion->error);
     echo "Registro insertado correctamente";
     header ("location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/tables.php?status=1");

    }else{
      echo "Algo fallo en tu subida del archivo";
      header ("location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/tables.php?status=0");
    }
    //echo $file;

    //$fehca=date('Y-m-d');

   // if($password1==$password2){
 //}
    
    //die();
   
?>