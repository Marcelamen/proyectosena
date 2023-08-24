<?php

    include 'conexion_bd.php';

    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];
    $clave = $_POST['clave'];

$query = "INSERT INTO usuarios(cedula,correo,ciudad,direccion,celular,clave
) VALUES ('$cedula','$correo','$ciudad','$direccion','$celular','$clave')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
       echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location ="../login.php";
            </script>    
        '; 
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){

        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location ="../login.php";
            </script>    
        ';
    }else{

        echo '
            <script>
                alert("Intentelo de nuevo, Usuario no almacenado");
                window.location ="../login.php";
            </script>    
        ';        
    }

    mysqli_close($conexion);

?>