<?php
// Criando uma classe

class pessoas
{
    public $idade;
    public $nome;
    public $profissao;
    public $email;
}

class animais
{
    public $raca;
    public $tipo;
    public $cor;
    public $

}
// Depois criamos um método para "pegar" esses dados
public function dados()
{
    return "meu nome é {$this->nome}, eu tenho {$this->idade}anos, meu email é {$this->email}, eu sou {$this->nome}";
}

// Depois instanciamos a Classe
$pessoa = new pessoa;

$pessoa->idade = 18;
$pessoa->nome= "Edi";
$pessoa->profissao= "Programador";
$pessoa->email = "edilson.ebert@gmail.com";

//Depois chamamos o método

echo $pessoa->dados();

echo "<br>";

$pessoa->idade = 20;
$pessoa->nome ="Beth";
$pessoa->profissao = "Pedagoga";
$pessoa->email = "beth@gmail.com";

class SaudePessoa
{
    public $batimentosCardiacos;
    public $nivelDeEstress;
    public $emocional;
    public $tensao;


    public function AntesEleicao()
{
    echo "Batimentos Cardíacos antes da Votação: ", "<br>";
    return "Batimentos Cardíacos = {$this->batimentosCardiacos} <br> Nível de Estress = {$this->nivelDeEstress} <br> Emocional = {$this->emocional} <br> Tensão = {$this->tensao} <br>";
}

public function DuranteAApuracao()
{
    echo "Estado de Saúde durante as apurações dos votos: ", "<br>";
    return "Batimentos Cardíacos = {$this->batimentosCardiacos} <br> Nível de Estress = {$this->nivelDeEstress} <br> Emocional = {$this->emocional} <br> Tensão = {$this->tensao} <br>";
}

public function DepoisDaApuracao()
{
    echo "Estado de Saúde depois das apurações dos votos: ", "<br>";
    return "Batimentos Cardíacos = {$this->batimentosCardiacos} <br> Nível de Estress = {$this->nivelDeEstress} <br> Emocional = {$this->emocional} <br> Tensão = {$this->tensao}";
}

}

$saudePessoa = new SaudePessoa;

$saudePessoa->batimentosCardiacos = 80;
$saudePessoa->nivelDeEstress = "Normal";
$saudePessoa->emocional = "Tranquilo";
$saudePessoa->tensao = "Baixa";

echo $saudePessoa->AntesEleicao(), "<br>";


$saudePessoa->batimentosCardiacos = 200;
$saudePessoa->nivelDeEstress = "Altíssimo";
$saudePessoa->emocional = "Louco";
$saudePessoa->tensao = "Pra lá de alta";

echo $saudePessoa->DuranteAApuracao(), "<br>";


$saudePessoa->batimentosCardiacos = "90 ou 300";
$saudePessoa->nivelDeEstress = "Numa nice ou infartando";
$saudePessoa->emocional = "Tranquilo ou indo para o hospício";
$saudePessoa->tensao = "Tranquilo ou batendo a cabeça";

echo $saudePessoa->DepoisDaApuracao();



?>