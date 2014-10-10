<?php
namespace FABIANO\Form;

class LabelFactory extends AbstractFActory
{
	public function newField()
	{
		return new \FABIANO\Form\Tipo\Label();
	}
	
}