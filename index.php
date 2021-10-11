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
            class pessoa{
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
                public function fazerAniversario(){
                    $this->setIdade($this->getIdade() + 1);
                }
            }
            interface publicacao{
                public function abrir();
                public function fechar();
                public function folhear($p);
                public function avancarPag();
                public function voltarPag();
            }
            class livro implements publicacao{
                private $titulo;
                private $autor;
                private $totPaginas;
                private $pagAtual;
                private $aberto;
                private $leitor;
                function __construct($titulo, $autor, $totPaginas, $leitor)
                {
                    $this->titulo = $titulo;
                    $this->autor = $autor;
                    $this->totPaginas = $totPaginas;
                    $this->aberto = false;
                    $this->pagAtual = 0;
                    $this->leitor = $leitor;
                }
                public function getTitulo(){
                    return $this->titulo;
                }
                private function setTitulo($t){
                    $this->titulo = $t;
                }
                public function getAutor(){
                    return $this->autor;
                }
                private function setAutor($a){
                    $this->autor = $a;
                }
                public function getTotPaginas(){
                    return $this->totPaginas;
                }
                private function setTotPaginas($p){
                    $this->totPaginas = $p;
                }
                public function getPagAtual(){
                    return $this->pagAtual;
                }
                public function setPagAtual($p){
                    if($p > $this->getTotPaginas()){
                        echo"O livro vai até a página ".$this->getTotPaginas();
                    }else{
                        $this->pagAtual = $p;
                    }
                }
                public function getAberto(){
                    return $this->aberto;
                }
                public function setAberto($boolean){
                    $this->aberto = $boolean;
                }
                public function getLeitor(){
                    return $this->leitor;
                }
                public function setLeitor($l){
                    $this->leitor = $l;
                }
                public function abrir(){
                    $this->setAberto(true);
                }
                public function fechar(){
                    $this->setAberto(false);
                }
                public function folhear($p){
                    $this->setPagAtual($p);
                }
                public function avancarPag(){
                    $this->setPagAtual($this->getPagAtual() + 1);
                }
                public function voltarPag(){
                    $this->setPagAtual($this->getPagAtual() - 1);
                }
                public function detalhes(){
                    echo "Livro".$this->getTitulo()." escrito por ".$this->getAutor();
                    echo "<br> Páginas: ".$this->getTotPaginas()." atual ".$this->getPagAtual();
                    echo "<br> Sendo lido por ".$this->leitor->getNome();
                }
            }
            $p = array();
            $p[0] = new pessoa("Tonio", 20, "Masculino");
            $p[1] = new pessoa("Caça Rato", 20, "Masculino");
            $l = array();
            $l[0] = new livro("Titulo do livro 1", "Euzinho", 100, $p[0]);
            $l[1] = new livro("Titulo do livro 2", "outra pessoa", 75, $p[1]);
            $l[0]->folhear(15);
            $l[0]->avancarPag();
            $l[0]->detalhes();  
        ?>
    </pre>
</body>
</html>