<?php
namespace FABIANO\Form\Tipo;

use FABIANO\Form\InterfaceForm\ElementInterface;

class TextArea extends ElementAbstract implements ElementInterface 
{
    public function getElement()
    {
        $el = "";  

        $el .= "<textarea cols='30'>";

        if($this->id){
            $el .= " id='{$this->id}' ";
        }


        if($this->name){
            $el .= " name='{$this->name}' ";
        }

        if($this->value){
            $el .= " {$this->value} ";
        }       

        $el .= "</textarea>";
        
        return $el . "\n"; 

    }
}
