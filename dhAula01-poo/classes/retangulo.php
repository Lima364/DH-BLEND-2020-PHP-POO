<?php

    // classe Retangulo
    class Retangulo {

        // atributos
        public $baseProp;
        public $alturaProp;

        // metodos
        public function calculaArea(){
            $area = ($this->baseProp * $this->alturaProp);
            return $area;
        }
    }

?>
<!-- Isso é um teste pra saber se mantem o que fiz quando eu fizer um git pull -->