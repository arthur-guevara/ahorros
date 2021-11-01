<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ahorro";

    $connect = new mysqli();
    $connect -> connect($server,$username,$password,$database);

    if($connect -> connect_error){
      die('Error de conexión: ' . $connect->connect_error); 
     }else{
        #echo "CONECTADO";
     }
