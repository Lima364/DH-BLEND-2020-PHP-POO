RESUMÃO  
Classe: define propriedades e métodos  

Objeto: é criado (instanciado) a partir de uma classe. Exemplo: 
$meuObjeto = new MinhaClasse();  

Propriedade: é uma característica. Na classe, definimos essas propriedades:  
public $propriedade1; 
public $propriedade2;  

Para acessarmos essas propriedades de um objeto, usamos a single arrow: 
$meuObjeto->propriedade1; $meuObjeto->propriedade2;  

E para manipularmos as propriedades do objeto propriamente dito dentro da classe, usamos o $this. 
O $this representa o objeto instanciado (todo e qualquer objeto criado a partir da classe). Exemplo: 
$propriedadeUmDoObjeto = $this->propriedade1;  

Métodos: são as funções declaradas na classe. Exemplo: 
public function meuMetodo() { ... }  

E para acessar o método a partir do objeto, usamos $meuObjeto->meuMetodo(); 

