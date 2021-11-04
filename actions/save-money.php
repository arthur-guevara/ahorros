<?php 
include 'conexion.php';
date_default_timezone_set('America/Mexico_City');

$number = $_POST['number'];
$money = $number * 2;
$date = date('Y-m-d');
$b = false;
$sql = "INSERT INTO ahorro (numero, cantidad, fecha) VALUES ($number, $money, '$date');";
$sqlDate = "SELECT numero ,fecha FROM ahorro ORDER BY fecha DESC;";
$queryDate = $connect -> query($sqlDate);
if($queryDate -> num_rows > 0 ){
    $rowDate = $queryDate -> fetch_all(MYSQLI_ASSOC);
    foreach($rowDate as $r ){
        if ($r['fecha'] == $date){
            $b = false;
            break;
        }else 
            $b = true;      
    }
    if($b){
        $query = $connect -> query($sql);
        if($query){
            echo 'Ahorro registrado';
        }else 
            echo 'Error al registar ahorro';
    }else
        echo 'El ahorro del dia ya fue registrado ';
}else {
    echo 'Error al registrar el ahorro';
}

?>