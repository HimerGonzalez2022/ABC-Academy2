<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .payment-form {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group select,
        .input-group input[type="text"],
        .input-group input[type="email"],
        .input-group input[type="number"] {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ddd;
        }

        .input-group input[type="submit"] {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 50px;
        }

        th,
        td {
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
    </style>
</head>

<body>
    <div class="payment-form">
        <h2>Formulario de Pago</h2>
        <form method="POST" action="pago2.php">
            <div class="input-group">
                <label for="card_number">Nombre y Apellido</label>
                <input type="text" id="card_number" name="name" placeholder="Nombre y Apellido" required>
            </div>
            <div class="input-group">
                <label for="card_number">Correo electronico</label>
                <input type="email" id="card_number" name="correo" placeholder="Correo" required>
            </div>
            <div class="input-group">
                <label for="card_number">Número de Tarjeta:</label>
                <input type="text" id="card_number" name="card_number" placeholder="Número de Tarjeta" required>
            </div>
            <div class="input-group">
                <label for="expiry_date">Fecha de Pago:</label>
                <input type="text" id="expiry_date" name="date" placeholder="Año, Mes, Día" required>
            </div>
            <div class="input-group">
                <label for="cvv">CVV:</label>
                <input type="number" id="cvv" name="cvv" placeholder="CVV" required>
            </div>
            <div class="input-group">
                <label for="product">Tipo de Plan:</label>
                <select id="product" name="product" onchange="myFunction()">
                    <option value="Lite">ABC Lite</option>
                    <option value="Pro">ABC Pro</option>
                    <option value="Ultimate">ABC Ultimate</option>
                </select>
            </div>
            <div class="input-group">
                <label for="amount">Monto:</label>
                <input type="text" id="amount" name="cost">
            </div>
            <div class="input-group">
                <input type="submit" value="Pagar">
            </div>
        </form>
    </div>
    <script>
        function myFunction() {
            var product = document.getElementById("product").value;
            var amountElement = document.getElementById("amount");

            if (product === "Lite") {
                amountElement.value = "$8.00";
            } else if (product === "Pro") {
                amountElement.value = "$12.00";
            } else if (product === "Ultimate") {
                amountElement.value = "$20.00";
            }
        }
    </script>
</body>

</html>
