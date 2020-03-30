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
<!-- Uma classe é basicamente a definição abstrata de algo.  Um animal, objeto, construção....  
Veremos em breve que classes possuem características/atributos (chamamos de propriedades) e 
ações (funções, métodos)  Por exemplo, objetos que pertençam à classe Celular vão ter todas 
as características e ações da classe Celular. Exemplos:  Propriedades (características): 
Cor, Modelo, Marca, Memória...  Métodos (ações): Ligar, Desligar, Carregar... -->
