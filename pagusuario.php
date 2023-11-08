<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
    exit();
}

$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios, Nombre FROM usuarios WHERE idusuarios = '$iduser'";

$resultado = $conexion->query($sql);

if (!$resultado) {
    die('Error al ejecutar la consulta: ' . $conexion->error);
}

$row2 = $resultado->fetch_assoc();

$correo = $_SESSION['id_usuario'];

$pd = "SELECT idusuarios, Correo FROM usuarios WHERE idusuarios = '$correo'";

$ed = $conexion->query($pd);

if (!$ed){
    die('Error al ejecutar la consulta;' . $conexion->error);
}
$row = $ed->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/infusario.css">
</head>
<body>
    <header>
        <h1>Bienvenido de nuevo <?php echo utf8_decode($row2['Nombre']); ?></h1>
    </header>
    <main>
        <section class="profile">
<div class="user-info">
<h2>Nombre de Usuario</h2>
<?php echo utf8_decode($row2['Nombre']); ?>
<p>Email:</p>
<?php echo utf8_decode($row['Correo']); ?>
</div>
        </section>
    </main>
    <footer>
<p>&copy; 2023 | Perfil de Usuario</p>
</footer>
</body>
</html>

