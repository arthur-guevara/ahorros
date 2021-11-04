<?php
class searchNumber{
    function search($number){
        include 'conexion.php';
        $sql = "SELECT numero FROM ahorro";
        $query = $connect->query($sql);
        $b = true;
        if ($query->num_rows > 0) {
            $rows = $query->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $r) {
                if ($r['numero'] == $number) {
                    $b = false;
                    break;
                }
            }
            if ($b) {
                # echo 'No se encontro el numero: ' . $number;
                return true;
            } else
                return false; 
                #echo 'SI se encontro el numero: ' . $number;
        }
    }
}
$validate = new searchNumber();

while(true){
    $number = rand(1, 94);
    if($validate -> search($number)){
        echo $number;
        break;
    }
}
