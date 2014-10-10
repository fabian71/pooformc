<?php

namespace FABIANO\Form;

class Validator
{
	public function __construct(Request $di)
	{
		$this->di = $di;
	}

	public function getDi()
    {
        return $this->di;
    }

}