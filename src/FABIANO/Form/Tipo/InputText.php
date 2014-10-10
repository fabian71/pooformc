<?php
namespace FABIANO\Form\Tipo;

use FABIANO\Form\InterfaceForm\ElementInterface;

class InputText extends ElementAbstract implements ElementInterface 
{
    public function __construct(){

    }
    
    public function getElement()
    {

        $el = "<input type='{$this->type}'";

        if($this->id){
            $el .= " id='{$this->id}' ";
        }

        if($this->name){
            $el .= " name='{$this->name}' ";
        }

        if($this->value){
            $el .= " value='{$this->value}' ";
        }        

        if($this->required){
            $el .= ' required ';
        }

        if($this->placeholder){
            $el .= " placeholder='{$this->placeholder}' ";
        }           

        $el .= "/>";
        
        return $el . "\n"; 

    }
}
