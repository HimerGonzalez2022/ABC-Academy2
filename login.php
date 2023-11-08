<?php
if(!empty($_POST)){
    $usuario = mysqli_real_escape_string($conexion, $_POST['user']); 
    $password = mysqli_real_escape_string($conexion, $_POST['pass']);
    $password_encriptada = sha1($password);
    $sql = "SELECT idusario FROM usuarios 
            WHERE usuario = '$usuario' AND password '$password_encriptada' ";
    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if($rows > 0){
        $rows = $resultado->fetch_assoc();
        $_SESSION['id_usuario']= $rows["idusarios"];
        header("Location: prueba.php");
    }else{
        echo "<script>
        alert('El usuario o contraseña incorrecto');
        window.location = 'index.php';
        </script>";
    }
}
?>