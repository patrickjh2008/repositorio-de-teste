<?php
class pessoas
{
    public $nome = "fulano";
    public $idade = 22;

    public function apresentar()
    {
        echo "Nome: (this->nome) <br>";
        echo "Idade: (this->idade) <br>";
    }
}

$pessoa = new pessoa1();
$pessoa1->apresentar();

$pessoa2 = new pessoa;
$pessoa2 ->idade = 44;
$pessoa2->nome = "Edilson";
$pessoa2->apresentar();

?>