<?php
    require_once "acoesVideo.php";
    class Video implements acoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 0;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }
        function getTitulo(){
            return $this->titulo;
        }
        function setTitulo($t){
            $this->titulo = $t;
        }
        function getAvalicao(){
            return $this->avaliacao;
        }
        function setAvaliacao($a){
            $this->avaliacao = $a;
        }
        function getViews(){
            return $this->views;
        }
        function setViews($v){
            $this->views = $v;
        }
        function getCurtidas(){
            return $this->curtidas;
        }
        function setCurtidas($c){
            $this->curtidas = $c;
        }
        function getReproduzindo(){
            return $this->reproduzindo;
        }
        function setReproduzindo($r){
            $this->reproduzindo = $r;
        }
        function play(){
            $this->reproduzindo = true;
        }
        function pause(){
            $this->reproduzindo = false;
        }
        function like(){
            $this->setCurtidas($this->getCurtidas() + 1);
        }
        function assistido(){
            $this->setViews($this->getViews() + 1);
        }
    }
?>