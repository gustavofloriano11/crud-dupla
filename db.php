<?php
     $servername = "127.0.0.1";
     $username = "root";
     $password = "";
     $dbname = "escola";
     $port = "3308";

     $conn = new mysqli($servername, $username, $password, $dbname, $port);
     if($conn -> connect_error){
        die ('Conexão falhou' . $conn -> connect_error);
     }
?>