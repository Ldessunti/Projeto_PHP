<?php
    $banco = new mysqli("localhost", "root", "", "projeto", 3306);

    if($banco->connect_errno){
        echo "Erro ao conectar ao Banco de Dados";
    }
    
?>