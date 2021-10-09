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
            interface Controlador{
                public function ligar();
                public function desligar();
                public function maisVolume();
                public function menosVolume();
                public function ligarMudo();
                public function desligarMudo();
                public function play();
                public function pause();
            }
            class ControleRemoto implements Controlador{
                private $volume;
                private $ligado;
                private $tocando;
                function __construct()
                {
                    $this->volume = 50;
                    $this->ligado = false;
                    $this->tocando = false;
                }
                private function getVolume(){
                    return $this->volume;
                }
                private function setVolume($v){
                    $this->volume = $v;
                }
                private function getLigado(){
                    return $this->ligado;
                }
                private function setLigado($l){
                    $this->ligado = $l;
                }
                private function getTocando(){
                    return $this->tocando;
                }
                private function setTocando($t){
                    $this->tocando = $t;
                }
                public function ligar(){
                    $this->setLigado(true);
                }
                public function desligar(){
                    $this->setLigado(false);
                }
                public function maisVolume(){
                    if($this->getLigado()){
                        $this->setVolume($this->getVolume() - 1);
                    }else{
                        echo "Ligue a tv primeiro";
                    }
                }
                public function menosVolume(){
                    if($this->getLigado()){
                        $this->setVolume($this->getVolume() - 1);
                    }else{
                        echo"Ligue a tv primeiro";
                    }
                }
                public function ligarMudo(){
                    if($this->getLigado() && $this->getVolume() > 0){
                        $this->setVolume(0);
                    }
                }
                public function desligarMudo(){
                    if($this->getLigado() && $this->getVolume() == 0){
                        $this->setVolume(50);
                    }
                }
                public function play(){
                    if($this->getLigado() && !$this->getTocando()){
                        $this->setTocando(true);
                    }
                }
                public function pause(){
                    if($this->getLigado() && $this->getTocando()){
                        $this->setTocando(false);
                    }
                }
            }
            $c1 = new ControleRemoto;
            $c1->ligar();
            $c1->play();
            print_r($c1);
        ?>
    </pre>
</body>
</html>