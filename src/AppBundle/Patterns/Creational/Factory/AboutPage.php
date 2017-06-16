<?php

namespace AppBundle\Patterns\Creational\Factory;

/**
 * Description of AboutPage
 *
 * @author adrian
 */
class AboutPage implements Page {

    private $name;

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}
