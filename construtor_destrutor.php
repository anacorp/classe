<div> Construtor e Destrutor</div>
<hr>

<?php

class Pessoa {

    //atributo
    public $nome;
    public $idade;

    //metodo construtor e (parametros)
    function __construct($novoNome, $idade) {
        echo 'Construtor Invocado <br/>';
        $this->nome = $novoNome;
        $this->idade = $idade;
        
    }
    //metodo destrutor
    function __destruct(){
        echo  'Morreu <br/>';
    }

    public function apresentar() {
      echo "{$this->nome}, {$this->idade} anos <br/>";
    }
}

$pessoa = new Pessoa('Ana', 23);

$pessoa2 = new Pessoa('Leonardo', 22);
$pessoa->apresentar();
$pessoa2->apresentar();
unset($pessoa);

?>