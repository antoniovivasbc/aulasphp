<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas PHP</title>
</head>
<body>
    <pre>
        <?php
            abstract class Animal{
                protected $peso;
                protected $idade;
                protected $membros;
                function __construct($peso, $idade, $membros)
                {
                    $this->peso = $peso;
                    $this->idade = $idade;
                    $this->membros = $membros;
                }
                function getPeso(){
                    return $this->peso;
                }
                function setPeso($p){
                    $this->peso = $p;
                }
                function getIdade(){
                    return $this->idade;
                }
                function setIdade($i){
                    $this->idade = $i;
                }
                function getMembros(){
                    return $this->membros;
                }
                function setMembros($m){
                    $this->membros = $m;
                }
                abstract function locomover();
                abstract function alimentar();
                abstract function emitirSom();
            }
            class Mamifero extends Animal{
                private $corPelo;
                function getCorPelo(){
                    return $this->corPelo;
                }
                function setCorPelo($p){
                    $this->corPelo = $p;
                }
                function locomover(){
                    echo "Correndo";
                }
                function alimentar(){
                    echo"Mamando";
                }
                function emitirSom(){
                    echo "Som de Mamífero";
                }
            }
            class Reptil extends Animal{
                private $corEscama;
                function getCorEscama(){
                    return $this->corEscama;
                }
                function setCorEscama($e){
                    $this->corEscama = $e;
                }
                function locomover(){
                    echo "Rastejando";
                }
                function alimentar(){
                    echo"Comendo vegetais";
                }
                function emitirSom(){
                    echo "Som de Réptil";
                }
                
            }
            class Peixe extends Animal{
                private $corEscama;
                function getCorEscama(){
                    return $this->corEscama;
                }
                function setCorEscama($e){
                    $this->corEscama = $e;
                }
                function locomover(){
                    echo "Nadando";
                }
                function alimentar(){
                    echo"Comendo substâncias";
                }
                function emitirSom(){
                    echo "Som de Peixe";
                }
                function soltarBolhas(){
                    echo "Soltou bolhas";
                }
            }
            class Ave extends Animal{
                private $corPenas;
                function getCorPenas(){
                    return $this->corPenas;
                }
                function setCorPenas($p){
                    $this->corPenas = $p;
                }
                function locomover(){
                    echo "Voando";
                }
                function alimentar(){
                    echo"Comendo Frutas";
                }
                function emitirSom(){
                    echo "Som de Ave";
                }
                function fazerNinho(){
                    echo "Construindo o ninho";
                }
            }
            class Canguru extends Mamifero{
                function locomover()
                {
                    echo"Pulando";
                }
            }
        ?>
    </pre>
</body>
</html>