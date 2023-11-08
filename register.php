<?php
if(isset($_POST["registrar"])){
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['user']);
    $password = mysqli_real_escape_string($conexion, $_POST['pass']);
    $password_encriptada = sha1($password);
    $sqluser = "SELECT idusuarios FROM usuarios 
                  WHERE usuarios = '$usuario'";

    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser->num_rows;
    if($filas > 0){
        echo "<script>
        alert('El usuario ya existe');
        window.location = 'index.php';
        </script>";
    }else{
        //Insertar informacion
        $sqlusuario = "INSERT INTO usuarios(Nombre, Correo, Usuario,Password) 
        VALUES('$nombre', '$correo', '$usuario', '$password_encriptada')";
        $resultadousario = $conexion->query($sqlusuario);
        if($resultado > 0){
            echo "<script>
            alert('Registro exitoso');
            window.location = 'index.php';
            </script>";
        }else{
            echo "<script>
            alert('Erro al registrase');
            window.location = 'index.php';
            </script>";
        }
    }
}
?>