<?php

namespace toysBoys;

class Cars extends AbstractToys{
    protected $name;

    protected $age;

    protected $materials;

    protected $params = [];

    /**
     * Cars constructor.
     * @param $name
     * @param $age
     * @param $materials
     */
    public function __construct($params = [])
    {
        foreach ($params as $key => $value) {
            $this->params[$key] = $value;
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * @param mixed $materials
     */
    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }

}

?>