<?php session_start();
    include "./conexion.php";
    //obtener datos
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $name = $_POST['txtName'];

    
    $sql="SELECT * FROM usuarios WHERE email = '$email' AND password='$password'";
    $res = $conexion->query("$sql") or die($conexion->error);
    if(mysqli_num_rows($res) > 0 ){
        echo "LOGIN CORRECTO <br>";
        $fila = mysqli_fetch_row($res);//trae la primera fila
        $id = $fila [0];
        $email = $fila [3];
        $name = $fila[4];
        $lastap = $fila[6];
        $lastam = $fila[7];

        echo "Hola $name tu id es $id";
        $_SESSION['user_data']=[
            'id' =>$id,
            'email'=>$email,
            'name'=>$name,
            'lastap'=>$lastap,
            'lastam'=>$lastam,

        ];
        header('Location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/dashboard.php');
       
       

    }else{
        echo "DATOS NO VALIDOS";
        header("Location: ../../Dashboards/dashboard/corporate-ui-dashboard-main/pages/sign-in.php?error=1");//redireccionar hacia login.html
    }


?>