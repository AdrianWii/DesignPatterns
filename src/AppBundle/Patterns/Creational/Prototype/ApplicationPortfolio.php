<?php

namespace AppBundle\Patterns\Creational\Prototype;

/**
 * Description of ApplicationPortfolio
 *
 * @author adrian
 */
class ApplicationPortfolio extends Portfolio {
    function __construct(array $technology) {
        $this->technology = $technology;
    }

    public function __clone() {
        
    }
}
