<?php
    require_once "pessoa.php";
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;
        function __construct($nome, $idade, $sexo, $login)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->login = $login;
            $this->experiencia = 0;
            $this->totAssistido = 0;
        }
        function getLogin(){
            return $this->login;
        }
        function setLogin($l){
            $this->login = $l;
        }
        function getTotAssistido(){
            return $this->totAssistido;
        }
        function setTotAssistido($t){
            $this->totAssistido = $t;
        }
        function viuMaisUm(){
            $this->setTotAssistido($this->getTotAssistido() + 1);
            $this->setExperiencia($this->getExperiencia() + 50);
        }
    }
?>