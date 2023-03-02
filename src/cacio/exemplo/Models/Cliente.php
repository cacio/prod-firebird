<?php
    namespace Example\Models;

    use Cacio\ProdFirebird\ProdFirebird;

    class Cliente extends ProdFirebird{
       
        public function __construct(){
            parent::__construct('CLIENTES');
        }

    }


?>