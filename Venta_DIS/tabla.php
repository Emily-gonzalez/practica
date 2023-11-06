<?php 

if(isset($_POST['btnProceso'])){
    $num=$_POST['txtNumber'];

    for($k = 1; $k <= 10; $k++){
    $resul = $num * $k;
    echo $num." * ".$k." = ".$resul."<br>";
    } 
// aqui con while 
$k=1;
while( $k <= 10){
    $resul = $num * $k;
    echo $num." * ".$k." = ".$resul."<br>";
}

?>

<h3>MULTIPLICACION TABLA EJERCICIO</h3>
<hr>
<div>
    <form method="post">
           <label>Ingrese numero</label>
           <input type="text" name="txtNumber"
           placeholder="un valor entero"
           value="<?php if (isset($num)) echo $num;?>"
           >
           <button type="submit" name="btnProceso">Proceso</button>

    </form>

</div> 