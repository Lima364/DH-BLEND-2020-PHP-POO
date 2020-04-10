classes/Equipamento.php

<?php

    abstract class Equipamento {

        public $ligado;

        public function ligar() {
            echo "ligado";
        }

    }

?>



programa.php

<?php

    require_once("./classes/Equipamento.php");

    $equipamento = new Equipamento();

    $equipamento->ligar();

?>