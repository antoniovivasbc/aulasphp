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
            abstract class Pessoa{
                private $nome;
                private $idade;
                private $sexo;
                function __construct($nome, $idade, $sexo)
                {
                    $this->nome = $nome;
                    $this->idade = $idade;
                    $this->sexo = $sexo;
                }
                public function getNome(){
                    return $this->nome;
                }
                private function setNome($n){
                    $this->nome = $n;
                }
                public function getIdade(){
                    return $this->idade;
                }
                private function setIdade($i){
                    $this->idade = $i;
                }
                public function getSexo(){
                    return $this->sexo;
                }
                private function setSexo($s){
                    $this->sexo = $s;
                }
                final public function fazerAniversario(){
                    $this->setIdade($this->getIdade() + 1);
                }
            }
            class Aluno extends Pessoa{
                private $matricula;
                private $curso;
                function getMatricula(){
                    return $this->matricula;
                }
                function setMatricula($m){
                    $this->matricula = $m;
                }
                function getCurso(){
                    return $this->curso;
                }
                function setCurso($c){
                    $this->curso = $c;
                }
                function cancelarMatricula(){
                    $this->setMatricula(false);
                    echo"Matricula será cancelada";
                }
                function pagarMensalidade(){
                    echo "Mensalidade foi paga!";
                }
            }
            class Professor extends Pessoa{
                private $especialidade;
                private $salario;
                function getEspecialidade(){
                    return $this->especialidade;
                }
                function setEspecialidade($e){
                    $this->especialidade = $e;
                }
                function getSalario(){
                    return $this->salario;
                }
                function setSalario($s){
                    $this->salario = $s;
                }
                function receberAumento($aum){
                    $this->salario = $this->getSalario() + $aum;
                }
            }
            final class Funcionario extends Pessoa{
                private $setor;
                private $trabalhando;
                function getSetor(){
                    return $this->setor;
                }
                function setSetor($s){
                    $this->setor = $s;
                }
                function getTrabalhando(){
                    return $this->trabalhando;
                }
                function setTrabalhando($boolean){
                    $this->trabalhando = $boolean;
                }
                function mudarTrabalho($boolean){
                    $this->trabalhando = $boolean;
                }
            }
            class Bolsista extends Aluno{
                private $bolsa;
                function getBolsa(){
                    return $this->bolsa;
                }
                function setBolsa($b){
                    $this->bolsa = $b;
                }
                function renovarBolsa(){
                    echo"Bolsa renovada";
                }
                function pagarMensalidade(){
                    echo "O aluno ".$this->getNome()." é bolsista, então paga com desconto";
                }
            }
            $p2 = new Aluno("Kamilla", 21, "Feminino");
            $p3 = new Professor("Caça rato", 20, "Home");
            $p4 = new Funcionario("Yasmine", 23, "Mulé");
            $p2->setMatricula(1234);
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>