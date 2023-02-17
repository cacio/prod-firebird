<?php
    require 'db_config.php';
    require '../../../vendor/autoload.php';

    require 'Models/Cliente.php';

    

    //$modelcli = new ProdFirebird();
    use Example\Models\Cliente;


    $modelcli = new Cliente();

    $modelcli->select('CLIENTES');
    $modelcli->execute();


    foreach($modelcli->fetch_row() as $value){
        echo "{$value[0]} - {$value[1]} - {$value[2]} <br>";        
    }



?>