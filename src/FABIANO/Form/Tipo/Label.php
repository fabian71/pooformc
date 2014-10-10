<?php
namespace FABIANO\Form\Tipo;

use FABIANO\Form\InterfaceForm\ElementInterface;

class Label extends ElementAbstract implements ElementInterface 
{

    public function getElement()
    {
        $el = '';
        $el .= "<label";

        if($this->style){
            $el .= " style='{$this->style}' ";
        }

        if($this->id){
            $el .= " id='{$this->id}' ";
        }

         $el .= " >";

        if($this->label){
            $el .= " {$this->label} ";
        }     

        $el .= " </label>";
        
        return $el . "\n"; 
    }
}
