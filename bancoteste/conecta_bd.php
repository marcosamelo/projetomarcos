<?php
    $local="localhost";
    $user="marcosmelo10";
    $senha="";
    $database="banco_teste";
    //$porta=3306;
    
    $conectar= new mysqli($local,$user,$senha,$database) or die (mysql_error());
    mysqli_set_charset($conectar,'utf8');
    if ($conectar->connect_error){
        die("Falha ao realizar a conexao:" . $conectar->connect_error);
    }
    
 

?>