<?php

    // classe IMC
    class IndiceMassaCorporal {

        // atributos
        public $pesoProp;
        public $alturaProp;

        // metodos
        public function calculaMassaCorporal(){
            $imc = ($this->pesoProp / ($this->alturaProp * $this->alturaProp));
            return $imc;
        }

        public function situacaoPeso()
        {
            $x = $this->calculaMassaCorporal();
            
            if($x < 20){
                return "Abaixo do Peso";

            } else if($x)
            
            imc < 20 = abaixo do peso
            imc >=
        }
    }

?>