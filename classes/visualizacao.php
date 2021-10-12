<?php
    require_once "pessoa/gafanhoto.php";
    require_once "video/video.php";
    class Vizualizacao{
        private $espectador;
        private $filme;
        function __construct($espectador, $filme)
        {
            $this->espectador = $espectador;
            $this->filme = $filme;
        }
        function avaliar(){
            $this->filme->like();
        }
        function assistir(){
            $this->espectador->viuMaisUm();
            $this->filme->assistido();
        }

    }
?>