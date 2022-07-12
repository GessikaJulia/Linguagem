<?php

class Produto{
    public $id;
    public $nome;
    public $valor;
    public $quantidade;
    public $valorT;


    public function calcular(){
        $this->valorT = $this->valor * $this->quantidade;
        return $this->valorT;
    }
}

?>