<?php

namespace toysBoys;

abstract class AbstractToys{
    public abstract function getName();
    public abstract function setName($Name);
    public abstract function getAge();
    public abstract function setAge($Age);
    public abstract function getMaterials();
    public abstract function setMaterials($Materials);



    public function __toString()
    {
        $data = '';
        $data .= '<li> Name toys: ' . $this->getName() . "</li>\n";
        $data .= '<li> Age children: ' . $this->getAge() . "</li>\n";
        $data .= '<li> Materials: ' . $this->getMaterials() . "</li>\n";
        return $data;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}

?>