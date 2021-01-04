<?php

    class Cliente {
        //atributos
        public $nome = "Ana";
        public $idade = 23;


        public function apresentar(){

            echo "<br/> Nome: {$this->nome} <br/>     Idade: {$this->idade}";

        }


    }


    $c1 = new Cliente();
    $c1->apresentar();
?>
