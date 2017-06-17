<?php

namespace AppBundle\Patterns\Creational\Prototype;

/**
 * Description of Portfolio
 *
 * @author adrian
 */
abstract class Portfolio {
    protected $name;
    protected $technology = array();
    
    abstract function __clone();
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    function getTechnology() {
        return $this->technology;
    }
    
    function setTechnology(array $technology) {
        $this->technology = $technology;
    }
}
