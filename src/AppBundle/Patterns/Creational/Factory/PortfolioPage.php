<?php

namespace AppBundle\Patterns\Creational\Factory;

/**
 * Description of PortfolioPage
 *
 * @author adrian
 */
class PortfolioPage implements Page {
    private $name;
    
    public function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}
