<?php
namespace FABIANO\Form;

class SubmitFactory extends AbstractFActory
{
	public function newField()
	{
		return new \FABIANO\Form\Tipo\Submit();
	}
	
}