<?php

namespace FABIANO\Form;

use FABIANO\Form;
use FABIANO\Form\InterfaceForm\FormInterface;
use FABIANO\Form\InterfaceForm\ElementInterface;

class GeraForm implements FormInterface
{
	private $action; 
	private $item = array();
	private $valores = array();
	private $formElemment;
	private $metodo;

	public function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	public function setMetodo($metodo)
	{
		$this->metodo = $metodo;
		return $this;
	}

	public function setAction($action)
	{
		$this->action = $action;
		return $this;
	}


	public function createField(ElementInterface $item)
	{
		$this->item[] = $item;
		return $this;
	}



	private function criandoForm()
	{
		$this->form = "<form action='{$this->action}' method='{$this->metodo}'>";
		$this->form .= '';
		foreach ($this->item as $cada_item) {
        	$this->form .= $cada_item->getElement();
        	//$this->valores[] = $cada_item->getValue(); 

        }
		$this->form .= '</form>';
		return $this->form;
	}

	public function verifica($dados){

		$retorno = '';
		$li = '';
		foreach ($dados as $k => $v) {

			// Caso o nome do produto não esteja no array ou esteja vazio;
			if($k == 'nome' && $v == ''){
				$li .= '<li>Erro: o campo <b>'.$k.'</b> est&aacute; vazio.</li>';
			}

			//Caso o valor do produto não seja numérico
			if($k == 'valor' && (!is_numeric($v))){
				$li .= '<li>Erro: o campo <b>'.$k.'</b> nao &eacute; n&uacute;mero.</li>';
			}

			//Caso a descrição contenha +200 caracteres.
			if($k == 'descricao' && (strlen($v) > '200')){
				$li .= '<li>Erro: o campo <b>'.$k.'</b> tem mais de 200 caracteres.</li>';
			}

        }	

        if($li != ''){
			$retorno = '<ul>';
			$retorno .= $li;
			$retorno .= '</ul>';
	}

		echo $retorno;	
	}


	public function render()
	{
		echo $this->criandoForm();
	}	

}