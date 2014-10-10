<?php
namespace FABIANO\Form\Tipo;

use FABIANO\Form\InterfaceForm\ElementInterface;

class ResetForm extends ElementAbstract implements ElementInterface 
{
    public function getElement()
    {
        $el = '';
        
        $el .= "<input type='{$this->type}' ";

        if($this->style){
            $el .= " style='{$this->style}' ";
        }

        if($this->id){
            $el .= " id='{$this->id}' ";
        }

        if($this->value){
            $el .= " {$this->value} ";
        }     

        $el .= " />";
        
        return $el . "\n"; 
    }
}
