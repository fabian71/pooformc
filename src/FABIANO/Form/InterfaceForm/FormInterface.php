<?php

namespace FABIANO\Form\InterfaceForm;

use FABIANO\Form\InterfaceForm\ElementInterface;

interface FormInterface
{
	public function render();
	public function setAction($action);
	public function setMetodo($metodo);
}