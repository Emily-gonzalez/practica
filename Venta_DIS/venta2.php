<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>

<body>

    <div class="p">
        <form method="post">
            <div>
                <label>Fecha :</label>
                <input type="date" name="txtFechaVenta">
            </div>
            <div>
                <label>Cliente :</label>
                <select name="cbocliente">
                    <option value="PEPITO">JOSE</option>
                    <option value="ANITA">ANITA PEREZ</option>
                    <option value="LUCHO">LUIS AGUIRRE</option>
                    <option value="SHIRLEY">SHIRLECITA</option>
                </select>
            </div>
            <div>
                <label>
                    Producto :</label>
                <select name="cboProducto">
                    <option value="TALLARIN">TALLARIN SUMESA</option>
                    <option value="ATUN">ATUN LOMITOS</option>
                    <option value="ARROZ">ARROZ FLOR</option>
                    <option value="GELATINA">GELATINA </option>
                    <option value="JABON">JABON LAGARTOS</option>
                    </option>
                </select>
            </div>
            <div>
                <label> Cantidad :</label>
                <input type="number" name="txtCanti">
            </div>
            <div>
                <label>Precio :</label>
                <input type="text" name="txtPrecio">
            </div>
            <div>
                <button type="submit" name="btnCalcular"> Calcular</button>
            </div>
        </form>
    </div>
    <hr>
    <h1>RESULTADO</h1>
    <?php
    if (isset($_POST['btnCalcular'])) {
        $fecha = $_POST['txtFechaVenta'];
        $cliente = $_POST['txtCliente'];
        $producto = $_POST['txtProducto'];
        $cantidad = $_POST['txtCanti'];
        $precio = $_POST['txtPrecio'];
        $subTot = $_cantidad * $precio;
        $iva = $subTot * 0.12;
        $desc = 0;
        if ($subTot < 50) {
            $desc = $subTot * 0.05;
            $regalo = "NO TIENE REGALO";
        } else {
            if ($subTot >= 50 && $subTot < 100) {
                $desc = $subTot * 0.07;
                $regalo = "PELOTA";
            } else {
                if ($subTot >= 100 && $subTot < 200) {
                    $desc = $subTot * 0.01;
                    $regalo = "LICUADORA";
                } else {
                    $desc = $subTot * 0.15;
                    $regalo = "VIAJE A VENEZUELA";
                }
            }
        }
        $totPagar = $subTot + $iva - $desc;
        ///resultado
        echo "Fecha:" . $fecha . "<br>";
        echo "Cliente:" . $cliente . "<br>";
        echo "Producto:" . $producto . "<br>";
        echo "Subtotal:" . $subtot . "<br>";
        echo "IVA:" . $iva . "<br>";
        echo "Descuento:" . $desc . "<br>";
        echo "Total Pagar:" . $totPagar . "<br>";
        echo "Regalo:" . $regalo . "<br>";
    }

    ?>
    <script src="js/bootstrap.bundle.min.js" ></script>

</body>

</html>