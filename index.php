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
            class Caneta{
                public $modelo;
                private $ponta;
                public function __construct($modelo, $ponta)
                {
                    $this->modelo = $modelo;
                    $this->ponta = $ponta;
                }
                public function getModelo(){
                    return $this->modelo;
                }
                public function setModelo($m){
                    $this->modelo = $m;
                }
                public function getPonta(){
                    return $this->ponta;
                }
                public function setPonta($p){
                    $this->ponta = $p;
                }
            }
            $c1 = new Caneta("BIC", 1.5);
            $c2 = new Caneta("Faber Castel", 0.7);
            print_r($c1);
            print_r($c2);
            print $c1->getPonta();
        ?>
    </pre>
</body>
</html>