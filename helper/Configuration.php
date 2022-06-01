<?php
include_once('helper/MySqlDatabase.php');
include_once('helper/Router.php');
include_once('helper/Printer.php');
include_once('controller/PedidoController.php');
include_once('model/PedidoModel.php');



class Configuration {

    public function __construct(){

    }
    
    public function getPedidoController(){
        return new PedidoController($this->getPedidoModel(),$this->getPrinter());
    }

    private function getPedidoModel(){
        return new PedidoModel();
    }

   

  /* ESTO ES PARA BASE DE DATOS 
   private function getDatabase() {
       return new MySqlDatabase(
            'localhost',
            'root',
            '',
            'labanda');

    }*/

    private function getPrinter(){
        return new Printer();
    }

    
}