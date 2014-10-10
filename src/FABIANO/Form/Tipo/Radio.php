<?php
namespace FABIANO\Form\Tipo;

use FABIANO\Form\InterfaceForm\ElementInterface;

class Radio extends ElementAbstract implements ElementInterface 
{
    private $option;

    public function getElement()
    {
        $el = '';

        $el .= "<input type='{$this->type}' ";

        if($this->id){
            $el .= " id='{$this->id}' ";
        }

        if($this->name){
            $el .= " name='{$this->name}' ";
        }

        if($this->value){
            $el .= " value='{$this->value}' ";
        }    

        if($this->checked){
            $el .= " checked ";
        } 

        $el .= " />";

        if($this->value){
            $el .= $this->value;
        }
        
        return $el . "\n";
    }
}
