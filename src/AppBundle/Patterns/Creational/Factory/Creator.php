<?php

namespace AppBundle\Patterns\Creational\Factory;

/**
 *
 * @author adrian
 */
interface Creator {
    public function create($type);
}
