<?php

namespace AppBundle\Patterns\Creational\Prototype;

/**
 * Description of GraphicPortfolio
 *
 * @author adrian
 */
class GraphicPortfolio extends Portfolio {
    function __construct(array $technology) {
        $this->technology = $technology;
    }

    public function __clone() {
        
    }
}
