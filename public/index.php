<?php
//http://pooc.dev:8080/
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Configurando o autoload
define('CLASS_DIR','../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$dadosPopula =  array('nome' => 'Lucas Martins', 'valor' => '22', 'categoria' => 3, 'descricao' => 'descricao do produto');

/*** connect to SQLite database ***/
try {
    $dbh = new PDO("sqlite:../categoria.db3");
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$query =  "SELECT * FROM categoria";

$cat = array();
foreach ($dbh->query($query) as $row)
{
    $cat[$row[0]] = $row[1]; 
}    

//$di = require '../scripts/instance.php';
//$di->set('request',new \FABIANO\Form\Request());

$request = new \FABIANO\Form\Request();

$validator = new \FABIANO\Form\Validator($request);

$form = new \FABIANO\Form\GeraForm($validator);

$form->setAction('mailto:teste@teste.com');
$form->setMetodo('GET');


$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Nome')
      ->setStyle('display:block');
$form->createField($campo);

$campoNome = new \FABIANO\Form\InputTextFactory();
$campo = $campoNome->newField();
$campo->setType('text')
	  ->setId('nome')
	  ->setValue($dadosPopula['nome'])
	  ->setPlaceholder('seu nome');


$form->createField($campo);

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Valor')
	  ->setStyle('display:block');
$form->createField($campo);

$campoValor = new \FABIANO\Form\InputTextFactory();
$campo = $campoValor->newField();
$campo->setType('text')
	  ->setId('valor')
	  ->setValue($dadosPopula['valor'])
	  ->setPlaceholder('valor do produto');

/*print('<pre>');
print_r($campo);
print('</pre>');*/

$form->createField($campo);

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Categoria')
	  ->setStyle('display:block');
$form->createField($campo);

$campoEstado = new \FABIANO\Form\SelectFactory();
$campo = $campoEstado->newField();
$campo->setId('categoria')
	  ->setOption($cat)
	  ->setSelected($dadosPopula['categoria'])
	  ->setName('Categoria');
$form->createField($campo);	 

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Descri&ccedil;&atilde;o')
      ->setStyle('display:block');
$form->createField($campo);

$campoDescricao = new \FABIANO\Form\InputTextFactory();
$campo = $campoDescricao->newField();
$campo->setType('text')
	  ->setId('descricao')
	  ->setValue($dadosPopula['descricao'])
	  ->setPlaceholder('sua descri&ccedil;&atilde;o');
$form->createField($campo); 


$campoSubmit = new \FABIANO\Form\SubmitFactory();
$campo = $campoSubmit->newField();
$campo->setType('submit')
	  ->setValue('Enviar formulário')
	  ->setStyle('display:block; clear:both; margin:10px 0 0 0');
$form->createField($campo);

$campoReset = new \FABIANO\Form\ResetFactory();
$campo = $campoReset->newField();
$campo->setType('reset')
	  ->setValue('Apagar')
	  ->setStyle('display:block; clear:both; margin:10px 0 0 0');
$form->createField($campo);

$form->verifica($dadosPopula);

$form->render();
