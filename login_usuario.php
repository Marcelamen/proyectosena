<?php

    //session_start();

    include 'conexion_bd.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' and contrasena ='$clave' ");

    if(mysqli_num_rows($validar_login)>0 ){
        $_SESSION['usuario'] = $correo;
        header("location: ../Maquetación_Real.html");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, porfavor verifique los datos introducidos");
                window.location = "../Maquetación_Real.html";            
            </script>
        ';
        exit;
    }




?>