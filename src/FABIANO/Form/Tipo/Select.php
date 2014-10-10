<?php
namespace FABIANO\Form\Tipo;

use FABIANO\Form\InterfaceForm\ElementInterface;

class Select extends ElementAbstract implements ElementInterface 
{
    private $option = array();

    public function getOption()
    {
        return $this->option;
    }
    
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }

    public function getElement()
    {
        $el = "";

        $el .= "<select ";

        if($this->id){
            $el .= " id='{$this->id}' ";
        }

        if($this->name){
            $el .= " name='{$this->name}' ";
        }

        $el .= " />";

        foreach ($this->option as $key => $value) {
            $selected = '';
            if(($this->selected) AND ($this->selected == $key)){
                $selected = 'selected';
            }
            $el .= "<option $selected value='$key'>$value";
        }

        $el .= "</select>";
        
        return $el . "\n"; 

    }
}
