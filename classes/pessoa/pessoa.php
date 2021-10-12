<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;
        protected function ganharExp($e){
            $this->setExperiencia($this->getExperiencia() + $e);
        }
        function getNome(){
            return $this->nome;
        }
        function setNome($n){
            $this->nome = $n;
        }
        function getIdade(){
            return $this->idade;
        }
        function setIdade($i){
            $this->idade = $i;
        }
        function getSexo(){
            return $this->sexo;
        }
        function setSexo($s){
            $this->sexo = $s;
        }
        function getExperiencia(){
            return $this->experiencia;
        }
        function setExperiencia($e){
            $this->experiencia = $e;
        }
    }
    ?>