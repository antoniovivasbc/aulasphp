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
            class ContaBanco{
                public $numero;
                protected $tipo;
                private $dono;
                private $saldo;
                private $status;
                public function __construct()
                {
                    $this->saldo = 0;
                    $this->status = false;
                }
                public function getnumConta(){
                    return $this->numero;
                }
                public function setnumConta($num){
                    $this->numero = $num;
                }
                public function gettipoConta(){
                    return $this->tipo;
                }
                public function settipoConta($tipo){
                    $this->tipo = $tipo;
                }
                public function getDono(){
                    return $this->dono;
                }
                public function setDono($dono){
                    $this->dono = $dono;
                }
                public function getSaldo(){
                    return $this->saldo;
                }
                public function setSaldo($saldo){
                    $this->saldo = $saldo;
                }
                public function abrirConta($tipo){
                    $this->status = true;
                    if($tipo == "cc"){
                        $this->tipo = $tipo;
                        $this->saldo = $this->getSaldo() + 50; 
                    }elseif($tipo == "cp"){
                        $this->tipo = $tipo;
                        $this->saldo = $this->getSaldo() + 150;
                    }
                    else{
                        echo"Tipo de conta inválido, escolha cc para conta corrente ou cp para conta poupança";
                    }
                }
                public function fecharConta(){
                    if($this->saldo == 0){
                       $this->status = false; 
                    }else{
                        echo"Não é possivel encerrar a conta!";
                    }
                }
                public function depositar($valor){
                    if($this->status == true){
                        $this->setSaldo($this->getSaldo() + $valor);
                    }else{
                        echo"É necessário abrir a conta primeiro";
                    }
                }
                public function sacar($valor){
                    if($this->status == true){
                        if($this->saldo >= $valor){
                            $this->setSaldo($this->getSaldo() - $valor);
                        }else{
                            echo"Não é possível sacar este valor, o seu saldo é".$this->getSaldo();
                        }
                    }else{
                        echo "É necessário abrir a conta primeiro";
                    }
                }
                public function pagarMensal(){
                    if($this->tipo == "cc"){
                        $this->saldo = $this->saldo - 12;
                    }elseif($this->tipo == "cp"){
                        $this->saldo = $this->saldo - 20;
                    }
                }
            }
        ?>
    </pre>
</body>
</html>