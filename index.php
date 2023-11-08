<?php
include("conexion.php");
session_start();
if(isset($_SESSION['id_usuario'])){
    header("Location: inicio.php");
}
//LOGIN
if(!empty($_POST)){
    $usuario = mysqli_real_escape_string($conexion, $_POST['user']); 
    $password = mysqli_real_escape_string($conexion, $_POST['pass']);
    $password_encriptada = sha1($password);
    $sql = "SELECT idusuarios FROM usuarios 
            WHERE usuario = '$usuario' AND password = '$password_encriptada' ";
    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if($rows > 0){
        $rows = $resultado->fetch_assoc();
        $_SESSION['id_usuario']= $rows["idusuarios"];
        header("Location: inicio.php");
    }else{
        echo "<script>
        alert('El usuario o contraseña incorrecto');
        window.location = 'index.php';
        </script>";
    }
}
//Registro de usuario
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
            alert('Error al registrase');
            window.location = 'index.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="login1.css">
    <title>signin-signup</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="user" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="pass" required>
                </div>
                <input type="submit" value="Login" class="btn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Nombre completo" name="nombre">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="user">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" name="correo">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="pass">
                </div>
                <input type="submit" value="Sign up" class="btn" name="registrar">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Ya eres miembro de nuestro sitio web?</h3>
                    <p>Haz click aquí para iniciar sesión</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Todavía no has creado una cuenta?</h3>
                    <p>Haz click aquí y solo rellena los campos sin ninguna complicación</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="login1.js"></script>
</body>
</html>