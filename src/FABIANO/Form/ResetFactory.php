<?php
namespace FABIANO\Form;

class ResetFactory extends AbstractFActory
{
	public function newField()
	{
		return new \FABIANO\Form\Tipo\ResetForm();
	}
	
}