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
            class Lutador{
                private $nome;
                private $nacionalidade;
                private $idade;
                private $altura;
                private $peso;
                private $categoria;
                private $vitorias;
                private $derrotas;
                private $empates;
                public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
                {
                    $this->nome = $no;
                    $this->nacionalidade = $na;
                    $this->idade = $id;
                    $this->altura = $al;
                    $this->setPeso($pe);
                    $this->vitorias = $vi;
                    $this->derrotas = $de;
                    $this->empates = $em;
                }
                public function getNome(){
                    return $this->nome;
                }
                public function setNome($n){
                    $this->nome = $n;
                }
                public function getNacionalidade(){
                    return $this->nacionalidade;
                }
                public function setNacionalidade($nacio){
                    $this->nacionalidade = $nacio;
                }
                public function getIdade(){
                    return $this->idade;
                }
                public function setIdade($i){
                    $this->idade = $i;
                }
                public function getPeso(){
                    return $this->peso;
                }
                public function setPeso($p){
                    $this->peso = $p;
                    $this->setCategoria();
                }
                public function getCategoria(){
                    return $this->categoria;
                }
                private function setCategoria(){
                    if($this->peso < 52.2 || $this->peso >  120.2){
                        echo"Inválido";
                    }elseif($this->peso <= 70.3){
                        $this->categoria = "leve";
                    }elseif($this->peso <= 83.9){
                        $this->categoria = "Médio";
                    }elseif($this->peso <= 120.2){
                        $this->categoria = "Pesado";
                    }
                }
                public function getVitorias(){
                    return $this->vitorias;
                }
                public function setVitorias($vi){
                    $this->vitorias = $vi;
                }
                public function getDerrotas(){
                    return $this->derrotas;
                }
                public function setDerrotas($de){
                    $this->derrotas = $de;
                }
                public function getEmpates(){
                    return $this->empates;
                }
                public function setEmpates($em){
                    $this->empates = $em;
                }
                public function apresentar(){
                    echo"<p> Lutador ".$this->getNome()." de ".$this->getNacionalidade()." idade ".$this->getIdade()." e pesa ".$this->getPeso().
                    " com ".$this->getVitorias()." vitorias e ".$this->getDerrotas()." derrotas e empatou ".$this->getEmpates()." lutas ";
                }
                public function status(){
                    echo"<p> Lutador".$this->getNome()."da categoria".$this->getCategoria().
                    "com".$this->getVitorias()."vitorias e".$this->getDerrotas()."derrotas e empatou".$this->getEmpates()."lutas"; 
                }
                public function ganharLuta(){
                    $this->setVitorias($this->getVitorias() + 1);
                }
                public function perderLuta(){
                    $this->setDerrotas($this->getDerrotas() + 1);
                }
                public function empatarLuta(){
                    $this->setEmpates($this->getEmpates() + 1);
                }
            }
            $l = array();
            $l[0] = new Lutador("Tonio", "BR", 20, 1.65, 75.5, 98, 1, 2); 
            $l[1] = new Lutador("Kamilla", "Mongolia", 21, 1.67, 75, 1 , 98, 2);
            class Luta{
                private $desafiado;
                private $desafiante;
                private $rounds;
                private $aprovada;
                public function getDesafiado(){
                    return $this->desafiado;
                }
                public function setDesafiado($desafiado){
                    $this->desafiado = $desafiado;
                }
                public function getDesafiante(){
                    return $this->desafiante;
                }
                public function setDesafiante($desafiante){
                    $this->desafiante = $desafiante;
                }
                public function getRounds(){
                    return $this->rounds;
                }
                public function setRounds($rounds){
                    $this->rounds = $rounds;
                }
                public function getAprovada(){
                    return $this->aprovada;
                }
                public function setAprovada($aprovada){
                    $this->aprovada = $aprovada;
                }
                public function marcarLuta($l1, $l2){
                    if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
                        $this->desafiado = $l1;
                        $this->desafiante = $l2;
                        $this->setAprovada(true);
                    }
                    else{
                        $this->desafiado = null;
                        $this->desafiante = null;
                        $this->aprovada = false;
                    }
                }
                public function lutar(){
                    if($this->getAprovada()){
                        $this->desafiante->apresentar();
                        $this->desafiado->apresentar();
                        $vencedor = rand(0,2);
                        switch($vencedor){
                            case 0: 
                                $this->desafiante->empatarLuta();
                                $this->desafiado->empatarLuta();
                                break;
                            case 1:
                                $this->desafiante->perderLuta();
                                $this->desafiado->ganharLuta();
                                break;
                            case 2:
                                $this->desafiante->ganharLuta();
                                $this->desafiado->perderLuta();
                                break;
                        }
                    }else{
                        echo"A luta não foi aprovada";
                    }
                }
            }
            $luta1 = new Luta();
            $luta1->marcarLuta($l[0], $l[1]);
            $luta1->lutar();
        ?>
    </pre>
</body>
</html>