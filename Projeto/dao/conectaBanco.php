<?php
    $banco = new mysqli("localhost", "root", "1234", "Proj_PHP", 3306);

    if($banco->connect_errno){
        echo "Erro ao conectar ao Banco de Dados";
    }
    
?>