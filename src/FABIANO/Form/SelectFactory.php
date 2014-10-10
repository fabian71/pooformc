<?php
namespace FABIANO\Form;

class SelectFactory extends AbstractFActory
{
	public function newField()
	{
		return new \FABIANO\Form\Tipo\Select();
	}
	
}