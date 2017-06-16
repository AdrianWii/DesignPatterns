<?php

namespace AppBundle\Patterns\Creational\Factory;

/**
 * Description of ContactPage
 *
 * @author adrian
 */
class ContactPage implements Page {

    private $name;
    
    public function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}
