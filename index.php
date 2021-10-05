<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas PHP</title>
</head>
<body>
    <?php
        class Caneta{
            var $modelo;
            var $cor;
            var $carga;
            var $ponta;
            var $tampada;

            function rabiscar(){
                if($this->tampada == true){
                    echo "não posso rabiscar";
                }else{
                   echo"rabiscou <br>"; 
                }
            }
            function tampar(){

            }
            function destampar(){

            }
        }
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = "0.5";
        $c1->tampada = 0;
        $c1->rabiscar();
        $c = null;
        for($i=1; $i<=5; $i++){
            $c.$i = $i;
            echo $c.$i;
        }
    ?>
</body>
</html>