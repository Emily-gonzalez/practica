<center>
    <h2>SHOP</h2>
  </center>
  <?php
$cliente = "Emilu";
$productos = "motos";
$canti = 4.00;
$precio = 20.00;
$subTot = $canti * $precio;
$iva = $subTot * 0.12;
$desc = 0;
$regalo = "0";
if ($subTot <= 20) {
    $desc = $subTot * 0.5;
    $regalo = "peto integral leat3 DF AIRFIT";
} else {
    if ($subTot <= 51 && $subTot >= 100) {
        $desc = $subTot * 0.7;
        $regalo = "Guantes brisker neopreno";
    } else {
        if ($subTot <= 101 && $subTot >= 200) {
            $desc = $subTot * 0.10;
            $regalo = "rodilleras pod k4 2.0";
        } else {
            if ($subTot > 200) {
                $desc = $subTot * 0.15;
                $regalo = "";
            }
        }
    }
}

$totpagar = $subTot + $iva + $desc;
?>
<label> Resultados</label><br>
<label> Cliente :</label> <?php echo $cliente; ?><br>
<label> Productos :</label> <?php echo $productos; ?><br>
<label> Regalo :</label> <?php echo $regalo; ?><br>
<label> total a pagar :</label> <?php echo $subTot; ?><br>