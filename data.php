<?php 

class Data {
    //atributo
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;


    public function apresentar (){

        return "{$this->dia} / {$this->mes} / {$this->ano}" ;

    }
}

$d1 = new Data();
echo $d1->apresentar();


?>