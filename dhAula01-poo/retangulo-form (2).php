<?php

// chamo a classe retangulo para ser utilizada aqui.
require_once("./classes/retangulo.php");

// PHP $ _POST é uma variável super global de PHP que é usado para coletar dados de formulários 
// depois de enviar um formulário HTML com method = "post". $ _ POST também é amplamente usada
// para passar variáveis.
// variável $ _POST Super global para recolher o valor do campo de entrada:
if (isset($_POST) && $_POST) { //O isset é para verificar se, além de existir, ele tem algum valor
  // No topo do arquivo, estamos verificando se recebemos algum parâmetro pelo método POST ($_POST).  
  // O isset é para verificar se, além de existir, ele tem algum valor.
  // Lembrando que o $_POST captura os valores dos inputs (atributo value, que é preenchido quando 
  // preenchemos o input no front e enviamos) através do atributo name do input. 
  // Ou seja, se temos <input name="xyz"/>, capturamos pelo post com $_POST["xyz"] 

  $base = $_POST["base"];
  $altura = $_POST["altura"];

  // Instanciando um objeto a partir da classe Retangulo 
  $retangulo = new Retangulo();

  // Instanciando um objeto a partir da classe Retangulo 
  $retangulo->baseProp = $base;
  $retangulo->alturaProp = $altura;

  // Chamando o método (função) calcularArea() 
  $resultado = $retangulo->calculaArea();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Digital House</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Calculando área do retângulo</h1>
    <!-- Há um formulário (já pronto) onde inserimos as medidas da altura e base.  
    Ao inserir, o formulário enviará essas informações para a mesma página (por isso o action do form está vazio).  -->
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="base">Base</label>
            <input type="text" class="form-control" name="base" id="base">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" name="altura" id="altura">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php if (isset($_POST) && $_POST) :
      if ($resultado) : ?>
        <div class="col-md-12">
          <div class="col-md-2 alert alert-success">
            <p><?= "A área do retângulo é: " . $resultado ?></p>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    </form>
  </div>
</body>

</html>