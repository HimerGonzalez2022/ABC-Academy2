<?php
include("conecpago.php");

// Operación de eliminación
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM payments WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado con éxito";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
}
//Limpieza de la tabla y de MySQL
if (isset($_GET['delete_all'])) {
    $sql = "TRUNCATE TABLE payments";

    if ($conexion->query($sql) === TRUE) {
        echo "Tabla limpia con éxito";
    } else {
        echo "Error al limpiar la tabla: " . $conexion->error;
    }
}
// Operación de lectura
$sql = "SELECT id, name, email, card_number, date, cvv, product, amount FROM payments";
$result = $conexion->query($sql);
?>
<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos
    include("conecpago.php");

    // Obtener los datos del formulario
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $card_number = isset($_POST['card_number']) ? $_POST['card_number'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';
    $product = isset($_POST['product']) ? $_POST['product'] : '';
    $amount = isset($_POST['cost']) ? $_POST['cost'] : '';

    // Crear la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO payments (name, email, card_number, date, cvv, product, amount) VALUES ('$name', '$correo', '$card_number', '$date', '$cvv', '$product', '$amount')";

    // Ejecutar la consulta y verificar si se ha realizado correctamente
    if ($conexion->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>

<!DOCTYPE html>
<html>

<head>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #4CAF50;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 14px;
            padding: 8px;
            width: 70px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 4px 2px;
        }

        .button:hover {
            background-color: #555555;
        }
    </style>
        <script>
        function confirmDelete() {
            return confirm('¿Estás seguro de que quieres eliminar este registro?');
        }
    </script>
</head>

<body>

<table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Correo Electrónico</th>
            <th>Número de Tarjeta</th>
            <th>Fecha de Pago</th>
            <th>CVV</th>
            <th>Tipo de Plan</th>
            <th>Monto</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["card_number"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["cvv"] . "</td>";
                echo "<td>" . $row["product"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>
                    <form style='display:inline-block' action='editar.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input class='button' type='submit' value='Editar'>
                    </form>
                    <form style='display:inline-block' onsubmit='return confirmDelete()' action='?delete=" . $row["id"] . "' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input class='button' type='submit' value='Eliminar'>
                    </form>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No hay registros</td></tr>";
        }
        ?>
    </table>
</body>

</html>
