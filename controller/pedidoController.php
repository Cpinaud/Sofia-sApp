<?php

class PedidoController {
    private $printer;
    private $model;

    public function __construct($model,$printer) {
        $this->printer = $printer;
        $this->model = $model;
    }

    public function execute() {
        $this->printer->generateView('pedidosView.php');
    }
}