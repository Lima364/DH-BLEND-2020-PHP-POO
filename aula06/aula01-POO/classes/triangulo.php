<?php

// classe triangulo

class Triangulo
{
    public $triangulo1;
    public $trinagulo2;
    public $triangulo3;

    public function calcularArea()
    {

    }
}

<?php

    // Classe Triangulo
    class Triangulo {
        
        // Propriedades ou atributos (ou características)
        public $baseProp;
        public $alturaProp;

        // Métodos (ou ações, funções)
        public function calcularArea() {
            
            // $this serve para declararmos que estamos pegando o valor 'Desse' objeto (this)
            // E a single arrow (->) serve para acessarmos a propriedade do objeto
            $area = $this->baseProp * $this->alturaProp / 2;
            return $area;
        }

    }

?>

// $area =($this->baseProp * $this->alturaProp / 2);
//             return $area;
