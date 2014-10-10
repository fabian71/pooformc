<?php
namespace FABIANO\Form\Tipo;


abstract class ElementAbstract 
{
    protected $class;
    protected $id;
    protected $required = false;
    protected $name;
    protected $value;
    protected $label;
    protected $style;
    protected $placeholder;
    protected $selected = false;
    protected $checked = false;
    protected $type;

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;    
        return $this;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }   

    public function setLabel($label)
    {
        $this->label = $label;    
        return $this;
    }    

    public function setClass($class)
    {
        $this->class = $class;    
        return $this;
    }

    public function setStyle($style)
    {
        $this->style = $style;    
        return $this;
    }    

    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
    
    public function setSelected($selected)
    {
        $this->selected = $selected;
        return $this;
    }
    
    public function setChecked($checked)
    {
        $this->checked = $checked;
        return $this;
    }

    abstract public function getElement();

}
