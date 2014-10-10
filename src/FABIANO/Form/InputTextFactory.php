<?php
namespace FABIANO\Form;

class InputTextFactory extends AbstractFactory
{
	public function newField()
	{
		return new \FABIANO\Form\Tipo\InputText();
	}
	
}